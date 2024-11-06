var sort_course ="";

$(function(){
    

    OptionCourse();
    LoadCourse();
    LoadStudents(sort_course);
    

    window.setTimeout(function() {
		
		$("#txt_course").focus();
        $("#txt_lname").focus();
	},300);

    //---------------------start- course-----------------------------------
    $("#btn_savecourse").click(function(){
       if($("#txt_course_id").val() == 0){
            AddCourse();
       }else{
            UpdateCourse();
       }
    });

    $("#btn_cancelcourse").click(function(){
        location.reload();
    });

    $(document.body).on('click', '.remove-course', function(){
        if ( confirm("Delete this record?") ) 
			RemoveCourse(parseInt($(this).attr("course_id")));
    });

    $(document.body).on("click",".course_records",function() {
		GetCourse(parseInt($(this).attr("course_id")));
	});
    //---------------------end- course-----------------------------------



    //---------------------start- students-----------------------------------
    $("#btn_savestudent").click(function(){
        console.log("ok");
        if($("#txt_student_id").val() == 0){
             AddStudent(sort_course);
        }else{
             UpdateStudent(sort_course);
        }
     });

     $(document.body).on('click', '.remove-student', function(){
        if ( confirm("Delete this record?") ) 
			RemoveStudent(parseInt($(this).attr("student_id")));
    });

    $(document.body).on("click",".student_records",function() {
		GetStudent(parseInt($(this).attr("student_id")));
	});

    $("#btn_cancelstudent").click(function(){
        location.reload();
    });

    //---------------------end- students-----------------------------------


    $("#btn_load_report").click(function() {
		var cFile = "test_report.php?sort_course="+$("#sort_course").val();
		report.location=cFile;
	});

    $("#sort_course").change(function(){
        sort_course = $(this).val(); 
        LoadStudents($(this).val());
    });
});


//---------------------start- functions in course-----------------------------------
function ResetCourse(){
    $("[data_type=vc]").val("");
    $("#txt_course_id").val("0");

    window.setTimeout(function() {
		
		$("#txt_course").focus();
	},300);

}

function AddCourse(){
    if($("#txt_course").val() == ""){
       alert("No Input");
    }else{
        var cParam = "";

        cParam = "txt_course="+$("#txt_course").val();

        $.ajax({
            "type": "POST",
            "url": "course_add.php",
            "data": cParam,
            "success": function(text){
                if(text !== ""){
                    alert(text);
                }else{
                    ResetCourse();
                    LoadCourse(sort_course);
                }
            }
        });
    }

    
}

function LoadCourse(){
    $.ajax({
        "type":"POST",
        "url":"course_loadrecords.php",
        "success": function(text){
            $("#records_course").html(text);
        }
    });
}

function RemoveCourse(course_id) {
	
	var cParam = "";
	
	cParam = "course_id="+course_id;
	
	$.ajax({
		"type":"POST",
		"url": "course_remove.php",
		"data": cParam,
		"success":function(text) {
			
			if ( text !== "" ) { 
				alert(text); 
			}
			else {
				
				LoadCourse();
				ResetCourse(); 
			}
					
		}
	});
	
}

function GetCourse(course_id){
    var cParam = "";

    cParam = "course_id="+course_id;

    $.ajax({
        "type":"POST",
        "url": "course_get.php",
        "data": cParam,
        "success": function(text){
            var a_course = JSON.parse(text);

            $("#txt_course").val(a_course.course);
            $("#txt_course_id").val(course_id);
        }
    });

}

function UpdateCourse(){
    if($("#txt_course").val() == ""){
        alert("No Input");
     }else{
        var cParam = "";

        cParam = "txt_course="+$("#txt_course").val();
        cParam += "&course_id="+$("#txt_course_id").val();
    
        $.ajax({
            "type": "POST",
            "url": "course_update.php",
            "data": cParam,
            "success": function(text){
                if(text !== ""){
                    alert(text);
                }else{
                    ResetCourse();
                    LoadCourse();
                }
            }
        });
     }


    
}
//---------------------end- functions in course-----------------------------------

//---------------------start- functions in students-----------------------------------
function OptionCourse(){
    $.ajax({
        "type":"POST",
        "url":"course_option.php",
        "success": function(text){
            $("#slct_course").html(text);
            $("#sort_course").html(text);
        }
    });
}

function AddStudent(sort_course){

    if($("#txt_studentno").val()== "" || $("#txt_lname").val()== "" || $("#txt_fname").val()== "" || $("#txt_mname").val()== "" || $("#slct_course").val()== ""){
        alert("No Input");

    }else{
        var cParam = "";

        cParam = "txt_lname="+$("#txt_lname").val();
        cParam += "&txt_studentno="+$("#txt_studentno").val();
        cParam += "&txt_fname="+$("#txt_fname").val();
        cParam += "&txt_mname="+$("#txt_mname").val();
        cParam += "&slct_course="+$("#slct_course").val();

        $.ajax({
            "type":"POST",
            "url":"students_add.php",
            "data":cParam,
            "success":function(text){
                if(text !== ""){
                    alert(text);
                }else{
                    ResetStudent();
                    LoadStudents(sort_course);
                }
            }
        });
    }

    
}

function ResetStudent(){
    $("[data_type=vc]").val("");
    $("#txt_student_id").val("0");
    $("#txt_studentno").prop("readOnly", false);

    window.setTimeout(function() {
		
		$("#txt_lname").focus();
	},300);

}

function LoadStudents(sort_course){

    var cParam = "";
    cParam = "sort_course="+sort_course;

    $.ajax({
        "type":"POST",
        "url":"students_loadrecords.php",
        "data": cParam,
        "success": function(text){
            $("#records_student").html(text);
        }
    });
}

function RemoveStudent(student_id){
    var cParam = "";
	
	cParam = "student_id="+student_id;
	
	$.ajax({
		"type":"POST",
		"url": "students_remove.php",
		"data": cParam,
		"success":function(text) {
			
			if ( text !== "" ) { 
				alert(text); 
			}
			else {
				LoadStudents(sort_course);
				ResetStudent(); 
			}
					
		}
	});
}

function GetStudent(student_id){
    var cParam = "";

    cParam = "student_id="+student_id;

    $.ajax({
        "type":"POST",
        "url": "students_get.php",
        "data": cParam,
        "success": function(text){
            var a_student = JSON.parse(text);

            $("#txt_studentno").val(a_student.studentno);
            $("#txt_studentno").prop("readOnly", true);
            $("#txt_lname").val(a_student.lastname);
            $("#txt_fname").val(a_student.firstname);
            $("#txt_mname").val(a_student.middlename);
            $("#slct_course").val(a_student.course);
            $("#txt_student_id").val(student_id);
        }
    });

}

function UpdateStudent(sort_course){
    if($("#txt_studentno").val()== "" || $("#txt_lname").val()== "" || $("#txt_fname").val()== "" || $("#txt_mname").val()== "" || $("#slct_course").val()== ""){
        alert("No Input");

    }else{
        var cParam = "";

        cParam = "txt_lname="+$("#txt_lname").val();
        cParam += "&txt_fname="+$("#txt_fname").val();
        cParam += "&txt_mname="+$("#txt_mname").val();
        cParam += "&slct_course="+$("#slct_course").val();
        cParam += "&student_id="+$("#txt_student_id").val();

        $.ajax({
            "type":"POST",
            "url":"students_update.php",
            "data":cParam,
            "success":function(text){
                if(text !== ""){
                    alert(text);
                }else{
                    ResetStudent();
                    LoadStudents(sort_course);
                }
            }
        });
    }

    
}


//---------------------end- functions in students-----------------------------------