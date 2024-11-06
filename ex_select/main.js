$(function(){
    const trnslt = [ {},
        {english: "one", filipino: "isa", romannum: "I"},
        {english: "two", filipino: "dalawa", romannum: "II"},
        {english: "three", filipino: "tatlo", romannum: "III"},
        {english: "four", filipino: "apat", romannum: "IV"},
        {english: "five", filipino: "lima", romannum: "V"},
        {english: "six", filipino: "anim", romannum: "VI"},
        {english: "seven", filipino: "pito", romannum: "VII"},
        {english: "eight", filipino: "walo", romannum: "VIII"},
        {english: "nine", filipino: "siyam", romannum: "IX"},
        {english: "ten", filipino: "sampu", romannum: "X"},
        ];

    $("#slct_num").change(function(){
            var index = parseInt($("#slct_num").val());
            $("#txt_english").val(trnslt[index].english);
            $("#txt_filipino").val(trnslt[index].filipino);
            $("#txt_rn").val(trnslt[index].romannum);
    });

});