<?php
//Add Phone Brand Name Form Handaling
if($_POST['add_new_brand_name']!=""){
    $new_brand_name= $_POST['add_new_brand_name'];
    if(file_exists('./data/brand_name.json')){
       $json_file= "./data/brand_name.json";
       $curren_data= file_get_contents($json_file);
       $json_decode= json_decode($curren_data,true);
       $brand_sl_no = count($json_decode)+1;
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
}else{
    echo "Input Fild Are Empty";
}  

//Add Phone Form Handaling
if($_POST['add_new_phone_name']!="" && $_POST['add_new_phone_category']!="" && $_POST['add_new_phone_model']!="" && $_POST['add_new_phone_rp']!="" && $_POST['add_new_phone_cp']!=""){
    
    $phone_name = $_POST['add_new_phone_name'];
    $phone_model = $_POST['add_new_phone_model'];
    $phone_rp = $_POST['add_new_phone_rp'];
    $phone_cp = $_POST['add_new_phone_cp'];
    $phone_cat = $_POST['add_new_phone_category'];

    if(file_exists('./data/data.json')){
       $json_file= "./data/data.json";
       $curren_data= file_get_contents($json_file);
       $json_decode= json_decode($curren_data,true);
       $brand_sl_no = count($json_decode)+1;
       $brand_str_sl = "$brand_sl_no";
       $new_data= array(
        "serial_no"      => $brand_str_sl,
        "brand_name"     => $phone_name,
        "model_no"       => $phone_model,
        "retail_price"   => $phone_rp,
        "customar_price" => $phone_cp,
        "category"       => $phone_cat,
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
}else{
    echo "Input Fild Are Empty";
}  


?>