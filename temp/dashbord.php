<?php 
// User Delete Code Start
if(isset($_GET['usr_id_no'])){
    $usr_id = $_GET['usr_id_no'];
    $sl = $_GET['index'];

    if(file_exists("data/user.json")){
        $json_file = "data/user.json";
        $json_data = file_get_contents($json_file);
        $decode_data = json_decode($json_data,true);
        foreach($decode_data as $value){
            if($value['usr_id'] == $usr_id){
                $id = "$sl";
                unset($decode_data[$id]);
                $json_encode = json_encode($decode_data,JSON_PRETTY_PRINT);
                if(file_put_contents($json_file,$json_encode)){
                    echo "User Data Is Deleted!";
                }else{
                    echo "User Data Is Not Deleted!";
                }
         }
        }
    }
}
// User Delete Code End
?>
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
                <div class="card mb-2">
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
                <div class="card mb-2" >
                <div class="card-body">
                    <p class="card-text">Role: <b><?php echo ($value['usr_role']);?></b></p>
                    <p class="card-text">Email: <i><?php echo ($value['usr_email']);?></i></p>
                    <p class="card-text">Password: <i><?php echo ($value['usr_password']);?></i></p>
                    <a href="?id=edit_usr&usr_id_no=<?php echo ($value['usr_id']);?>&index=<?php echo $index;?>" class="card-link btn btn-success">Edit</a>
                    <a id="usr_dlt_clk" href="?id=dlt_usr&usr_id_no=<?php echo ($value['usr_id']);?>&index=<?php echo $index;?>" class="card-link btn btn-danger">Delete</a>
                </div>
            </div>

            <?php
            }
        }}}
    ?>

    </div>
  <hr/>
    <h3 class="mt-5">Add New User</h3>
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