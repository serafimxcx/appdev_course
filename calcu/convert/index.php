<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Measurement Conversion</title>
    <script src="main.js"></script>
</head>

<body>

    <div class="container text-center">
        <br><br><br>
        <div class="border border-dark" id="divmenubtn">
            <h1>Measurement Conversion</h1>
            <br><br>
            <button type="button" class="btn btn-outline-dark" id="btn_fc">Feet to Centimeter</button>
            <button type="button" class="btn btn-outline-dark" id="btn_mkm">Mile to Kilometer</button>
            <button type="button" class="btn btn-outline-dark" id="btn_ha">Hectare to Acre</button>
            <button type="button" class="btn btn-outline-dark" id="btn_ym">Yard to Meter</button>
            <button type="button" class="btn btn-outline-dark" id="btn_og">Ounce to Gram</button>
            <button type="button" class="btn btn-outline-dark" id="btn_pkg">Kilogram to Pound</button>
            <button type="button" class="btn btn-outline-dark" id="btn_qp">Quart to Pint</button>
            <button type="button" class="btn btn-outline-dark" id="btn_cf">Celsius to Fahrenheit</button>
            <button type="button" class="btn btn-outline-dark" id="btn_kwhp">Kilowatt to Horsepower</button>
            <button type="button" class="btn btn-outline-dark" id="btn_hr">Hertz to Rad/s</button>
        </div>

        <br>
        <hr>
        <br>

        <div class="border border-dark" id="divconvert">
            <h2 id="c_measurement" style="display:none; "></h2>

            Enter <span id="c_unit1">Value:</span> &nbsp; <input type="text" class="text-right number" id="num1" value="0"> &nbsp;&nbsp;&nbsp;
            <button type="button" class="btn btn-success" id="btn_convert">Convert</button>&nbsp;&nbsp;&nbsp;
            <span id="c_unit2">Converted Value:</span> &nbsp; <input type="text" class="text-right number" id="output" value="0" readonly>&nbsp;&nbsp;&nbsp;
            <button type="button" class="btn btn-warning" id="btn_reverse">Reverse</button>
            <button type="button" class="btn btn-danger" id="btn_clear">Clear</button>
        </div>
    </div>

</body>

</html>