
<div class="my-3 mb-5 add_phone_form">
    <div class="dash_add_usr my-3">
            <h3>My Users</h3>

<?php   
    // User And Admin Data Showing
    if(file_exists('data/user.json')){
    $curren_data= file_get_contents('data/user.json');
    $json_decode= json_decode($curren_data,true);
    if(!empty($json_decode)){
        $index = -1;
        foreach($json_decode as $value){
            $index++;
            if($value['usr_role'] == "Admin"){

                ?>
                <!-- When Its Admin  -->
                <div class="card mb-2" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">Role: <b><?php echo ($value['usr_role']);?></b></p>
                    <p class="card-text">Email: <i><?php echo ($value['usr_email']);?></i></p>
                    <p class="card-text">Password: <i><?php echo ($value['usr_password']);?></i></p>
                </div>
            </div>

        <?php
            }else{
                ?>
                <!-- When Its General User  -->
                <div class="card mb-2" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">Role: <b><?php echo ($value['usr_role']);?></b></p>
                    <p class="card-text">Email: <i><?php echo ($value['usr_email']);?></i></p>
                    <p class="card-text">Password: <i><?php echo ($value['usr_password']);?></i></p>
                    <a href="?id=edit_usr&usr_id_no=<?php echo ($value['usr_id']);?>&index=<?php echo $index;?>" class="card-link text-success">Edit</a>
                    <a href="#" class="card-link text-danger">Delete</a>
                </div>
            </div>

            <?php
            }
        }}}
    ?>

    </div>
    <h3>Add New User</h3>
    <span id="usr_er_msg" class="text-danger"></span>
    <form id="ad_usr_phone_cnt_frm">
        <div class="form-group">
            <label for="add_usr_email">Email</label>
            <input required type="text" class="form-control" id="add_usr_email" placeholder="Write User Email">
        </div>
        <div class="form-group">
            <label for="add_usr_pwd">Password</label>
            <input required type="text" class="form-control" id="add_usr_pwd" placeholder="Write User Password">
        </div>
        <div class="form-group">
            <label for="add_usr_cp_pwd">Confirm Password</label>
            <input required type="text" class="form-control" id="add_usr_cp_pwd" placeholder="Write User Confirm Password">
        </div>
        <button id="add_usr_data" type="submit" class="btn btn-primary mt-3">Add User</button>
    </form>
</div>