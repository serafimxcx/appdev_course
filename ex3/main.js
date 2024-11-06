$(function() {
	
	window.setTimeout(function() {
		
		$("#student_number").focus();
	},300);
	
	LoadRecords();
	
	$("#btn_save").click(function() {
		
		$("#btn_save").attr("disabled",true); // Disable button to prevent double click on save

		if ( parseInt($("#student_id").val()) == 0 )
			AddRecord();
		else
			UpdateRecord();
		
	});
	
	$("#btn_cancel").click(function() {
		
		if ( confirm("Clear values?") )
			location.reload();
	});
	
	$(document.body).on("click",".records",function() {
		Get(parseInt($(this).attr("record_id")));
	});
	
	$(document.body).on("click",".remove-record",function() {
		if ( confirm("Delete this record?") ) 
			RemoveRecord(parseInt($(this).attr("record_id")));
	});
	
});

function Get(nID) {
	
	var cParam="";
	
	cParam = "student_id="+nID;
	
	$.ajax({
		"type":"POST",
		"url" : "get_record.php",
		"data": cParam,
		"success": function(text) {
			var f = JSON.parse(text); // Convert JSON string to actual JSON object



			$("#student_number").val(f.student_number);
			$("#name").val(f.name);
			$("#birth_date").val(f.birth_date);
			$("#grade").val(f.grade);
			$("#message").addClass("hidden"); // Hide message
			$("#student_id").val(nID);
			
		},
		"beforeSend": function() {
			$("#message").html("Loading record....");
			$("#message").removeClass("hidden"); // Show message
		},
		"error": function (x,a,t) {
			
		}
	});
	
}


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
	$("#student_id").val("0");
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

function UpdateRecord() {
	
	var cParam = "";
	
	cParam = "student_number="+$("#student_number").val();
	cParam += "&name="+$("#name").val();
	cParam += "&birth_date="+$("#birth_date").val();
	cParam += "&grade="+$("#grade").val();
	cParam += "&student_id="+$("#student_id").val();
	
	$.ajax({
		"type":"POST",
		"url": "update_record.php",
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
			$("#message").html("Updating....");
			$("#message").removeClass("hidden"); // Show message
			
		},
		"error":function(x,a,t) {
		}
	});
	
}

function RemoveRecord(nID) {
	
	var cParam = "";
	
	cParam += "student_id="+nID;
	
	$.ajax({
		"type":"POST",
		"url": "remove_record.php",
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
			$("#message").html("Removing....");
			$("#message").removeClass("hidden"); // Show message
			
		},
		"error":function(x,a,t) {
		}
	});
	
}
