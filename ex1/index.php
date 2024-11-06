<html>

<head>
	<title>Add 2 numbers</title>

	<meta charset="utf-8">
			
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Make the display compatible with phones -->

	<!-- Bootstrap and JQuery -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  
	<link rel="stylesheet" href="style.css"><!-- main CSS file -->

	<script src="main.js"></script> <!-- main Javascript file -->
</head>

<body>
	
	<div class="container text-center"> <!-- used by bootstrap -->
		
		<h2>Add 2 Numbers</h2>
		<br>
		
		<label>1st number</label>
		<input type="text" size="5" class="text-right number" id="number1" value="0">
		<label>+</label>
		<label>2nd number</label>
		<input type="text" size="5" class="text-right number" id="number2" value="0">
		<label>=</label>
		<input type="text" size="5" class="text-right number" id="sum" value="0">
		
		<div style="clear:both;"></div> <!-- line break -->
		<br>
		<button type="button" class="button" id="btn_compute">Compute</button>
		<button type="button" class="button" id="btn_clear">Clear</button>
		
	</div>


</body>

<html>
