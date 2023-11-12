<?php
        if(isset($_POST['up_usr_id'])){
            $up_email = $_POST['up_usr_email'];
            $up_pwd = $_POST['up_usr_pwd'];
            if(file_exists("data/user.json")){
                $json_file = "data/user.json";
                $current_data = file_get_contents($json_file);
                $json_decode = json_decode($current_data,true);
                if(!empty($json_decode)){
                    foreach($json_decode as $value){
                        if($value['usr_id']==$_GET['up_usr_id']){
                            $new_data = array(
                                "usr_email"     => $up_email,
                                "usr_password"  => $up_pwd,
                                "usr_role"      => "User"
                            );
                            $json_decode[]=$new_data;
                            $json_encode = json_encode($json_decode,JSON_PRETTY_PRINT);
                            if(file_put_contents($json_file,$json_encode)){
                                echo 1;
                            }else{
                                echo 0;
                            }
                             } 
                              } 
                               } 
                                } 
                                 }
    
    
    ?>