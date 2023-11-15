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

    // Set Category Value
    const radioButton= $('#inpt_redio');
       radioButton.change(function(e){
       let tg_value= e.target.value;
       $("#phn_cat_nm").val(tg_value);
    })

    // Upload Phone data
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
// User Log In Security Varyfy
    $("#usr_login_vrfy").click(function(event){
        event.preventDefault();
        let usr_email = $("#usr_log_email").val();
        let usr_pwd = $("#usr_log_pwd").val();
        $.ajax({
            url : "functions/usr_log_in.php",
            type : "POST",
            data : {
                usr_log_email : usr_email,
                usr_log_pwd : usr_pwd,
            },
            success : function(data){
                if(data == 1){
                    window.location.href = "phone_list.php";
                }else{
                   // window.location.href = "index.php";
                    $("#usr_error_cont").html("Please Wirte Your Currect Information!");
                }
            }
        })
    })

    //Admin Log In Security Varyfy
    $("#admin_log_vrfy").click(function(event){
        event.preventDefault();
        let admin_email = $("#admin_log_email").val();
        let admin_pwd = $("#admin_log_pwd").val();
        $.ajax({
            url : "functions/admin_log_in.php",
            type : "POST",
            data : {
                admin_log_email : admin_email,
                admin_log_pwd : admin_pwd,
            },
            success : function(data){
                if(data == 1){
                    window.location.href = "admin_dashbord.php?id=admin";
                }else{
                    $("#admin_error_cont").html("Please Wirte Your Currect Information!");
                }
            }
        })
    })
// Search File Handle
$("#search_model").click(function(event){
    event.preventDefault();
    let find_model = $("#find_modl").val();
    window.location.href = "search_phone.php?mdl="+find_model;

})
// Admin Search File Handle
$("#admin_search_model").click(function(event){
    event.preventDefault();
    let find_model = $("#admin_find_modl").val();
    window.location.href = "?id=manage_phone&cat=src_phn&mmdl="+find_model;

})

// Add User Data 

$("#add_usr_data").click(function(event){
    event.preventDefault();
    let ad_usr_email = $("#add_usr_email").val();
    let ad_usr_pwd = $("#add_usr_pwd").val();
    let ad_usr_cp_pwd = $("#add_usr_cp_pwd").val();
        if(ad_usr_pwd !== ad_usr_cp_pwd){
            $("#usr_er_msg").html("Password And Confirm Password Dosen't match!");
        }else{
    $.ajax({
        url : "functions/add_usr_function.php",
        type : "POST",
        data : {
            add_usr_email : ad_usr_email,
            add_usr_pwd : ad_usr_pwd,

                  },
        success : function(data){
                if(data==1){
                    $("#usr_er_msg").html("New User Added");
                }else{
                    $("#usr_er_msg").html("New User Dosn't Added");
                }
        }
    })}

})
//End

// Update User
$("#update_usr_data").click(function(event){
    event.preventDefault();
    let up_usr_id = $("#up_usr_id").val();
    let up_usr_email = $("#up_usr_email").val();
    let up_usr_pwd = $("#up_usr_pwd").val();
    $.ajax({
        url : "functions/update_usr_function.php",
        type : "POST",
        data : {
            up_usr_id : up_usr_id,
            up_usr_email : up_usr_email,
            up_usr_pwd : up_usr_pwd,
        },
        success : function(data){
            if(data == 1){
                $("#up_usr_er_msg").html("User Updated!"+data);
            }else{
                $("#up_usr_er_msg").html("User Don't Updated"+data+"!!");
            }
        }
    })

})



})