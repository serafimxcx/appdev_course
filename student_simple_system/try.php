<?php
include("connect.php");

$tableHTML = '';

if (isset($_POST['team_id'])) {
    $selectedTeamId = $_POST['team_id'];

    $query = "SELECT 
    pg.players_game_id,
    t.team_name,
    CONCAT(p.first_name, ' ', COALESCE(p.middle_name, ''), ' ', p.last_name) AS full_name,
    pg.status,
    pg.injured,
    (SUM(CASE WHEN pbp.kind_shot LIKE '3points-made' THEN 3 ELSE 0 END) +
     SUM(CASE WHEN pbp.kind_shot LIKE '2points-made' THEN 2 ELSE 0 END) +
     SUM(CASE WHEN pbp.kind_shot LIKE 'freethrow1-made' THEN 1 ELSE 0 END) +
     SUM(CASE WHEN pbp.kind_shot LIKE 'freethrow2-made' THEN 1 ELSE 0 END) +
     SUM(CASE WHEN pbp.kind_shot LIKE 'freethrow3-made' THEN 1 ELSE 0 END)
    ) AS total_points,
    
    SUM(CASE WHEN pbp.kind_shot LIKE '%-made' THEN 1 ELSE 0 END) AS f_g_made,
    SUM(CASE WHEN pbp.kind_shot LIKE '%-missed' THEN 1 ELSE 0 END) AS f_g_missed,
    SUM(CASE WHEN pbp.kind_shot LIKE '2points-made' THEN 1 ELSE 0 END) AS 2_p_made,
    SUM(CASE WHEN pbp.kind_shot LIKE '2points-missed' THEN 1 ELSE 0 END) AS 2_p_missed,
    SUM(CASE WHEN pbp.kind_shot LIKE '3points-made' THEN 1 ELSE 0 END) AS 3_p_made,
    SUM(CASE WHEN pbp.kind_shot LIKE '3points-missed' THEN 1 ELSE 0 END) AS 3_p_missed,
    COUNT(CASE WHEN pbp.kind_shot LIKE '2points-made' OR pbp.kind_shot LIKE '2points-missed' THEN pg.players_game_id ELSE NULL END) AS 2_p_attempted,
    COUNT(CASE WHEN pbp.kind_shot LIKE '3points-made' OR pbp.kind_shot LIKE '3points-missed' THEN pg.players_game_id ELSE NULL END) AS 3_p_attempted,
    COUNT(CASE WHEN pbp.kind_shot LIKE '%-made' OR pbp.kind_shot LIKE '%-missed' THEN pg.players_game_id ELSE NULL END) AS f_g_attempted,
    SUM(CASE WHEN pbp.kind_shot LIKE 'freethrow1-made' THEN 1 ELSE 0 END) AS ft1_made,
    SUM(CASE WHEN pbp.kind_shot LIKE 'freethrow2-made' THEN 1 ELSE 0 END) AS ft2_made,
    SUM(CASE WHEN pbp.kind_shot LIKE 'freethrow3-made' THEN 1 ELSE 0 END) AS ft3_made,
    SUM(CASE WHEN pbp.kind_shot LIKE 'freethrow1-missed' THEN 1 ELSE 0 END) AS ft1_missed,
    SUM(CASE WHEN pbp.kind_shot LIKE 'freethrow2-missed' THEN 1 ELSE 0 END) AS ft2_missed,
    SUM(CASE WHEN pbp.kind_shot LIKE 'freethrow3-missed' THEN 1 ELSE 0 END) AS ft3_missed,
    SUM(CASE WHEN pbp.kind_shot LIKE 'rebound' THEN 1 ELSE 0 END) AS rbb,
    SUM(CASE WHEN pbp.kind_shot LIKE 'steal' THEN 1 ELSE 0 END) AS stl,
    SUM(CASE WHEN pbp.kind_shot LIKE 'assist' THEN 1 ELSE 0 END) AS ass,
    SUM(CASE WHEN pbp.kind_shot LIKE 'block' THEN 1 ELSE 0 END) AS blk
    FROM players_game pg
INNER JOIN players p ON pg.players_in_team_id = p.player_id
INNER JOIN teams t ON pg.team_id = t.team_id
LEFT JOIN play_by_play pbp ON pbp.teams_id = pg.team_id
LEFT JOIN games ON games.game_id = pbp.game_id
WHERE pg.team_id = '$selectedTeamId' 
  AND (games.home_team_id = '$selectedTeamId' OR games.away_team_id = '$selectedTeamId')
GROUP BY pg.players_game_id, t.team_name, full_name, pg.status, pg.injured
ORDER BY total_points DESC";



    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $tableHTML .= "<table class='table text-center table-hover table-striped table-bordered'>";
    $tableHTML .= "<tr class='text-center' style='background-color: #0A2558; color: white;'>
                    <th class='col-xs-1 text-center'>Player</th>
                    <th class='col-xs-1 text-center'>Injured</th>
                    <th class='col-xs-1 text-center'>Status</th>
                    <th class='col-xs-1 text-center'>Points</th>
                    <!-- Adjust column names here according to the fetched columns -->
                    <th class='col-xs-1 text-center'>FGM</th>
                    <th class='col-xs-1 text-center'>FGA</th>
                    <th class='col-xs-1 text-center'>FG%</th>
                    <th class='col-xs-1 text-center'>2PM</th>
                    <th class='col-xs-1 text-center'>2PA</th>
                    <th class='col-xs-1 text-center'>2P%</th>
                    <th class='col-xs-1 text-center'>3PM</th>
                    <th class='col-xs-1 text-center'>3PA</th>
                    <th class='col-xs-1 text-center'>3P%</th>
                    <th class='col-xs-1 text-center'>FTM</th>
                    <th class='col-xs-1 text-center'>FTA</th>
                    <th class='col-xs-1 text-center'>FT%</th>
                    <th class='col-xs-1 text-center'>RBB</th>
                    <th class='col-xs-1 text-center'>STL</th>
                    <th class='col-xs-1 text-center'>ASS</th>
                    <th class='col-xs-1 text-center'>BLK</th>
                    <th class='col-xs-1 text-center'>Actions</th>
                </tr>";

                while ($row = mysqli_fetch_assoc($result)) {
                    $fg_percentage = ($row["f_g_attempted"] > 0) ? ($row["f_g_made"] / $row["f_g_attempted"]) * 100 : 0;
                    $two_point_percentage = ($row["2_p_attempted"] > 0) ? ($row["2_p_made"] / ($row["2_p_made"] + $row["2_p_missed"])) * 100 : 0;
                    $three_point_percentage = ($row["3_p_attempted"] > 0) ? ($row["3_p_made"] / ($row["3_p_made"] + $row["3_p_missed"])) * 100 : 0;
                    $ft_made = $row["ft1_made"] + $row["ft2_made"] + $row["ft3_made"];
                    $ft_attempted = $ft_made + $row["ft1_missed"] + $row["ft2_missed"] + $row["ft3_missed"];
                    $ft_percentage = ($ft_attempted > 0) ? ($ft_made / $ft_attempted) * 100 : 0;
                    $playersGameId = $row['players_game_id'];
    
    // Update query to cover all fields based on fetched values

                
                    $tableHTML .= "<tr style='cursor:pointer;' class='game-records' record_id='" . $row["players_game_id"] . "'>"
                    . "<td>" . $row["full_name"] . "</td>"
                    . "<td>" . $row["injured"] . "</td>"
                    . "<td>" . $row["status"] . "</td>"
                    . "<td>" . $row["total_points"] . "</td>"
                    . "<td>" . $row["f_g_made"] . "</td>"
                    . "<td>" . $row["f_g_attempted"] . "</td>"
                    . "<td>" . $fg_percentage . "</td>"
                    . "<td>" . $row["2_p_made"] . "</td>"
                    . "<td>" . ($row["2_p_made"] + $row["2_p_missed"]) . "</td>"
                    . "<td>" . $two_point_percentage . "</td>"
                    . "<td>" . $row["3_p_made"] . "</td>"
                    . "<td>" . ($row["3_p_made"] + $row["3_p_missed"]) . "</td>"
                    . "<td>" . $three_point_percentage . "</td>"
                    . "<td>" . $ft_made . "</td>"
                    . "<td>" . $ft_attempted . "</td>"
                    . "<td>" . $ft_percentage . "</td>"
                    . "<td>" . $row["rbb"] . "</td>"
                    . "<td>" . $row["stl"] . "</td>"
                    . "<td>" . $row["ass"] . "</td>"
                    . "<td>" . $row["blk"] . "</td>"
                    . "<td>"
                    . "<button type='button' class='btn btn-danger remove-record' style='border-radius: 10px;' record_id='" . $row["players_game_id"] . "'>X</button>"
                    . "<button type='button' class='btn btn-danger add-record' style='border-radius: 10px;' record_id='" . $row["players_game_id"] . "'>ADD</button>"
                    . "</td>"
                    . "</tr>";
                }
                $tableHTML .= "</table>"; // Close the table tag outside the loop
                echo $tableHTML;
            }                
?>


        <script>

$(document).ready(function() {
    $('.add-record').on('click', function() {
        var playerId = $(this).attr('record_id');
        var playerName = $(this).closest('tr').find('td:eq(0)').text(); // Player Name
        var injured = $(this).closest('tr').find('td:eq(1)').text(); // Injured
        var status = $(this).closest('tr').find('td:eq(2)').text(); // Status
        var totalPoints = $(this).closest('tr').find('td:eq(3)').text(); // Total Points
        var f_g_made = $(this).closest('tr').find('td:eq(4)').text(); // FGM
        var f_g_attempted = $(this).closest('tr').find('td:eq(5)').text(); // FGA
        var fg_percentage = $(this).closest('tr').find('td:eq(6)').text(); // FG%
        var 2_p_made = $(this).closest('tr').find('td:eq(7)').text(); // FG%
        var 2_p_attempted = $(this).closest('tr').find('td:eq(6)').text(); // FG%
        var 2_p_attempted = $(this).closest('tr').find('td:eq(6)').text(); // FG%

        // Similarly, collect other values here based on their respective positions
        
        var dataToSend = {
            player_id: playerId,
            player_name: playerName,
            injured: injured,
            status: status,
            total_points: totalPoints,
            f_g_made: f_g_made,
            f_g_attempted: f_g_attempted,
            fg_percentage: fg_percentage,
            // Add other collected values here
        };

        // AJAX call to send data to a PHP file
        $.ajax({
            type: 'POST',
            url: 'add_players_stats.php', // Replace with your PHP file handling the insertion
            data: dataToSend,
            success: function(response) {
                // Handle the response from the server if needed
                console.log(response);
                // You might update UI, show a success message, etc.
            },
            error: function(xhr, status, error) {
                // Handle errors from the server if any
                console.error(error);
            }
        });
    });
});


</script>