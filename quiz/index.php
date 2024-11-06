<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap2.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <title>Quiz</title>
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
</head>
<body>
    <div id="welcomediv">
        <video autoplay muted loop id="myVideo1">
            <source src="bg2.mp4" type="video/mp4">
        </video>

        <div id="startdiv">
            <br><br>
            <h1 id="title">Quiz: Current Affairs</h1><br>
            <h5>4 CORRECT - HOME RUN &nbsp;|&nbsp;|&nbsp; 3 MISTAKES - STRIKEOUT</h5><br>
            <hr><br>
            <button type="button" id="btn_start">START</button>
            
            <br><br>
        </div>
    </div>



    <div id="contentdiv">
        <video autoplay muted loop id="myVideo2">
                <source src="bg1.mp4" type="video/mp4"> 
        </video>
        <div id="headercontainer">
            <table width="100%">
                <tr>
                    <td width="40%"><h2 class="headertxt">Hit: <span id="hit"></span></h2></td>
                    <td width="40%"><h2 class="headertxt">Strike: <span id="strike"></span></h2></td>
                    <td width="20"><h2 class="headertxt">Score: <span id="score">0</span></h2></td>
                </tr>
            </table>
        </div> 

        <div id="quizdiv">

            <div class="container-fluid" id="div1">
                <div class="row">
                    <!---->
                    <div class="col-sm-6">
                        <div id="field_player">
                        <img src="fieldplayer1.png" id="img_player1">
                        <img src="fieldplayer2.png" id="img_player2">
                        <img src="fieldplayer3.png" id="img_player3">
                        <img src="fieldplayer4.png" id="img_player4">
                        
                        </div>
                        
                        
                    </div>

                    <div class="col-sm-6" id="div2"> 
                        <div id="questionsdiv">
                            <div id="homerundiv">
                                <img src="homerun.gif" id="gifhomerun">
                            </div>

                            <div id="strikeoutdiv">
                                <img src="strikeout.gif" id="gifstrikeout">
                            </div>
                            
                            <table width="100%">
                                <tr>
                                    <td colspan="2">
                                        <br>
                                        <p id="p_question"></p>
                            
                                        <br><hr><br>
                                    </td>
                                </tr>
                                <tr width="45%">
                                    <td style="padding: 5px;" width="45%">
                                        <input type="button" class="btn_choice" name="inpt_choices" id="choice1" value="">
                                    </td>
                                    <td style="padding: 5px;" width="45%">
                                        <input type="button" class="btn_choice" name="inpt_choices" id="choice2" value="">
                                    </td>
                                </tr>
                                <tr width="45%">
                                    <td style="padding: 5px;" width="45%">
                                            <input type="button" class="btn_choice" name="inpt_choices" id="choice3" value="">
                                        
                                    </td>
                                    <td style="padding: 5px;" width="45%">
                                        <input type="button" class="btn_choice" name="inpt_choices" id="choice4" value="">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    
                    <!---->
                </div>
                
            </div>
        

        
        </div>

        
    </div>
    
    <br><br>
</body>
</html>