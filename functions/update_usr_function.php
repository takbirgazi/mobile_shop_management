<?php
$sl = $_POST['index'];
$usr_id = $_POST['up_usr_id'];
$usr_email = $_POST['up_usr_email'];
$usr_pwd = $_POST['up_usr_pwd'];
if(file_exists("../data/user.json")){
    $json_file = "../data/user.json";
    $json_data = file_get_contents($json_file);
    $decode_data = json_decode($json_data,true);
    foreach($decode_data as $value){
       // echo $value['usr_id']; 
        if($value['usr_id'] == $usr_id){
            $up_data = array(
            // "usr_id" => $usr_id,
            "usr_email" => $usr_email,
            "usr_password" => $usr_pwd,
            // "usr_role" => "User" 
            );
            $id = "$sl";
            $rep_data = array_replace($value,$up_data);
            $value = $rep_data;
            $decode_data[$id] = $value ;
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