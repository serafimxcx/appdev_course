$(function(){
    var hit = 0; //hit counter
    var strike = 0; //strike counter
    var score = 0; //score counter
    var arr_i = []; //array for the index of the questions
    var playerid = 1; //to specify the position of the player per base

    var randomnum = Math.floor(Math.random() * 20) + 1; //to randomize the questions
    

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

        {question: "Which vehicle did NASA release a request for a proposal to use for safely deorbiting the International Space Station (ISS) which is one of the essential equipment that will pull the ISS into an inhabited part of the Earth?", 
        answer: "US Deorbit Vehicle", choice1: "Orbital Space Plane", choice2: "Lunar Roving Vehicle", choice3: "Rockwell HiMAT"},

        {question: "What is the name of the upgraded X-ray free-electron laser (XFEL) recently used by the US Department of Energy's SLAC National Accelerator Laboratory?", 
        answer: "Linac Coherent Light Source II", choice1: "XFEL 2.0", choice2: "Linear Accelerator Machine", choice3: "Atomic Light Source"},

        {question: "What is the official designation of the ordinance in Cebu City that pertains to rice conservation and its contribution to the national government's efforts in promoting rice conservation awareness?", 
        answer: "City Ordinance No. 2409", choice1: "City Ordinance No. 309", choice2: "City Ordinance No. 1829", choice3: "City Ordinance No. 2502"},

        {question: "Who is advocating for international groups to assist in investigating China's alleged reef destruction in the West Philippine Sea (WPS)?", 
        answer: "Senator Francis Tolentino", choice1: "Senator Risa Hontiveros", choice2: "Senator Francis Escudero", choice3: "Senator Robin Padilla"},

        {question: "What type of aircraft did the Philippines receive on September 19, 2023 that will boost the capability in missions of law enforcement, terrorism and maritime domain awareness?", 
        answer: "Cessna-208B Caravan ISR", choice1: "Boeing C-17 Globemaster III", choice2: "F-35B Lightning II", choice3: "Sikorsky UH-60 Black Hawk"},

        {question: "How much revenue did the Philippine delegation generate from the premium-quality products displayed at the 2023 Malaysia International Halal Showcase (MIHAS)?", 
        answer: "$3.15 million", choice1: "$4.5 million", choice2: "$2.23 million", choice3: "$5 million"},

        {question: "Which country is sending a high-level delegation from its Ministry of Defense to visit the Philippines in November to explore further cooperation in the Armed Forces of the Philippines' modernization program, particularly in relation to Horizon 3 as outlined in Republic Act No. 10349 or the Revised AFP Modernization Act?", 
        answer: "Israel", choice1: "Turkey", choice2: "Vietnam", choice3: "Russia"},

        {question: "It is the official designation for firms operating in the Philippines which offer online gambling services to markets outside the Philippines where Neda Chief Arsenio Balisacan support banning it in the country, as recommended by the Senate panel, citing concerns about crimes and negative impacts.", 
        answer: "Philippine Offshore Gaming Operators", choice1: "Philippine Online Casino Operators", choice2: "Blockchain-Based Gaming Management", choice3: "International Betting Platform"},

        {question: "Who approved the release of a Notice of Cash Allocation amounting to P12.259 billion for housing assistance and resettlement of informal settler families in Western Visayas, according to a statement from the Department of Budget and Management (DBM)?", 
        answer: "Amenah F. Pangandaman", choice1: "Benjamin E. Diokno", choice2: "Erwin D. Sta. Ana", choice3: "Lilia Catris Guillermo"},

        {question: "What is the new name of the former 'GigaLife' App, which has been rebranded by Smart Communications, Inc., to give subscribers more value-packed offers and rewarding experiences with every tap?", 
        answer: "Smart App", choice1: "GigaSmart App", choice2: "Smart Life Go App", choice3: "Smart One-Tap App"}
        
    ];

    function start(){
        


        randomnum = Math.floor(Math.random() * 20) + 1;
        $("#img_player"+playerid).css({"display":"block"});

        // to randomize the questions again if it is already show previously
        while(true){
            if(arr_i.includes(randomnum)){
                randomnum = Math.floor(Math.random() * 20) + 1;
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
       
        $("#choice"+ch1).val(arr[randomnum].choice1);

        $("#choice"+ch2).val(arr[randomnum].choice2);

        $("#choice"+ch3).val(arr[randomnum].choice3);

  
    }

    //click to start the quiz
    $("#btn_start").click(function(){
        $("#welcomediv").css({"display":"none"});
        $("#contentdiv").css({"display":"flex"});

        start();
    });

    //choose answer by clicking button
    $(".btn_choice").click(function(){
        if($(this).val() == arr[randomnum].answer){ //if the user choose the correct answer....
            
            score += 5;
            $("#score").html(score);

            hit += 1;
            $('#hit').after("<img class='img' src='hitscore.png' />");
                
            $("#img_player"+playerid).css({"display":"none"});
            playerid++;

            
            
            if(hit == 4){ //if the the user already have answered 4 question correctly then it is considered as home run and the quiz will be ended.
                $("#homerundiv").css({"display":"block"});
                alert("HOME RUN \nTotal Score: "+score);
                $("#img_player1").css({"display":"block"});

                if(arr_i.length == arr.length-1){
                    alert("The Game has been ended. No more questions. \nTotal Score: "+ score);
                    window.location.href = "index.php";
                }else{
                    setTimeout(function() {
                        if(confirm("Do you want to play another round?")){
                            hit = 0;
                            strike = 0;
                            playerid = 1;
                            $("#homerundiv").css({"display":"none"});
                            $(".img").remove();
                            randomnum = Math.floor(Math.random() * 20) + 1;
                            start();
                        }else{
                            alert("Thank you for playing!! \nTotal Score: " + score);
                            setTimeout(function() {window.location.href = "index.php";}, 1000);
                        }
                    
                    }, 1000);
                }
                
                
                
                
                
            }else{ //else the user answered correctly they will proceed to the next "base" = question
                alert("What a good hit!");
                start();
            }
            
        }else{ //if the user choose the wrong answer...
            strike += 1;
            $('#strike').after("<img class='img' src='mistake.png' />");
            
            if(strike == 3){ //if the user commits 3 wrong answer then it is considered as strikeout and the quiz will be ended.
                $("#strikeoutdiv").css({"display":"block"});
                setTimeout(function(){alert("STRIKEOUT \nTotal Score: "+score);}, 500);
                setTimeout(function() {window.location.href = "index.php";}, 1000);
                
            }else{ //else the user commits mistake then it will stay to the same question until he answered correctly.
                alert("What a bad swing! Better luck next time!");
                if(score <= 3){
                    score = 0;
                    $("#score").html(score);
                    
                }else{
                    score -= 3;
                    $("#score").html(score);
                }
            }
            
        }
    });
    
});