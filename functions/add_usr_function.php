<?php
 if($_POST['add_usr_email']!="" && $_POST['add_usr_pwd']!=""){
    $usr_email = $_POST['add_usr_email'];
    $usr_pwd = $_POST['add_usr_pwd'];
    $count = rand(0,100);
    $usr_sl_no = "$count";

    if(file_exists('../data/user.json')){
        $json_file = '../data/user.json';
        $json_data = file_get_contents($json_file);
        $json_decode = json_decode($json_data,true);
        $new_data = array(
            "usr_id"        => $usr_sl_no,
            "usr_email"     => $usr_email,
            "usr_password"  => $usr_pwd,
            "usr_role"      => "User",
            );
        $json_decode[] = $new_data;
        $json_encod = json_encode($json_decode, JSON_PRETTY_PRINT);
        if(file_put_contents($json_file,$json_encod)){
            echo 1;
        }else{
            echo 0;
        }
    }
 }


 ?>