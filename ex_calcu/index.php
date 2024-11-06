<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
    <script src="main.js"></script>
</head>
<body>
    <div class="container text-center">
        <div class="row gy-5">
            <div class="col">
                <br><br>
                <input type="text" class="form-control" id="txt_output" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col" >
                <button type="button" class="btn" text="7">7</button>
            </div>
            <div class="col">
                <button type="button" class="btn" text="8">8</button>
            </div>
            <div class="col">
                <button type="button" class="btn" text="9">9</button>
            </div>
            <div class="col">
                <button type="button" class="clearbtn" id="clearbtn">C</button>
            </div>
            <div class="col">
                <button type="button" class="delbtn" id="delbtn"><-</button>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <button type="button" class="btn" text="4">4</button>
            </div>
            <div class="col">
                <button type="button" class="btn" text="5">5</button>
            </div>
            <div class="col">
                <button type="button" class="btn" text="6">6</button>
            </div>
            <div class="col">
                <button type="button" class="btn" text="/">/</button>
            </div>
            <div class="col">
                <button type="button" class="btn " text="*">*</button>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <button type="button" class="btn" text="1">1</button>
            </div>
            <div class="col">
                <button type="button" class="btn" text="2">2</button>
            </div>
            <div class="col">
                <button type="button" class="btn" text="3">3</button>
            </div>
            <div class="col">
                <button type="button" class="btn" text="-">-</button>
            </div>
            <div class="col">
                <button type="button" class="btn" text="+">+</button>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <button type="button" class="btn " text="0">0</button>
            </div>
            <div class="col">
                <button type="button" class="btn " text=".">.</button>
            </div>
            <div class="col">
                <button type="button" class="btn " text="("><span>&#40;</span></button>
            </div>
            <div class="col">
                <button type="button" class="btn " text=")"><span>&#41;</span></button>
            </div>
            <div class="col">
                <button type="button" class="equalbtn " id="equalbtn">=</button>
            </div>
        </div>

    </div>
</body>
</html>