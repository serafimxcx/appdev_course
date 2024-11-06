var sortType = "";
var sortOrder = "ASC";

$(function(){
    window.setTimeout(function() {
		$("#txt_employeenum").focus();
	},300);

    LoadRecords(sortType, sortOrder);

    $("#btn_save").click(function(){
        $("#btn_save").attr("disabled",true); // Disable button to prevent double click on save
		if ( parseInt($("#txt_id").val()) == 0 )
			AddRecord();
		else
			UpdateRecord();
    });

    $("#btn_cancel").click(function() {
		
		if ( confirm("Clear values?") )
			location.reload();
	});

    $(document.body).on("click",".remove-record",function() {
		if ( confirm("Delete this record?") ) 
			RemoveRecord(parseInt($(this).attr("record_id")));
	});

    $(document.body).on("click",".records",function() {
		Get(parseInt($(this).attr("record_id")));
	});

	$("#slct_sort").change(function(){
		var sortVal = $("#slct_sort").val();

		if(sortVal == "Age"){
			sortType = "Age";
			LoadRecords(sortType, sortOrder);
		}else if(sortVal == "Monthly Salary"){
			sortType = "Monthly Salary";
			LoadRecords(sortType, sortOrder);
		}else if(sortVal == ""){
			sortType = "";
			LoadRecords(sortType, sortOrder);
		}
	});

	$("#btn_sortorder").click(function(){
		if(sortOrder == "ASC"){
			sortOrder = "DESC";
			LoadRecords(sortType, sortOrder);
		}else if(sortOrder == "DESC"){
			sortOrder = "ASC";
			LoadRecords(sortType, sortOrder);
		}
	});

});


function AddRecord(){
    var cParam = "";

    cParam = "txt_employeenum="+$("#txt_employeenum").val();
    cParam += "&txt_lastname="+$("#txt_lastname").val();
    cParam += "&txt_firstname="+$("#txt_firstname").val();
    cParam += "&txt_middlename="+$("#txt_middlename").val();
    cParam += "&txt_monthlysalary="+$("#txt_monthlysalary").val();
    cParam += "&txt_birthdate="+$("#txt_birthdate").val();

    $.ajax({
        "type":"POST",
        "url":"saverecord.php",
        "data": cParam,
        "success": function(text){
            if ( text !== "" ) { // if there is an error 
				alert(text); // Show error
			}
			else {
				$("#message").addClass("hidden"); // Hide message
				
				LoadRecords(sortType, sortOrder);
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

function LoadRecords(sortType, sortOrder){
    var cParam = "";
    
	cParam = "slct_sort="+sortType;
    cParam += "&sort_order="+sortOrder;

	$.ajax({
		"type":"POST",
		"url": "loadrecords.php",
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

	$("[data_type=vc]").val("");
	$("[data_type=f]").val("");
	$("[data_type=dt]").val("");
	$("#txt_id").val("0");
	window.setTimeout(function() {
		
		$("#txt_employeenum").focus();
	},300);
	
}

function RemoveRecord(nID) {
	
	var cParam = "";
	
	cParam += "employee_id="+nID;
	
	$.ajax({
		"type":"POST",
		"url": "removerecord.php",
		"data": cParam,
		"success":function(text) {
			
			if ( text !== "" ) { // if there is an error 
				alert(text); // Show error
			}
			else {
				$("#records").html(text);
				$("#message").addClass("hidden"); // Hide message
				
				LoadRecords(sortType, sortOrder);
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

function Get(nID) {
	
	var cParam="";
	
	cParam = "employee_id="+nID;
	
	$.ajax({
		"type":"POST",
		"url" : "getrecord.php",
		"data": cParam,
		"success": function(text) {
			var employee_info = JSON.parse(text); // Convert JSON string to actual JSON object



			$("#txt_employeenum").val(employee_info.employee_number);
			$("#txt_lastname").val(employee_info.last_name);
			$("#txt_firstname").val(employee_info.first_name);
			$("#txt_middlename").val(employee_info.middle_name);
			$("#txt_monthlysalary").val(employee_info.monthly_salary);
			$("#txt_birthdate").val(employee_info.birth_date);
			$("#message").addClass("hidden"); // Hide message
			$("#txt_id").val(nID);
			
		},
		"beforeSend": function() {
			$("#message").html("Loading record....");
			$("#message").removeClass("hidden"); // Show message
		},
		"error": function (x,a,t) {
			
		}
	});
	
}

function UpdateRecord() {
	
	var cParam = "";
	
	cParam = "txt_employeenum="+$("#txt_employeenum").val();
    cParam += "&txt_lastname="+$("#txt_lastname").val();
    cParam += "&txt_firstname="+$("#txt_firstname").val();
    cParam += "&txt_middlename="+$("#txt_middlename").val();
    cParam += "&txt_monthlysalary="+$("#txt_monthlysalary").val();
    cParam += "&txt_birthdate="+$("#txt_birthdate").val();
    cParam += "&employee_id="+$("#txt_id").val();
	
	$.ajax({
		"type":"POST",
		"url": "updaterecord.php",
		"data": cParam,
		"success":function(text) {
			
			if ( text !== "" ) { // if there is an error 
				alert(text); // Show error
			}
			else {
				$("#records").html(text);
				$("#message").addClass("hidden"); // Hide message
				
				LoadRecords(sortType, sortOrder);
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

