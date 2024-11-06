<html>

<head>
	<title>Add 2 numbers</title>

	<meta charset="utf-8">
			
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Make the display compatible with phones -->

	<!-- Bootstrap and JQuery -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  
	<!-- main CSS file -->

	<script src="main.js"></script> <!-- main Javascript file -->
</head>

<body>
	
	<div class="container text-center"> <!-- used by bootstrap -->
        <button type="button" id="inchtocm">Inch to CM</button>
        <button type="button" id="kgtog">kilogram to gram</button>

		<h2 id="title1"></h2>
		<br>
		
		<label>Enter Value:</label>
		<input type="text" size="5" class="text-right number" id="number1" value="0">
        <button type="button" class="button" id="btn_convert1">Convert</button><br><br>
		<label>Converted Value:</label>
		<input type="text" size="5" class="text-right number" id="convert1" value="0">

        <br><br>
        <hr>
        <h2 id="title2"></h2>
        <label>Enter Value:</label>
		<input type="text" size="5" class="text-right number" id="number2" value="0">
        <button type="button" class="button" id="btn_convert2">Convert</button><br><br>
		<label>Converted Value:</label>
		<input type="text" size="5" class="text-right number" id="convert2" value="0">
		

		<div style="clear:both;"></div> <!-- line break -->
		<br>
		
		<button type="button" class="button" id="btn_clear">Clear</button>
	

	</div>


</body>

<html>
