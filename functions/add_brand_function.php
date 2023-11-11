<?php
//Add Phone Brand Name Form Handaling
if($_POST['add_new_brand_name']!=""){
    $new_brand_name= $_POST['add_new_brand_name'];
    if(file_exists('../data/brand_name.json')){
       $json_file= "../data/brand_name.json";
       $curren_data= file_get_contents($json_file);
       $json_decode= json_decode($curren_data,true);
       $brand_sl_no = rand(0,100);
       $brand_str_sl = "$brand_sl_no";
       $new_data= array(
            "brand_serial_no" => $brand_str_sl,
            "brand_brand_name" => $new_brand_name,
       );
       $json_decode[] = $new_data;
       $json_encode = json_encode($json_decode, JSON_PRETTY_PRINT);
       if(file_put_contents($json_file,$json_encode)){
            echo 1;
       }else{
            echo 0;  
       } 
    }else{
        echo "File Not Found!";
    }
} 


?>