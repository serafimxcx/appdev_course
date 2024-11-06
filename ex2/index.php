<html>

<head>
	<title>Student Records</title>

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
	
	<div class="container-fluid"> <!-- used by bootstrap -->
		
		<div class="col-sm-5">
			
			<h2>Student Records</h2>
			
			<form onload="return false;">
		
			<label>Student #</label>
			<input type="text" size="10" data_type="c" maxlength="15" id="student_number" value="">
			
			<div style="clear:both;"></div> <!-- line break -->
			
			<label>Name</label>
			<input type="text" data_type="c" size="50" maxlength="100" id="name" value="">
			
			<div style="clear:both;"></div> <!-- line break -->
			
			<label>Birth Date</label>
			<input type="text" data_type="d" size="10" maxlength="10" id="birth_date" value="">
			
			<div style="clear:both;"></div> <!-- line break -->
			
			<label>Grade</label>
			<input type="text" data_type="f" size="5" maxlength="5" class="text-right" id="grade" value="0">
			
			<input type="hidden" id="student_id" value="0">
			
			<br><br>
			<button type="button" class="button" id="btn_save">Save</button>
			
			</form>
			<br>
			<div id="message" class="hidden">Please wait...</div>
		
		</div>
		
		<div class="col-sm-7">
			<div id="records"></div>
		
		</div>
		
		
		
	</div>


</body>

<html>
