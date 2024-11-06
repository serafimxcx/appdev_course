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
        <div id="headercontainer">
            <table width="100%">
                <tr>
                    <td width="50%"><h2>Hit: <span id="hit"></span></h2></td>
                    <td width="50%"><h2>Strike: <span id="strike"></span></h2></td>
                </tr>
            </table>
                
        </div> 

        <div id="quizdiv">
        
        <video autoplay muted loop id="myVideo2">
            <source src="bg1.mp4" type="video/mp4">
        </video>
        

        <div id="questionsdiv">
            <br>
            <p id="p_question"></p>
            
            <br><hr><br>
            <table width="100%">
                <tr width="45%">
                    <td style="padding: 5px;">
                        <div class="choices" >
                            <table width="100%">
                                <tr>
                                    <td width="50%"><input type="radio" class="radio_btn" name="inpt_choices" id="choice1" value=""></td>
                                    <td width="50%"><label for="choice1" class="txt_choice" id="txt_choice1"></label></td>
                                </tr>
                            </table>
                        
                        
                        </div>
                    </td>
                    <td style="padding: 5px;">
                        <div class="choices">
                            <table width="100%">
                                <tr>
                                    <td width="50%"><input type="radio" class="radio_btn" name="inpt_choices" id="choice2" value=""></td>
                                    <td width="50%"><label for="choice2" class="txt_choice" id="txt_choice2"></label></td>
                                </tr>
                            </table>
                        
                        </div>
                    </td>
                </tr>
                <tr width="45%">
                    <td style="padding: 5px;">
                        <div class="choices">
                            <table width="100%">
                                <tr>
                                    <td width="50%"><input type="radio" class="radio_btn" name="inpt_choices" id="choice3" value=""></td>
                                    <td width="50%"><label for="choice3"  class="txt_choice" id="txt_choice3"></label></td>
                                </tr>
                            </table>
                        
                        
                        </div>
                    </td>
                    <td style="padding: 5px;">
                        <div class="choices">
                            <table width="100%">
                                <tr>
                                    <td width="50%"><input type="radio" class="radio_btn" name="inpt_choices" id="choice4" value=""></td>
                                    <td width="50%"><label for="choice4"  class="txt_choice" id="txt_choice4"></label></td>
                                </tr>
                            </table>
                        
                        
                        </div>
                    </td>
                </tr>
            </table>
            <br><hr><br>
            <input type="button" id="btn_submit" value="Submit Answer">
            <br><br>
        </div>
        </div>

        <div id="footercontainer">  
                <button type="button" id="btn_restart"><h2>Restart</h2></button>
        </div> 
    </div>
    


    
</body>
</html>