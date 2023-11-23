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
                    $("#usr_er_msg").html("User Added successfully!");
                    $("#ad_usr_phone_cnt_frm").trigger("reset");
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
    let index_id = $("#index_id").val();
    let up_usr_email = $("#up_usr_email").val();
    let up_usr_pwd = $("#up_usr_pwd").val();
    
    $.ajax({
        url     : "functions/update_usr_function.php",
        type    : "POST",
        data    : {
                    index        : index_id,
                    up_usr_id    : up_usr_id,
                    up_usr_email : up_usr_email,
                    up_usr_pwd   : up_usr_pwd,

                    },
        success : function(data){
            if(data==1){
                $("#up_usr_er_msg").html("User Data Updated");
                
            }else{
                $("#up_usr_er_msg").html("User Data Not Updated");
            }
        }
    })

})
//End

//Update Phone start

// Set Category Value
const upradioButton= $('#up_inpt_redio');
upradioButton.change(function(e){
let up_tg_value= e.target.value;
$("#up_phn_cat_nm").val(up_tg_value);
})

$("#update_phone_price").click(function(event){
    event.preventDefault();
    let upd_phone_sl= $("#up_phn_sl").val();
    let upd_sl_id= $("#up_phn_sl_id").val();
    let upd_phone_name = $("#up_phn_bar_nm").val();
    let upd_phone_category = $("#up_phn_cat_nm").val();
    let upd_phone_model = $("#up_phn_model").val();
    let upd_phone_rp = $("#up_phn_rp").val();
    let upd_phone_cp = $("#up_phn_cp").val();
    
    $.ajax({
        url  : "functions/update_phn_function.php",
        type : "POST",
        data : {
            in_sl            : upd_phone_sl,
            sl_id            : upd_sl_id,
            phone_name       : upd_phone_name,
            phone_category   : upd_phone_category,
            phone_model      : upd_phone_model,
            phone_rp         : upd_phone_rp,
            phone_cp         : upd_phone_cp,
             },
        success : function(data){
            if(data==1){
                $("#up_phn_er_msg").html("Data Updated");
            }else if(data==0){
                $("#up_phn_er_msg").html("Data Not Updated");
            }else{
                $("#up_phn_er_msg").html(data);
            }
        }
    })
})

//Update Phone End


//Update Admin Email And Password Code start
$("#pwd_upd").click(function(event){
    event.preventDefault();
    let old_email = $("#upd_cr_email").val();
    let new_email = $("#upd_new_email").val();
    let old_pwd = $("#upd_cr_pwd").val();
    let new_pwd = $("#upd_nw_pwd").val();
    let cp_pwd = $("#upd_cp_pwd").val();
    if(new_pwd == cp_pwd){
        $.ajax({
            url     : "functions/update_adm_pwd.php",
            type    : "POST",
            data    : {
                old_email : old_email,
                new_email : new_email,
                old_pwd : old_pwd,
                new_pwd : new_pwd
            },
            success : function(data){
                if(data==1){
                    $("#upd_msg").html("Information Updated!");
                    $("#upd_frm").trigger("reset");
                }else{
                    $("#upd_msg").html("Please Write Your Correct Information");
                }
            }
        })
    }else{
        $("#upd_msg").html("New Password And Confirm Password Not Match!");
    }
})
//Update Admin Password End


//End
})