<?php
//Admin Info Update 
$up_old_email = $_POST['old_email'];
$up_new_email = $_POST['new_email'];
$up_old_pwd = $_POST['old_pwd'];
$up_new_pwd = $_POST['new_pwd'];
if(file_exists("../data/user.json")){
    $json_file = "../data/user.json";
    $json_data = file_get_contents($json_file);
    $decode_data = json_decode($json_data,true);
    foreach($decode_data as $value){
       // echo $value['usr_id']; 
        if($value['usr_id'] == "1" && $value['usr_role'] == "Admin" && $value['usr_email'] == $up_old_email && $value['usr_password'] == $up_old_pwd){
            $up_data = array(
            // "usr_id" => 1,
            "usr_email" => $up_new_email,
            "usr_password" => $up_new_pwd,
            // "usr_role" => "Admin" 
            );
            $rep_data = array_replace($value,$up_data);
            $value = $rep_data;
            $decode_data[0] = $value ;
            $json_encode = json_encode($decode_data,JSON_PRETTY_PRINT);
            if(file_put_contents($json_file,$json_encode)){
                echo 1;
            }else{
                echo 0;
            }
     }
    }
}

?>