$(function() {
	
	window.setTimeout(function() {
		
		$("#student_number").focus();
	},300);
	
	LoadRecords();
	
	$("#btn_save").click(function() {
		
		$("#btn_save").attr("disabled",true); // Disable button to prevent double click on save
		AddRecord();
		
	});
	
});


function LoadRecords() {
	
	var cParam = "";
	
	$.ajax({
		"type":"POST",
		"url": "load_records.php",
		"data": cParam,
		"success":function(text) {
			
			$("#records").html(text);
			$("#message").addClass("hidden"); // Hide message
			
		},
		"beforeSend":function() {
			$("#message").html("Loading records....");
			$("#message").removeClass("hidden"); // Show message
			
		},
		"error":function(x,a,t) {
		}
	});
	
}

function Reset() {

	$("[data_type=c]").val("");
	$("[data_type=d]").val("");
	$("[data_type=f]").val("0");
	
	window.setTimeout(function() {
		
		$("#student_number").focus();
	},300);
	
}

function AddRecord() {
	
	var cParam = "";
	
	cParam = "student_number="+$("#student_number").val();
	cParam += "&name="+$("#name").val();
	cParam += "&birth_date="+$("#birth_date").val();
	cParam += "&grade="+$("#grade").val();
	
	$.ajax({
		"type":"POST",
		"url": "save_record.php",
		"data": cParam,
		"success":function(text) {
			
			if ( text !== "" ) { // if there is an error 
				alert(text); // Show error
			}
			else {
				$("#records").html(text);
				$("#message").addClass("hidden"); // Hide message
				
				LoadRecords();
				Reset(); // Clear the fields
			}
			
			$("#btn_save").attr("disabled",false); // Enable button after saving
			
			
			
		},
		"beforeSend":function() {
			$("#message").html("Saving....");
			$("#message").removeClass("hidden"); // Show message
			
		},
		"error":function(x,a,t) {
		}
	});
	
}
