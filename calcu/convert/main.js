$(function(){

    //feet to centimeter
    $("#btn_fc").click(function(){
        var c_measurement = "Feet to Centimenter / Centimeter to Feet";
        $("#c_measurement").show().html(c_measurement).css( { "margin-bottom" : "50px" } );

        $("#num1").focus();	
        $(".number").val("0");
        var unit_ft;
        var unit_cm;
        var convertedVal;
        
        var unit = "tocentimeter";
        var c_unit1 = "Feet";
        var c_unit2 = "Centimeter";
        
        $("#c_unit1").html(c_unit1);
        $("#c_unit2").html(c_unit2);
        
        $("#btn_reverse").click(function(){
            if(unit == "tocentimeter"){
                unit = "tofeet";
                c_unit1 = "Centimeter";
                c_unit2 = "Feet";
    
                $("#c_unit1").html(c_unit1);
                $("#c_unit2").html(c_unit2);

                unit_cm = parseFloat($("#num1").val());
                convertedVal = (unit_cm/30.48).toFixed(2)+"";

                $("#output").val(convertedVal);

            }else if(unit == "tofeet"){
                unit = "tocentimeter";
                c_unit1 = "Feet";
                c_unit2 = "Centimeter";

                $("#c_unit1").html(c_unit1);
                $("#c_unit2").html(c_unit2);

                unit_ft = parseFloat($("#num1").val());
                convertedVal = (unit_ft*30.48).toFixed(2)+"";

                $("#output").val(convertedVal);
            }
        });

        $("#btn_convert").click(function(){
            if(unit == "tocentimeter"){
                unit_ft = parseFloat($("#num1").val());
                convertedVal = (unit_ft*30.48).toFixed(2)+"";

                $("#output").val(convertedVal);
 
            }else if(unit == "tofeet"){
                unit_cm = parseFloat($("#num1").val());
                convertedVal = (unit_cm/30.48).toFixed(2)+"";

                $("#output").val(convertedVal);
    
            }
        });       
    });

    //mile to kilometer
    $("#btn_mkm").click(function(){
        var c_measurement = "Mile to Kilometer / Kilometer to Mile";
        $("#c_measurement").show().html(c_measurement).css( { "margin-bottom" : "50px" } );

        $("#num1").focus();	
        $(".number").val("0");
        var unit_m;
        var unit_km;
        var convertedVal;
        
        var unit = "tokilometer";
        var c_unit1 = "Mile";
        var c_unit2 = "Kilometer";
        
        $("#c_unit1").html(c_unit1);
        $("#c_unit2").html(c_unit2);
        
        $("#btn_reverse").click(function(){
            if(unit == "tokilometer"){
                unit = "tomile";
                c_unit1 = "Kilometer";
                c_unit2 = "Mile";
    
                $("#c_unit1").html(c_unit1);
                $("#c_unit2").html(c_unit2);

                unit_km = parseFloat($("#num1").val());
                convertedVal = (unit_km/1.609).toFixed(2)+"";

                $("#output").val(convertedVal);
            }else if(unit == "tomile"){
                unit = "tokilometer";
                c_unit1 = "Mile";
                c_unit2 = "Kilometer";

                $("#c_unit1").html(c_unit1);
                $("#c_unit2").html(c_unit2);
                
                unit_m = parseFloat($("#num1").val());
                convertedVal = (unit_m*1.609).toFixed(2)+"";

                $("#output").val(convertedVal);
            }
        });

        $("#btn_convert").click(function(){
            if(unit == "tokilometer"){
                unit_m = parseFloat($("#num1").val());
                convertedVal = (unit_m*1.609).toFixed(2)+"";

                $("#output").val(convertedVal);
 
            }else if(unit == "tomile"){
                unit_km = parseFloat($("#num1").val());
                convertedVal = (unit_km/1.609).toFixed(2)+"";

                $("#output").val(convertedVal);
    
            }
        });       
    });

    //hectare to acre
    $("#btn_ha").click(function(){
        var c_measurement = "Hectare to Acre / Acre to Hectare";
        $("#c_measurement").show().html(c_measurement).css( { "margin-bottom" : "50px" } );

        $("#num1").focus();	
        $(".number").val("0");
        var unit_h;
        var unit_a;
        var convertedVal;
        
        var unit = "toacre";
        var c_unit1 = "Hectare";
        var c_unit2 = "Acre";
        
        $("#c_unit1").html(c_unit1);
        $("#c_unit2").html(c_unit2);
        
        $("#btn_reverse").click(function(){
            if(unit == "toacre"){
                unit = "tohectare";
                c_unit1 = "Acre";
                c_unit2 = "Hectare";
    
                $("#c_unit1").html(c_unit1);
                $("#c_unit2").html(c_unit2);

                unit_a = parseFloat($("#num1").val());
                convertedVal = (unit_a/2.471).toFixed(2)+"";

                $("#output").val(convertedVal);
            }else if(unit == "tohectare"){
                unit = "toacre";
                c_unit1 = "Hectare";
                c_unit2 = "Acre";

                $("#c_unit1").html(c_unit1);
                $("#c_unit2").html(c_unit2);
                
                unit_h = parseFloat($("#num1").val());
                convertedVal = (unit_h*2.471).toFixed(2)+"";

                $("#output").val(convertedVal);
            }
        });

        $("#btn_convert").click(function(){
            if(unit == "toacre"){
                unit_h = parseFloat($("#num1").val());
                convertedVal = (unit_h*2.471).toFixed(2)+"";

                $("#output").val(convertedVal);
 
            }else if(unit == "tohectare"){
                unit_a = parseFloat($("#num1").val());
                convertedVal = (unit_a/2.471).toFixed(2)+"";

                $("#output").val(convertedVal);
    
            }
        });       
    });

    //yard to meter
    $("#btn_ym").click(function(){
        var c_measurement = "Yard to Meter / Meter to Yard";
        $("#c_measurement").show().html(c_measurement).css( { "margin-bottom" : "50px" } );

        $("#num1").focus();	
        $(".number").val("0");
        var unit_y;
        var unit_m;
        var convertedVal;
        
        var unit = "tometer";
        var c_unit1 = "Yard";
        var c_unit2 = "Meter";
        
        $("#c_unit1").html(c_unit1);
        $("#c_unit2").html(c_unit2);
        
        $("#btn_reverse").click(function(){
            if(unit == "tometer"){
                unit = "toyard";
                c_unit1 = "Meter";
                c_unit2 = "Yard";
    
                $("#c_unit1").html(c_unit1);
                $("#c_unit2").html(c_unit2);

                unit_m = parseFloat($("#num1").val());
                convertedVal = (unit_m*1.094).toFixed(2)+"";

                $("#output").val(convertedVal);
            }else if(unit == "toyard"){
                unit = "tometer";
                c_unit1 = "Yard";
                c_unit2 = "Meter";

                $("#c_unit1").html(c_unit1);
                $("#c_unit2").html(c_unit2);
                
                unit_y = parseFloat($("#num1").val());
                convertedVal = (unit_y/1.094).toFixed(2)+"";

                $("#output").val(convertedVal);
            }
        });

        $("#btn_convert").click(function(){
            if(unit == "tometer"){
                unit_y = parseFloat($("#num1").val());
                convertedVal = (unit_y/1.094).toFixed(2)+"";

                $("#output").val(convertedVal);
 
            }else if(unit == "toyard"){
                unit_m = parseFloat($("#num1").val());
                convertedVal = (unit_m*1.094).toFixed(2)+"";

                $("#output").val(convertedVal);
    
            }
        });       
    });

    //ounce to gram
    $("#btn_og").click(function(){
        var c_measurement = "Ounce to Gram / Gram to Ounce";
        $("#c_measurement").show().html(c_measurement).css( { "margin-bottom" : "50px" } );

        $("#num1").focus();	
        $(".number").val("0");
        var unit_oz;
        var unit_g;
        var convertedVal;
        
        var unit = "togram";
        var c_unit1 = "Ounce";
        var c_unit2 = "Gram";
        
        $("#c_unit1").html(c_unit1);
        $("#c_unit2").html(c_unit2);
        
        $("#btn_reverse").click(function(){
            if(unit == "togram"){
                unit = "toounce";
                c_unit1 = "Gram";
                c_unit2 = "Ounce";
    
                $("#c_unit1").html(c_unit1);
                $("#c_unit2").html(c_unit2);

                unit_g = parseFloat($("#num1").val());
                convertedVal = (unit_g/28.35).toFixed(2)+"";

                $("#output").val(convertedVal);
            }else if(unit == "toounce"){
                unit = "togram";
                c_unit1 = "Ounce";
                c_unit2 = "Gram";

                $("#c_unit1").html(c_unit1);
                $("#c_unit2").html(c_unit2);
                
                unit_oz = parseFloat($("#num1").val());
                convertedVal = (unit_oz*28.35).toFixed(2)+"";

                $("#output").val(convertedVal);
            }
        });

        $("#btn_convert").click(function(){
            if(unit == "togram"){
                unit_oz = parseFloat($("#num1").val());
                convertedVal = (unit_oz*28.35).toFixed(2)+"";

                $("#output").val(convertedVal);
 
            }else if(unit == "toounce"){
                unit_g = parseFloat($("#num1").val());
                convertedVal = (unit_g/28.35).toFixed(2)+"";

                $("#output").val(convertedVal);
    
            }
        });       
    });

    //poundtokilogram
    $("#btn_pkg").click(function(){
        var c_measurement = "Kilogram to Pound / Pound to Kilogram";
        $("#c_measurement").show().html(c_measurement).css( { "margin-bottom" : "50px" } );

        $("#num1").focus();	
        $(".number").val("0");

        var unit_kg;
        var unit_p;
        var convertedVal;
        
        var unit = "topound";
        var c_unit1 = "Kilogram";
        var c_unit2 = "Pound";
        
        $("#c_unit1").html(c_unit1);
        $("#c_unit2").html(c_unit2);
        
        $("#btn_reverse").click(function(){
            if(unit == "topound"){
                unit = "tokg";
                c_unit1 = "Pound";
                c_unit2 = "Kilogram";

                $("#c_unit1").html(c_unit1);
                $("#c_unit2").html(c_unit2);

                unit_p = parseFloat($("#num1").val());
                convertedVal = (unit_p/2.205).toFixed(2)+"";

                $("#output").val(convertedVal);

            }else if(unit == "tokg"){
                unit = "topound";
                c_unit1 = "Kilogram";
                c_unit2 = "Pound";
    
                $("#c_unit1").html(c_unit1);
                $("#c_unit2").html(c_unit2);

                unit_kg = parseFloat($("#num1").val());
                convertedVal = (unit_kg*2.205).toFixed(2)+"";

                $("#output").val(convertedVal);
            }
        });

        $("#btn_convert").click(function(){
            if(unit == "topound"){
                unit_kg = parseFloat($("#num1").val());
                convertedVal = (unit_kg*2.205).toFixed(2)+"";

                $("#output").val(convertedVal);
 
            }else if(unit == "tokg"){
                unit_p = parseFloat($("#num1").val());
                convertedVal = (unit_p/2.205).toFixed(2)+"";

                $("#output").val(convertedVal);
    
            }
        });       
    });

    //quart to pint
    $("#btn_qp").click(function(){
        var c_measurement = "Quart to Pint / Pint to Quart";
        $("#c_measurement").show().html(c_measurement).css( { "margin-bottom" : "50px" } );

        $("#num1").focus();	
        $(".number").val("0");
        var unit_qrt;
        var unit_pt;
        var convertedVal;
        
        var unit = "topint";
        var c_unit1 = "Quart";
        var c_unit2 = "Pint";
        
        $("#c_unit1").html(c_unit1);
        $("#c_unit2").html(c_unit2);
        
        $("#btn_reverse").click(function(){
            if(unit == "topint"){
                unit = "toquart";
                c_unit1 = "Pint";
                c_unit2 = "Quart";
    
                $("#c_unit1").html(c_unit1);
                $("#c_unit2").html(c_unit2);

                unit_pt = parseFloat($("#num1").val());
                convertedVal = (unit_pt/2).toFixed(2)+"";

                $("#output").val(convertedVal);
            }else if(unit == "toquart"){
                unit = "topint";
                c_unit1 = "Quart";
                c_unit2 = "Pint";

                $("#c_unit1").html(c_unit1);
                $("#c_unit2").html(c_unit2);
                
                unit_qrt = parseFloat($("#num1").val());
                convertedVal = (unit_qrt*2).toFixed(2)+"";

                $("#output").val(convertedVal);
            }
        });

        $("#btn_convert").click(function(){
            if(unit == "topint"){
                unit_qrt = parseFloat($("#num1").val());
                convertedVal = (unit_qrt*2).toFixed(2)+"";

                $("#output").val(convertedVal);
 
            }else if(unit == "toquart"){
                unit_pt = parseFloat($("#num1").val());
                convertedVal = (unit_pt/2).toFixed(2)+"";

                $("#output").val(convertedVal);
    
            }
        });       
    });

    //celsius to fahrenheit
    $("#btn_cf").click(function(){
        var c_measurement = "Celsius to Fahrenheit / Fahrenheit to Celsius";
        $("#c_measurement").show().html(c_measurement).css( { "margin-bottom" : "50px" } );

        $("#num1").focus();	
        $(".number").val("0");
        var unit_c;
        var unit_f;
        var convertedVal;
        
        var unit = "tofahrenheit";
        var c_unit1 = "Celsius";
        var c_unit2 = "Fahrenheit";
        
        $("#c_unit1").html(c_unit1);
        $("#c_unit2").html(c_unit2);
        
        $("#btn_reverse").click(function(){
            if(unit == "tofahrenheit"){
                unit = "tocelsius";
                c_unit1 = "Fahrenheit";
                c_unit2 = "Celsius";
    
                $("#c_unit1").html(c_unit1);
                $("#c_unit2").html(c_unit2);

                unit_f = parseFloat($("#num1").val());
                convertedVal = ((unit_f-32)*(5/9)).toFixed(2)+"";

                $("#output").val(convertedVal);
            }else if(unit == "tocelsius"){
                unit = "tofahrenheit";
                c_unit1 = "Celsius";
                c_unit2 = "Fahrenheit";

                $("#c_unit1").html(c_unit1);
                $("#c_unit2").html(c_unit2);
                
                unit_c = parseFloat($("#num1").val());
                convertedVal = ((unit_c*(9/5))+32).toFixed(2)+"";

                $("#output").val(convertedVal);
            }
        });

        $("#btn_convert").click(function(){
            if(unit == "tofahrenheit"){
                unit_c = parseFloat($("#num1").val());
                convertedVal = ((unit_c*(9/5))+32).toFixed(2)+"";

                $("#output").val(convertedVal);
 
            }else if(unit == "tocelsius"){
                unit_f = parseFloat($("#num1").val());
                convertedVal = ((unit_f-32)*(5/9)).toFixed(2)+"";

                $("#output").val(convertedVal);
    
            }
        });       
    });

    //kilowatt to horsepower
    $("#btn_kwhp").click(function(){
        var c_measurement = "Kilowatt to Horsepower / Horsepower to Kilowatt";
        $("#c_measurement").show().html(c_measurement).css( { "margin-bottom" : "50px" } );

        $("#num1").focus();	
        $(".number").val("0");
        var unit_kw;
        var unit_hp;
        var convertedVal;
        
        var unit = "tohp";
        var c_unit1 = "Kilowatt";
        var c_unit2 = "Horsepower";
        
        $("#c_unit1").html(c_unit1);
        $("#c_unit2").html(c_unit2);
        
        $("#btn_reverse").click(function(){
            if(unit == "tohp"){
                unit = "tokw";
                c_unit1 = "Horsepower";
                c_unit2 = "Kilowatt";
    
                $("#c_unit1").html(c_unit1);
                $("#c_unit2").html(c_unit2);

                unit_hp = parseFloat($("#num1").val());
                convertedVal = (unit_hp/1.341).toFixed(2)+"";

                $("#output").val(convertedVal);
            }else if(unit == "tokw"){
                unit = "tohp";
                c_unit1 = "Kilowatt";
                c_unit2 = "Horsepower";

                $("#c_unit1").html(c_unit1);
                $("#c_unit2").html(c_unit2);
                
                unit_kw = parseFloat($("#num1").val());
                convertedVal = (unit_kw*1.341).toFixed(2)+"";

                $("#output").val(convertedVal);
            }
        });

        $("#btn_convert").click(function(){
            if(unit == "tohp"){
                unit_kw = parseFloat($("#num1").val());
                convertedVal = (unit_kw*1.341).toFixed(2)+"";

                $("#output").val(convertedVal);
 
            }else if(unit == "tokw"){
                unit_hp = parseFloat($("#num1").val());
                convertedVal = (unit_hp/1.341).toFixed(2)+"";

                $("#output").val(convertedVal);
    
            }
        });       
    });

    //hertz to rad/s
    $("#btn_hr").click(function(){
        var c_measurement = "Hertz to Radian per Second / Radian per Second to Hertz";
        $("#c_measurement").show().html(c_measurement).css( { "margin-bottom" : "50px" } );

        $("#num1").focus();	
        $(".number").val("0");
        var unit_hz;
        var unit_rad;
        var convertedVal;
        
        var unit = "torad";
        var c_unit1 = "Hertz";
        var c_unit2 = "Rad/s";
        
        $("#c_unit1").html(c_unit1);
        $("#c_unit2").html(c_unit2);
        
        $("#btn_reverse").click(function(){
            if(unit == "torad"){
                unit = "tohertz";
                c_unit1 = "Rad/s";
                c_unit2 = "Hertz";
    
                $("#c_unit1").html(c_unit1);
                $("#c_unit2").html(c_unit2);

                unit_rad = parseFloat($("#num1").val());
                convertedVal = (unit_rad/6.28).toFixed(2)+"";

                $("#output").val(convertedVal);
            }else if(unit == "tohertz"){
                unit = "torad";
                c_unit1 = "Hertz";
                c_unit2 = "Rad/s";

                $("#c_unit1").html(c_unit1);
                $("#c_unit2").html(c_unit2);
                
                unit_hz = parseFloat($("#num1").val());
                convertedVal = (unit_hz*6.28).toFixed(2)+"";

                $("#output").val(convertedVal);
            }
        });

        $("#btn_convert").click(function(){
            if(unit == "torad"){
                unit_hz = parseFloat($("#num1").val());
                convertedVal = (unit_hz*6.28).toFixed(2)+"";

                $("#output").val(convertedVal);
 
            }else if(unit == "tohertz"){
                unit_rad = parseFloat($("#num1").val());
                convertedVal = (unit_rad/6.28).toFixed(2)+"";

                $("#output").val(convertedVal);
    
            }
        });       
    });


    //clear button
    $("#btn_clear").click(function(){
        if ( confirm("Clear all numbers") ) {
			$(".number").val("0");

			window.setTimeout(function() {
				$("#num1").focus();	
			},300);
			
		}
    });

});