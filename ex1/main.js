$(function() {
	
	$("#btn_compute").click(function() {
		
		var n1 = parseFloat($("#number1").val()); // convert id="number1" to number
		var n2 = parseFloat($("#number2").val());
		var cSum = (n1+n2)+""; // Add 2 numbers then convert to string
		
		$("#sum").val(cSum); // Assign value to id="sum"
		
		
	});
	
	$("#btn_clear").click(function() {
		
		if ( confirm("Clear all numbers") ) {
		
			$(".number").val("0"); // Clear all fields with class containing "number"
			
			window.setTimeout(function() {
				
				$("#number1").focus();
				
			},300); // Wait for 300 milliseconds before placing cursor to id="number1"
			
		}

	});
	
	
});
