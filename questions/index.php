<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap2.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <title>Quiz</title>
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        <br>
        <h2>Identification Quiz</h2>
        <br>
        <table class="table table-bordered">
            <tr>
                <td>1. What disaster preparedness program was launched in 2024?</td>
                <td><input type="text" id="q1"></td>
                <td><span id="isCorrect1"></span> <span id="Correct1"></span></td>
            </tr>
            <tr>
                <td>2. What new mobile app did the Philippine government launch in 2024 for public services?</td>
                <td><input type="text" id="q2"></td>
                <td><span id="isCorrect2"></span><span id="Correct2"></span></td>
            </tr>
            <tr>
                <td>3. What new vaccine was introduced by the DOH in 2024?</td>
                <td><input type="text" id="q3"></td>
                <td><span id="isCorrect3"></span><span id="Correct3"></span></td>
            </tr>
            <tr>
                <td>4. Which Filipino actor gained international acclaim for a Netflix series in 2024?</td>
                <td><input type="text" id="q4"></td>
                <td><span id="isCorrect4"></span><span id="Correct4"></span></td>
            </tr>
            <tr>
                <td>5. What significant political event occurred in May 2024?</td>
                <td><input type="text" id="q5"></td>
                <td><span id="isCorrect5"></span><span id="Correct5"></span></td>
            </tr>
            <tr>
                <td>
                    <button type="button" class="btn btn-success" id="btn_check">CHECK</button>
                    <button type="button" class="btn btn-warning" id="btn_show" disabled>SHOW ANSWERS</button>
                    <button type="button" class="btn btn-danger" id="btn_clear">CLEAR</button>
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>Total Score: </label></td>
                <td><span id="total"></span></td>
                <td></td>
            </tr>
        </table>
    </div>
</body>
</html>
