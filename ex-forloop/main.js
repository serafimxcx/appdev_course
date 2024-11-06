$(function(){
    $("#btn_clear").click(function(){
        //using for loop
        for(var i = 1; i <= 3; i++ ){
            $("#t"+i).val("");
        }

        //using each function
        // $("input").each(function(){
        //     $(this).val("");
        // });

    });


});

