$(function(){
    var hit = 0; //hit count
    var strike = 0; //strike count
    var arr_i = []; //array for the index of the questions

    var randomnum = Math.floor(Math.random() * 10) + 1; //to randomize the questions
    

    //array of objects for questions
    var arr = [ {},
        {question: "Who is the government agency that hopes to resume OFW deployment talks with Kuwait after a Kuwaiti juvenile court convicted 17-year-old Turki Ayed Al-Azmi for the gruesome killing of OFW Jullebee Ranara.?", 
        answer: "Department of Foreign Affairs (DFA)", choice1: "Department of Migrant Workers (DMW)", choice2: "Overseas Workers Welfare Administration", choice3: "Occupational Safety and Health Center"},
        
        {question: "Which government service will provide free rides to civil servants from September 18 to 20?", 
        answer: "The MRT-3", choice1: "The MRT-2", choice2: "The MRT-1", choice3: "The MRT-4"},

        {question: "Who is accused of posing as fishermen and harming the marine environment in the West Philippine Sea, as reported by the Western Command (Wescom) of the Armed Forces of the Philippines?", 
        answer: "Chinese Maritime Militia", choice1: "China Coast Guard", choice2: "Vietnam's Liberation Army", choice3: "Taiwanese Maritime Military"},
        
        {question: "Who is the US Indo-Pacific Command chief who discussed increasing the number of Philippine military bases for US troops and equipment deployment under Edca during the annual Mutual Defense Board and Security Engagement Board meeting in the Philippines?", 
        answer: "Adm. John Aquilino", choice1: "Adm. Jean Reyes", choice2: "Adm. Romeo Brawner Jr.", choice3: "Adm. Ronald Clementine"},

        {question: "Who was the victim of the murder case involving the convicted juvenile in Kuwait on January 21, 2023?", 
        answer: "Jullebee Ranara", choice1: "Genevieve Ramos", choice2: "Lea Bondoc", choice3: "Melanie De Vera"},

        {question: "Which two Filipino corporations ranked the highest in the list of the world's best companies compiled by Statista and published by Time Magazine in September 2023?", 
        answer: "Ayala Corporation and San Miguel Corporation", choice1: "Petron Corporation and JG Summit Holdings", choice2: "Puregold and SM Investments Corporation", choice3: "Globe Telecom and PLDT Company"},

        {question: "How much confidential funds is President Marcos' office seeking for 2024?", 
        answer: "P2.25 billion", choice1: "P1.5 billion", choice2: "P3.25 billion", choice3: "P3 billion"},

        {question: "How much confidential funds is the Office of the Vice President (OVP), led by Vice President Sara Duterte, requesting for the year 2024?", 
        answer: "P500 million", choice1: "P600 million", choice2: "P700 million", choice3: "P400 million"},

        {question: "Which organizations has the Securities and Exchange Commission (SEC) of the Philippines recently collaborated with to enhance its capabilities in combating financial crimes?", 
        answer: "U.S. Securities and Exchange Commission (SEC) and Asian Development Bank (ADB)", choice1: "International Monetary Fund (IMF) and Federal Reserve Board (FRB)", choice2: "U.S. Securities and Exchange Commission (SEC) and World Bank Group", choice3: "Federal Reserve Board (FRB) and Asian Development Bank (ADB)"},

        {question: "What initiative is President Ferdinand “Bongbong” Marcos Jr. encouraging Singaporean businessmen to invest in, which focuses on the Philippines' renewable energy, smart and innovative economy, and infrastructure development?", 
        answer: "Build Better More program", choice1: "Energy Security", choice2: "Digital Philippines", choice3: "Future-ready Filipinos"},
        
    ];

    //click to start the quiz
    $("#btn_start").click(function(){
        $("#welcomediv").css({"display":"none"});
        $("#contentdiv").css({"display":"flex"});

        start();
    });
    

    function start(){
        // to randomize the questions again if it is already show previously
        while(true){
            if(arr_i.includes(randomnum)){
                randomnum = Math.floor(Math.random() * 10) + 1;
            }else{
                arr_i.push(randomnum); //save the current random number in the array of index of questions
                break;
            }
        }

        $("#p_question").html(arr[randomnum].question); //show the question

        var arrchoice = []; //array for the id count of the radiobutton

        //randomize the position of the choices
        var ans = Math.floor(Math.random() * 4) + 1;
        arrchoice.push(ans);

        var ch1 = Math.floor(Math.random() * 4) + 1;
        while(true){
            if(arrchoice.includes(ch1)){
                ch1 = Math.floor(Math.random() * 4) + 1;
            }else{
                arrchoice.push(ch1);
                break;
                
            }
        }

        var ch2 = Math.floor(Math.random() * 4) + 1;
        while(true){
            if(arrchoice.includes(ch2)){
                ch2 = Math.floor(Math.random() * 4) + 1;
            }else{
                arrchoice.push(ch2);
                break;
            }
        }

        var ch3 = Math.floor(Math.random() * 4) + 1;
        while(true){
            if(arrchoice.includes(ch3)){
                ch3 = Math.floor(Math.random() * 4) + 1;
            }else{
                arrchoice.push(ch3);
                break;
            }
        }

        //show the choices
        $("#choice"+ans).val(arr[randomnum].answer);
        $("#txt_choice"+ans).html(arr[randomnum].answer);
       
        $("#choice"+ch1).val(arr[randomnum].choice1);
        $("#txt_choice"+ch1).html(arr[randomnum].choice1);

        $("#choice"+ch2).val(arr[randomnum].choice2);
        $("#txt_choice"+ch2).html(arr[randomnum].choice2);

        $("#choice"+ch3).val(arr[randomnum].choice3);
        $("#txt_choice"+ch3).html(arr[randomnum].choice3);

        //when submit is clicked
        $("#btn_submit").click(function(){
            for(var i=0; i< arrchoice.length; i++){ //to get all the radiobuttons through their id
                if($("#choice"+arrchoice[i]).prop('checked')){ //check the selected radiobutton

                    if($("#choice"+arrchoice[i]).val() == arr[randomnum].answer){ //if the user choose the correct answer....
                        hit += 1;
                        
                        if(hit == 4){ //if the the user already have answered 4 question correctly then it is considered as home run and the quiz will be ended.
                            alert("HOME RUN");
                            window.location.href = "index.php";
                            
                        }else{ //else the user answered correctly they will proceed to the next "base" = question
                            alert("What a good hit!");
                            $('#hit').after("<img class='img' src='hitscore.png' />");
                            randomnum = Math.floor(Math.random() * 10) + 1;
                            start();
                            $("#choice"+arrchoice[i]).prop('checked', false);
                        }
                        
                    }else{ //if the user choose the wrong answer...
                        strike += 1;
                        
                        if(strike == 3){ //if the user commits 3 wrong answer then it is considered as strikeout and the quiz will be ended.
                            alert("STRIKEOUT");
                            window.location.href = "index.php";
                            
                        }else{ //else the user commits mistake then it will stay to the same question until he answered correctly.
                            alert("What a bad swing! Better luck next time!");
                            $('#strike').after("<img class='img' src='mistake.png' />");
                            $("#choice"+arrchoice[i]).prop('checked', false);
                        }
                        
                    }
                }
            }
            
        });  
    }

    //restart button
    $("#btn_restart").click(function(){
        if(confirm("Are you sure you want to restart the quiz?")){
            hit = 0;
            strike = 0;
            arr_i = [];

            $(".img").remove();
            randomnum = Math.floor(Math.random() * 10) + 1;
            start();
        }
        
    });
    
});