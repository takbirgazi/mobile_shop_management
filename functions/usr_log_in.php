<?php

if($_POST['usr_log_email']!="" && $_POST['usr_log_pwd']!=""){

    $email= $_POST['usr_log_email'];
    $pwd = $_POST['usr_log_pwd'];

    if(file_exists('../data/user.json')){
        $curren_data= file_get_contents('../data/user.json');
        $json_decode= json_decode($curren_data,true);
        if(!empty($json_decode)){
            
            foreach($json_decode as $value){
                if($value['usr_email']== $email && $value['usr_password'] == $pwd && $value['usr_role'] == "User"){
                    echo 1;
                    break;
                }else{
                    echo 0;
                }
            }
        }}else{
            echo "File Dosent Exist!";
        }

}


?>