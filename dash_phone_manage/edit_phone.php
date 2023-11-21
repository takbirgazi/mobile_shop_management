<div class="my-3 mb-5 add_phone_form">
    <h3>Edit Phone</h3>
    <span id="up_phn_er_msg" class="text-danger"></span>
    <form id="add_phone_cnt_frm">
    <div class="form-group">
        <label for="inputState">Name</label>

        <select id="up_phn_bar_nm" class="form-control">
        <option disabled>Select Your Phone Name</option>
<?php   
    if(file_exists('data/brand_name.json')){
    $id_no = $_GET["slid"];
    $index = $_GET["sl"];
    $curren_data= file_get_contents('data/brand_name.json');
    $curren_data2= file_get_contents('data/data.json');
    $json_decode = json_decode($curren_data,true);                           
    $json_decode2 = json_decode($curren_data2,true);                           
    if(!empty($json_decode)){
        foreach($json_decode as $value){
    ?>
            <option <?php 
                foreach($json_decode2 as $val2){
                    if($value['brand_brand_name']== $val2['brand_name'] && $val2['serial_no']=="$id_no"){ echo "selected"; break;}
                }
            ?> value="<?php echo ($value['brand_brand_name']); ?>"><?php echo ($value['brand_brand_name']); ?></option>

    <?php 
        }}else{
            echo"<p>No Data Found!</p>";
            }
    }            
        ?> 
        </div>
        </select>

        <div class="form-group">
        <label class="mt-2">Category</label><br>
        <input id="up_phn_cat_nm" type="hidden">
        <input id="up_phn_sl" type="hidden" value="<?php echo $index; ?>">
            <div id="up_inpt_redio" class="my-2">
                <input type="radio" name="phn_cat_nm" value="Smart Phone">
                <label class="mrg_right"  for="Smart Phone">Smart Phone</label>
                <input  type="radio" name="phn_cat_nm" value="Button Phone">
                <label for="Button Phone">Button Phone</label>
            </div>
        </div>
        <div class="form-group">
            <label for="up_phn_model">Model</label>
            <input type="text" class="form-control" id="up_phn_model" value="<?php
            foreach($json_decode2 as $val2){
                if($val2['serial_no']=="$id_no"){
                    echo $val2['model_no'];
            } } ?>">
        </div>
        <div class="form-group">
            <label for="up_phn_rp">RP</label>
            <input type="number" class="form-control" id="up_phn_rp" value="<?php
            foreach($json_decode2 as $val2){
                if($val2['serial_no']=="$id_no"){
                    echo $val2['retail_price'];
            } } ?>">
        </div>
        <div class="form-group">
            <label for="up_phn_sl_id">MRP</label>
            <input id="up_phn_sl_id" type="hidden" value="<?php
            foreach($json_decode2 as $val2){
                if($val2['serial_no']=="$id_no"){
                    echo $val2['serial_no'];
            } } ?>">
            <input type="number" class="form-control" id="up_phn_cp" value="<?php
            foreach($json_decode2 as $val2){
                if($val2['serial_no']=="$id_no"){
                    echo $val2['customar_price'];
            } } ?>">
        </div>
        <button id="update_phone_price" type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>