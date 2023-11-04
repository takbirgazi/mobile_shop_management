// Ajax Form Handaling
$(document).ready(function(){
    //Add Phone Brand Name Code
    $('#add_brand_phone').click(function(event){
        event.preventDefault();
        let add_brand_name = $("#phone_brand_name").val();
            $.ajax({
                url : "functions/add_brand_function.php",
                type : "POST",
                data : {
                    add_new_brand_name : add_brand_name,
                },
                success : function(data){
                    if(data==1){
                         $("#brand_name_err_text").html ("<div style='background: #247c24' class='masg'>Brand Name Added Successfully!</div> ");
                        $("#add_brand_cnt_frm").trigger("reset");
                    }else{
                         $("#brand_name_err_text").html ("<div style='background: #9d3333' class='masg'>All Filds Are Required</div>"); 
                    }                
                }
            }); 
    })

    // Add Phone price Code "temp/add_phone.php"
    $('#add_phone_price').click(function(event){
        event.preventDefault();
        let add_phone_name = $("#phn_bar_nm").val();
        let add_phone_category = $("#phn_cat_nm").val();
        let add_phone_model = $("#phn_model").val();
        let add_phone_rp = $("#phn_rp").val();
        let add_phone_cp = $("#phn_cp").val();
            $.ajax({
                url : "functions/add_phone_function.php",
                type : "POST",
                data : {
                    add_new_phone_name : add_phone_name,
                    add_new_phone_category: add_phone_category,
                    add_new_phone_model : add_phone_model,
                    add_new_phone_rp : add_phone_rp,
                    add_new_phone_cp : add_phone_cp,
                },
                success : function(data){
                    if(data==1){
                         $("#add_phone_name_err_text").html ("<div style='background: #247c24' class='masg'>Brand Name Added Successfully!</div> ");
                        $("#add_phone_cnt_frm").trigger("reset");
                    }else{
                         $("#add_phone_name_err_text").html ("<div style='background: #9d3333' class='masg'>All Filds Are Required</div> "); 
                    }                
                }
         }); 
    })

})