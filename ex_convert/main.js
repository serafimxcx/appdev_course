$(function() {
	
    //inch to cm and cm to inch
    $("#inchtocm").click(function() { //kapagniclick yung inch to cm na button
		
        $("#title1").html("Inch to CM");
        $("#title2").html("CM to Inch");

		$("#btn_convert1").click(function() {  //convert para sa sa inch to cm
		
            var n1 = parseFloat($("#number1").val()); // convert id="number1" to number
            var output = (n1*2.54)+"";
            
            $("#convert1").val(output);
            
            
        });

        $("#btn_convert2").click(function() {  //convert para sa sa cm to inch
		
            var n2 = parseFloat($("#number2").val()); // convert id="number1" to number
            var output = (n2/2.54)+"";
            
            $("#convert2").val(output);
            
            
        });
		
	});

    //kilogram to gram
	$("#kgtog").click(function() { //kapagniclick yung inch to cm na button
		
        $("#title1").html("Kilogram to gram");
        $("#title2").html("Gram to Kilogram");

		$("#btn_convert1").click(function() {  //convert kg to g
		
            var n1 = parseFloat($("#number1").val()); // convert id="number1" to number
            var output = (n1*1000)+"";
            
            $("#convert1").val(output);
            
            
        });

        $("#btn_convert2").click(function() {  //convert g to kg
		
            var n2 = parseFloat($("#number2").val()); // convert id="number1" to number
            var output = (n2/1000)+"";
            
            $("#convert2").val(output);
            
            
        });
		
	});



    //clear button
    $("#btn_clear").click(function() {
		
		if ( confirm("Clear all numbers") ) {
		
			$(".number").val("0"); // Clear all fields with class containing "number"
			
			window.setTimeout(function() {
				
				$("#number1").focus();
				
			},300); // Wait for 300 milliseconds before placing cursor to id="number1"
			
		}

	});
	
});
