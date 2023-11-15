<div class="my-3 mb-5 add_phone_form">
    <h3>Edit Phone</h3>
    <span id="add_phone_name_err_text"></span>
    <form id="add_phone_cnt_frm">
    <div class="form-group">
        <label for="inputState">Name</label>

        <select id="phn_bar_nm" class="form-control">
        <option disabled selected>Select Your Phone Name</option>
<?php   
    if(file_exists('data/brand_name.json')){
    $curren_data= file_get_contents('data/brand_name.json');
    $json_decode = json_decode($curren_data,true);                           
    if(!empty($json_decode)){
        foreach($json_decode as $value){
    ?>
            <option value="<?php echo ($value['brand_brand_name']); ?>"><?php echo ($value['brand_brand_name']); ?></option>

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
        <input id="phn_cat_nm" type="hidden">
            <div id="inpt_redio" class="my-2">
                <input type="radio" name="phn_cat_nm" value="Smart Phone">
                <label class="mrg_right"  for="Smart Phone">Smart Phone</label>
                <input  type="radio" name="phn_cat_nm" value="Button Phone">
                <label for="Button Phone">Button Phone</label>
            </div>
        </div>
        <div class="form-group">
            <label for="inputZip">Model</label>
            <input type="text" class="form-control" id="phn_model" placeholder="Write Your Model">
        </div>
        <div class="form-group">
            <label for="inputZip">RP</label>
            <input type="number" class="form-control" id="phn_rp" placeholder="Write Your Retail Price Rate">
        </div>
        <div class="form-group">
            <label for="inputZip">MRP</label>
            <input type="number" class="form-control" id="phn_cp" placeholder="Write Your Customer Price Rate">
        </div>
        <button id="edit_phone_price" type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>