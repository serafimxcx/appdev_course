<?php 
include("../connect.php");

$loadallstats = "";

$sort = $_POST["sort"];
$team = $_POST["team_id"];


if($sort == "" && $team == ""){
    $query = "select ROW_NUMBER() OVER(ORDER BY SUM(tb_gamestats.points)/gameplayers.gamesplayed DESC) as rank, gameplayers.player_id, gameplayers.gamesplayed, gameplayers.gamestarter, tb_players.img_source, CONCAT(tb_players.last_name, ', ', tb_players.first_name) as playername, tb_teams.team_name,
    COALESCE(FORMAT((SUM(tb_gamestats.points)/gameplayers.gamesplayed), 2), '0') as ppg,
    COALESCE(FORMAT(((SUM(tb_gamestats.field_goal_made)/SUM(tb_gamestats.field_goal_attempt))*100), 2), '0') as fgp,
    COALESCE(FORMAT(((SUM(tb_gamestats.three_pts_made)/SUM(tb_gamestats.three_pts_attempt))*100), 2), '0') as tpp,
    COALESCE(FORMAT(((SUM(tb_gamestats.free_throw_made)/SUM(tb_gamestats.free_throw_attempt))*100), 2), '0') as ftp,
    COALESCE(FORMAT((SUM(tb_gamestats.o_rebounds)/gameplayers.gamesplayed), 2), '0') as off,
    COALESCE(FORMAT((SUM(tb_gamestats.d_rebounds)/gameplayers.gamesplayed), 2), '0') as def,
    COALESCE(FORMAT((SUM(tb_gamestats.o_rebounds + tb_gamestats.d_rebounds)/gameplayers.gamesplayed), 2), '0') as rpg,
    COALESCE(FORMAT((SUM(tb_gamestats.assists)/gameplayers.gamesplayed), 2), '0') as apg,
    COALESCE(FORMAT((SUM(tb_gamestats.steals)/gameplayers.gamesplayed), 2), '0') as spg,
    COALESCE(FORMAT((SUM(tb_gamestats.blocks)/gameplayers.gamesplayed), 2), '0') as bpg,
    COALESCE(FORMAT((SUM(tb_gamestats.turnovers)/gameplayers.gamesplayed), 2), '0') as tpg,
    COALESCE(FORMAT((SUM(tb_gamestats.fouls)/gameplayers.gamesplayed), 2), '0') as fpg
    FROM 
    (
        SELECT 
            player_id,
            COUNT(player_id) as gamesplayed,
            SUM(isFirstfive) as gamestarter
        FROM tb_gameplayers
        WHERE isInjured = 0
        GROUP BY player_id
    ) as gameplayers
    JOIN 
    tb_players ON gameplayers.player_id = tb_players.player_id
    JOIN 
    tb_teams ON tb_players.team_id = tb_teams.team_id
    LEFT JOIN 
    tb_gamestats ON gameplayers.player_id = tb_gamestats.player_id
    GROUP BY 
    gameplayers.player_id, gameplayers.gamesplayed, tb_players.img_source, playername, tb_teams.team_name
    order by rank
    ";
}else if($team != "" && $sort == ""){
    $query = "select ROW_NUMBER() OVER(ORDER BY SUM(tb_gamestats.points)/gameplayers.gamesplayed DESC) as rank, gameplayers.player_id, gameplayers.gamesplayed, gameplayers.gamestarter, tb_players.img_source, CONCAT(tb_players.last_name, ', ', tb_players.first_name) as playername, tb_teams.team_name,
    COALESCE(FORMAT((SUM(tb_gamestats.points)/gameplayers.gamesplayed), 2), '0') as ppg,
    COALESCE(FORMAT(((SUM(tb_gamestats.field_goal_made)/SUM(tb_gamestats.field_goal_attempt))*100), 2), '0') as fgp,
    COALESCE(FORMAT(((SUM(tb_gamestats.three_pts_made)/SUM(tb_gamestats.three_pts_attempt))*100), 2), '0') as tpp,
    COALESCE(FORMAT(((SUM(tb_gamestats.free_throw_made)/SUM(tb_gamestats.free_throw_attempt))*100), 2), '0') as ftp,
    COALESCE(FORMAT((SUM(tb_gamestats.o_rebounds)/gameplayers.gamesplayed), 2), '0') as off,
    COALESCE(FORMAT((SUM(tb_gamestats.d_rebounds)/gameplayers.gamesplayed), 2), '0') as def,
    COALESCE(FORMAT((SUM(tb_gamestats.o_rebounds + tb_gamestats.d_rebounds)/gameplayers.gamesplayed), 2), '0') as rpg,
    COALESCE(FORMAT((SUM(tb_gamestats.assists)/gameplayers.gamesplayed), 2), '0') as apg,
    COALESCE(FORMAT((SUM(tb_gamestats.steals)/gameplayers.gamesplayed), 2), '0') as spg,
    COALESCE(FORMAT((SUM(tb_gamestats.blocks)/gameplayers.gamesplayed), 2), '0') as bpg,
    COALESCE(FORMAT((SUM(tb_gamestats.turnovers)/gameplayers.gamesplayed), 2), '0') as tpg,
    COALESCE(FORMAT((SUM(tb_gamestats.fouls)/gameplayers.gamesplayed), 2), '0') as fpg
    FROM 
    (
        SELECT 
            player_id,
            COUNT(player_id) as gamesplayed,
            SUM(isFirstfive) as gamestarter
        FROM tb_gameplayers
        WHERE isInjured = 0
        GROUP BY player_id
    ) as gameplayers
    JOIN 
    tb_players ON gameplayers.player_id = tb_players.player_id
    JOIN 
    tb_teams ON tb_players.team_id = tb_teams.team_id
    LEFT JOIN 
    tb_gamestats ON gameplayers.player_id = tb_gamestats.player_id
    WHERE 
        tb_teams.team_id = $team
    GROUP BY 
    gameplayers.player_id, gameplayers.gamesplayed, tb_players.img_source, playername, tb_teams.team_name
    order by rank
    ";

}elseif($team != "" && $sort != ""){
    $query = "select ROW_NUMBER() OVER(ORDER BY SUM(tb_gamestats.points)/gameplayers.gamesplayed DESC) as rank, gameplayers.player_id, gameplayers.gamesplayed, gameplayers.gamestarter, tb_players.img_source, CONCAT(tb_players.last_name, ', ', tb_players.first_name) as playername, tb_teams.team_name,
    COALESCE(FORMAT((SUM(tb_gamestats.points)/gameplayers.gamesplayed), 2), '0') as ppg,
    COALESCE(FORMAT(((SUM(tb_gamestats.field_goal_made)/SUM(tb_gamestats.field_goal_attempt))*100), 2), '0') as fgp,
    COALESCE(FORMAT(((SUM(tb_gamestats.three_pts_made)/SUM(tb_gamestats.three_pts_attempt))*100), 2), '0') as tpp,
    COALESCE(FORMAT(((SUM(tb_gamestats.free_throw_made)/SUM(tb_gamestats.free_throw_attempt))*100), 2), '0') as ftp,
    COALESCE(FORMAT((SUM(tb_gamestats.o_rebounds)/gameplayers.gamesplayed), 2), '0') as off,
    COALESCE(FORMAT((SUM(tb_gamestats.d_rebounds)/gameplayers.gamesplayed), 2), '0') as def,
    COALESCE(FORMAT((SUM(tb_gamestats.o_rebounds + tb_gamestats.d_rebounds)/gameplayers.gamesplayed), 2), '0') as rpg,
    COALESCE(FORMAT((SUM(tb_gamestats.assists)/gameplayers.gamesplayed), 2), '0') as apg,
    COALESCE(FORMAT((SUM(tb_gamestats.steals)/gameplayers.gamesplayed), 2), '0') as spg,
    COALESCE(FORMAT((SUM(tb_gamestats.blocks)/gameplayers.gamesplayed), 2), '0') as bpg,
    COALESCE(FORMAT((SUM(tb_gamestats.turnovers)/gameplayers.gamesplayed), 2), '0') as tpg,
    COALESCE(FORMAT((SUM(tb_gamestats.fouls)/gameplayers.gamesplayed), 2), '0') as fpg
    FROM 
    (
        SELECT 
            player_id,
            COUNT(player_id) as gamesplayed,
            SUM(isFirstfive) as gamestarter
        FROM tb_gameplayers
        WHERE isInjured = 0
        GROUP BY player_id
    ) as gameplayers
    JOIN 
    tb_players ON gameplayers.player_id = tb_players.player_id
    JOIN 
    tb_teams ON tb_players.team_id = tb_teams.team_id
    LEFT JOIN 
    tb_gamestats ON gameplayers.player_id = tb_gamestats.player_id
    WHERE 
        tb_teams.team_id = $team
    GROUP BY 
    gameplayers.player_id, gameplayers.gamesplayed, tb_players.img_source, playername, tb_teams.team_name
    order by $sort
    ";
}elseif($team == "" && $sort != ""){
    $query = "select ROW_NUMBER() OVER(ORDER BY SUM(tb_gamestats.points)/gameplayers.gamesplayed DESC) as rank, gameplayers.player_id, gameplayers.gamesplayed, gameplayers.gamestarter, tb_players.img_source, CONCAT(tb_players.last_name, ', ', tb_players.first_name) as playername, tb_teams.team_name,
    COALESCE(FORMAT((SUM(tb_gamestats.points)/gameplayers.gamesplayed), 2), '0') as ppg,
    COALESCE(FORMAT(((SUM(tb_gamestats.field_goal_made)/SUM(tb_gamestats.field_goal_attempt))*100), 2), '0') as fgp,
    COALESCE(FORMAT(((SUM(tb_gamestats.three_pts_made)/SUM(tb_gamestats.three_pts_attempt))*100), 2), '0') as tpp,
    COALESCE(FORMAT(((SUM(tb_gamestats.free_throw_made)/SUM(tb_gamestats.free_throw_attempt))*100), 2), '0') as ftp,
    COALESCE(FORMAT((SUM(tb_gamestats.o_rebounds)/gameplayers.gamesplayed), 2), '0') as off,
    COALESCE(FORMAT((SUM(tb_gamestats.d_rebounds)/gameplayers.gamesplayed), 2), '0') as def,
    COALESCE(FORMAT((SUM(tb_gamestats.o_rebounds + tb_gamestats.d_rebounds)/gameplayers.gamesplayed), 2), '0') as rpg,
    COALESCE(FORMAT((SUM(tb_gamestats.assists)/gameplayers.gamesplayed), 2), '0') as apg,
    COALESCE(FORMAT((SUM(tb_gamestats.steals)/gameplayers.gamesplayed), 2), '0') as spg,
    COALESCE(FORMAT((SUM(tb_gamestats.blocks)/gameplayers.gamesplayed), 2), '0') as bpg,
    COALESCE(FORMAT((SUM(tb_gamestats.turnovers)/gameplayers.gamesplayed), 2), '0') as tpg,
    COALESCE(FORMAT((SUM(tb_gamestats.fouls)/gameplayers.gamesplayed), 2), '0') as fpg
    FROM 
    (
        SELECT 
            player_id,
            COUNT(player_id) as gamesplayed,
            SUM(isFirstfive) as gamestarter
        FROM tb_gameplayers
        WHERE isInjured = 0
        GROUP BY player_id
    ) as gameplayers
    JOIN 
    tb_players ON gameplayers.player_id = tb_players.player_id
    JOIN 
    tb_teams ON tb_players.team_id = tb_teams.team_id
    LEFT JOIN 
    tb_gamestats ON gameplayers.player_id = tb_gamestats.player_id
    GROUP BY 
    gameplayers.player_id, gameplayers.gamesplayed, tb_players.img_source, playername, tb_teams.team_name
    order by $sort
    ";
}



$result = mysqli_query($conn, $query);

$loadallstats .= "<table class='table table-striped table_standing'>
                    <tr>
                        <th class='sort_rank'>Rank</th>
                        <th class='sort_name'>Name</th>
                        <th class='sort_team'>Team</th>
                        <th title='Games'>G</th>
                        <th title='Games Started'>GS</th>
                        <th title='Points Per Game'>PPG</th>
                        <th title='Field Goal Percentage'>FG%</th>
                        <th title='Three Points Percentage'>3P%</th>
                        <th title='Free Throw Percentage'>FT%</th>
                        <th title='Offensive Rebounds'>OFF</th>
                        <th title='Defensive Rebounds'>DEF</th>
                        <th title='Rebounds Per Game'>RPG</th>
                        <th title='Assists Per Game'>APG</th>
                        <th title='Steals Per Game'>SPG</th>
                        <th title='Blocks Per Game'>BPG</th>
                        <th title='Turnovers'>TO</th>
                        <th title='Personal Fouls'>PF</th>
                    </tr>";

while($row = mysqli_fetch_assoc($result)){
    $loadallstats .= "<tr>
                        <td>$row[rank]</td>
                        <td><img src='https://drive.google.com/uc?export=view&id=".stripslashes($row["img_source"])."' onerror='ErrorImage($row[player_id])' class='img_player img_player_allstats' id='img_player$row[player_id]'> $row[playername]</td>
                        <td>$row[team_name]</td>
                        <td>$row[gamesplayed]</td>
                        <td>$row[gamestarter]</td>
                        <td>$row[ppg]</td>
                        <td>$row[fgp]</td>
                        <td>$row[tpp]</td>
                        <td>$row[ftp]</td>
                        <td>$row[off]</td>
                        <td>$row[def]</td>
                        <td>$row[rpg]</td>
                        <td>$row[apg]</td>
                        <td>$row[spg]</td>
                        <td>$row[bpg]</td>
                        <td>$row[tpg]</td>
                        <td>$row[fpg]</td>
                    </tr>";
}



$loadallstats .= "</table>";

echo $loadallstats;


?>