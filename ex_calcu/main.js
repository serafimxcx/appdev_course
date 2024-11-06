$(function(){
    var output = "";

    $(".btn").click(function(){
        output += $(this).attr("text");
        $("#txt_output").val(output);
    });

    $("#equalbtn").click(function(){
        var txt = $("#txt_output").val();
        var ans = eval(txt);
        $("#txt_output").val(ans);
        output = "";
        output += ans;

    });

    $(".delbtn").click(function(){;
        var del = output.slice(0, output.length -1);
        output = del;
        $("#txt_output").val(output);

    });

    $(".clearbtn").click(function(){   
        $("#txt_output").val("");
        output="";

    });
    
});