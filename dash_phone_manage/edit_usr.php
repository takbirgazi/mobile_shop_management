      
    <?php
        if(isset($_GET['usr_id_no'])){
            $index = $_GET['index'];
            if(file_exists("data/user.json")){
                $json_file = "data/user.json";
                $current_data = file_get_contents($json_file);
                $json_decode = json_decode($current_data,true);
                if(!empty($json_decode)){
                    foreach($json_decode as $value){
                        if($value['usr_id']==$_GET['usr_id_no']){
     ?>
    

    <h3>Edit User</h3>
    <span id="up_usr_er_msg" class="text-danger"></span>
    <form>
        <div class="form-group">
            <input id="up_usr_id" type="hidden" value="<?php echo $value['usr_id'];?>">
            <input id="index_id" type="hidden" value="<?php echo $index;?>">
            <label for="up_usr_email">Email</label>
            <input required type="text" class="form-control" id="up_usr_email" value="<?php echo $value['usr_email'];?>">
        </div>
        <div class="form-group">
            <label for="up_usr_pwd">Password</label>
            <input required type="text" class="form-control" id="up_usr_pwd" value="<?php echo $value['usr_password'];?>">
        </div>
        <button id="update_usr_data" type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
            
    <?php
        } } } } }
        ?>