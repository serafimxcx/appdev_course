$(function(){
    var correct = 0;
    var wrong = 0;
    var num = 1;

    quiz();

    function quiz(){
        $("#q"+num).css({"display":"block"});

        $("#submit"+num).click(function(){
            if($("#txt"+num).val().toUpperCase() == $("#txt"+num).attr("answer").toUpperCase()){
                correct+=1;
                $("#correct").html(correct);
                $("#wrong").html(wrong);
                $("#q"+num).css({"display":"none"});
                if(correct == 3){
                    alert("HOME RUN");
                    window.location.href = "index.php";
                }
                
                num++;
                quiz();
            }else{
                wrong+=1;
                $("#correct").html(correct);
                $("#wrong").html(wrong);
                $("#q"+num).css({"display":"none"});
                if(wrong == 2){
                    alert("STRIKE OUT");
                    window.location.href = "index.php";
                }
                num++;
                quiz();
            }
        });
    }
   

    
    
    
});