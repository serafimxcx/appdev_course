$(function(){
    LoadCategories();
    LoadRecords();

    window.setTimeout(function() {
		
		$("#txt_pcode").focus();
	},300);

    $("#btn_save").click(function(){

        if ( parseInt($("#p_id").val()) == 0 )
			AddProduct();
		else
			UpdateRecord();
    });

    $("#btn_cancel").click(function(){
        location.reload();
    });

    $(document.body).on("click",".remove-record",function() {
		if ( confirm("Delete this record?") ) 
			RemoveRecord(parseInt($(this).attr("product_id")));
	});

    $(document.body).on("click",".p_records",function() {
		Get(parseInt($(this).attr("product_id")));
	});
});

function LoadCategories(){
  

    $.ajax({
        "type": "POST",
        "url": "loadcategories.php",
        "success": function(text){
            $("#slct_category").html(text);
        }
    });
}

function Reset(){
    $("[data_type=vc]").val("");
	$("[data_type=f]").val("");
	$("#p_id").val("0");
	window.setTimeout(function() {
		
		$("#txt_pcode").focus();
	},300);
}

function LoadRecords(){
    $.ajax({
        "type": "POST",
        "url": "loadrecords.php",
        "success": function(text){
            $("#productrecords").html(text);
        }
    });
}

function AddProduct(){
    cProductData = "";

    cProductData = "txt_pcode="+$("#txt_pcode").val();
    cProductData += "&txt_desc="+$("#txt_desc").val();
    cProductData += "&slct_category="+$("#slct_category").val();
    cProductData += "&txt_price="+$("#txt_price").val();

    $.ajax({
        "type": "POST",
        "url": "addproduct.php",
        "data": cProductData,
        "success": function(text){
            if(text !== ""){
                alert(text);
            }else{
                LoadRecords();
                Reset();
            }

            $("#btn_save").attr("disabled",false);
        }
    });
}

function RemoveRecord(p_id){
    var cProductID = "";

    cProductID += "p_id="+p_id;

    $.ajax({
        "type": "POST",
        "url": "removerecord.php",
        "data": cProductID,
        "success": function(text){
            if(text !== ""){
                alert(text);
            }else{
                LoadRecords();
                Reset();
            }

        }
    });
}

function Get(p_id){
    var cProductID = "";

    cProductID += "p_id="+p_id;

    $.ajax({
        "type": "POST",
        "url": "getrecord.php",
        "data": cProductID,
        "success": function(text){
           var arr_product = JSON.parse(text);

           $("#txt_pcode").val(arr_product.product_code);
           $("#txt_desc").val(arr_product.description);
           $("#slct_category").val(arr_product.category);
           $("#txt_price").val(arr_product.price);
           $("#p_id").val(p_id);

           
        }
    });
}

function UpdateRecord(){
    cProductData = "";

    cProductData = "txt_pcode="+$("#txt_pcode").val();
    cProductData += "&txt_desc="+$("#txt_desc").val();
    cProductData += "&slct_category="+$("#slct_category").val();
    cProductData += "&txt_price="+$("#txt_price").val();
    cProductData += "&p_id="+$("#p_id").val();

    $.ajax({
        "type": "POST",
        "url": "updaterecord.php",
        "data": cProductData,
        "success": function(text){
            if(text !== ""){
                alert(text);
            }else{
                LoadRecords();
                Reset();
            }

        }
    });
}
