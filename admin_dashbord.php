<?php
// Header File Include
include_once("temp/header.php");
?>
    <main id="main" class="mx-2">
        <section class="ad_dash my-3">
            <div class="ad_dash_header">
                <ul>
                    <li> <a href="?id=admin">Admin Dashbord</a></li>
                    <li> <a href="?id=add_phone">Add New Phone</a></li>
                    <li> <a href="?id=brand_name">Add Brand Name</a></li>
                    <li> <a href="?id=ad_pwd_chng">Change My Password</a></li>
                    <li> <a href="?id=manage_phone&cat=mng_php">Manage Phone</a></li>
                </ul>
            </div>
        </section>
        <section class="ad_dash_content my-3">
            <div class="dash_changing_var">

                <!-- Dashbord Code -->
                <?php 
                if(isset($_GET['id'])){
                    if($_GET['id']=="admin"){
                        include_once ("temp/dashbord.php");
                    }
                    elseif($_GET['id']=="add_phone"){
                        include_once ("temp/add_phone.php");
                    }
                    elseif($_GET['id']=="brand_name"){
                        include_once ("temp/add_brand.php");
                    }
                    elseif($_GET['id']=="ad_pwd_chng"){
                        include_once ("temp/admin_password.php");
                    }elseif($_GET['id']== "edit_usr" && $_GET['usr_id_no']){
                        include_once("dash_phone_manage/edit_usr.php");
                    }
                    elseif($_GET['id']=="manage_phone"){
                        // Manage Phone Page Navigation 
                        if($_GET['id']== "manage_phone" && $_GET['cat']=="mng_php"){
                            include_once ("dash_phone_manage/manage_phone.php");
                        }elseif($_GET['id']== "manage_phone" && $_GET['cat']=="btn_phn"){
                            include_once("dash_phone_manage/manage_button_phone.php");
                        }elseif($_GET['id']== "manage_phone" && $_GET['cat']=="android_phn"){
                            include_once("dash_phone_manage/manage_smart_phone.php");
                        }elseif($_GET['id']== "manage_phone" && $_GET['cat']=="src_phn"){
                            include_once("dash_phone_manage/manage_search_phone.php");
                        }elseif($_GET['id']== "manage_phone" && $_GET['cat']=="edit_phn"){
                            include_once("dash_phone_manage/edit_phone.php");
                        }
                        
                    }
                    else{
                       // header("location: admin.php");
                    }
                }else{
                    header("location: admin2.php");
                } ?>                        
                        
            </div>
        </section>
    </main>
<?php
// Footer File Include
include_once("temp/footer.php");
?>