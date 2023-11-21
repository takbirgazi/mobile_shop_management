<?php
$cnt = $_POST['in_sl'];
$sl = ((int)$cnt -1);
$sl_id = $_POST['sl_id'];
$phn_name = $_POST['phone_name'];
$phn_cat = $_POST['phone_category'];
$phn_mdl = $_POST['phone_model'];
$phn_rp = $_POST['phone_rp'];
$phn_cp = $_POST['phone_cp'];
if($_POST['phone_name']!="" && $_POST['phone_category']!="" && $_POST['phone_model']!="" && $_POST['phone_rp']!="" && $_POST['phone_cp']!=""){
if(file_exists("../data/data.json")){
    $json_file = "../data/data.json";
    $json_data = file_get_contents($json_file);
    $decode_data = json_decode($json_data,true);
    foreach($decode_data as $value){
        if($value['serial_no'] == $sl_id){
            $up_data = array(
            "brand_name" => $phn_name,
            "model_no" => $phn_mdl,
            "retail_price" => $phn_rp, 
            "customar_price" => $phn_cp, 
            "category" => $phn_cat, 
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
}}else{
    echo "All Filds are Required!";
}


?>