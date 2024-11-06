$(function(){
    var points = 0;
    
    $("#btn_check").click(function(){
        for(var i = 1; i <= 5; i++ ){ //pag 10 na questions na gawin nyo 10 yung 5 aa; delete nyo din tong comment mga loka kayo pag napasa nyo to
            if($("#q"+i).val().toUpperCase() == $("#q"+i).attr("answer").toUpperCase()){
                $("#isCorrect"+i).html("✔");
                if(points != 10){
                    points += parseInt($("#q"+i).attr("points"));
                }else{
                    points = points;
                }
            }else{
                $("#isCorrect"+i).html("✘");
            }
        }

        if(points >= 7){
            $("#total").html(points +" / 10  &#128512;");

        }else{
            $("#total").html(points +" / 10  &#128546;");

        }
        points = 0;

        $("#btn_check").prop("disabled", true);
        $("#btn_show").prop("disabled", false);
    });
    
    $("#btn_clear").click(function(){
        $("input").val("");
        $("span").html("");
        points = 0;
        $("#btn_check").prop("disabled", false);
        $("#btn_show").prop("disabled", true);
    });

    $("#btn_show").click(function(){
        for(var i = 1; i <= 5; i++ ){ //pag 10 na questions na gawin nyo 10 yung 5 aa; delete nyo din tong comment mga loka kayo pag napasa nyo to
            
            $("#Correct"+i).html(" Correct Answer: "+$("#q"+i).attr("answer"));
            
        }
    });
    
});

