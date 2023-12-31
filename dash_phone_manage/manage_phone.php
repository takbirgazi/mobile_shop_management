<?php
// Data Delete Code Start
if(isset($_GET['sl'])){
$cnt = $_GET['sl'];
$sl = ((int)$cnt -1);
$sl_id = $_GET['slid'];

if(file_exists("data/data.json")){
    $json_file = "data/data.json";
    $json_data = file_get_contents($json_file);
    $decode_data = json_decode($json_data,true);
    foreach($decode_data as $value){
        if($value['serial_no'] == $sl_id){

            $id = "$sl";
            unset($decode_data[$id]);
            $json_array = array_values($decode_data);
            $json_encode = json_encode($json_array, JSON_PRETTY_PRINT);
            if(file_put_contents($json_file,$json_encode)){
                echo "Data has been deleted!";
            }else{
                echo "Data has been not deleted!";
            }
     }
    }
}
}
// Data Delete code End
?>

    <main id="main" class="mx-2">
        <section>
            <div class="headline">
                <h4 class="py-2">Manage Phone Details</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered text-white mb-5">
                    <thead class="thead">
                      <tr class="text-center" >
                        <th scope="col">S/L</th>
                        <th scope="col">Name</th>
                        <th scope="col">Model</th>
                        <th scope="col">RP</th>
                        <th scope="col">MRP</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <?php   
                           if(file_exists('data/data.json')){
                            $curren_data= file_get_contents('data/data.json');
                            $json_decode= json_decode($curren_data,true);
                            if(!empty($json_decode)){
                                $index =1;
                                foreach($json_decode as $value){

                          ?>
                          <tbody>
                          <tr>
                            <th scope="row"> <?php echo $index;?> </th>
                            <td> <?php echo ($value['brand_name']);?> </td>
                            <td> <?php echo ($value['model_no']);?> </td>
                            <td> <?php echo ($value['retail_price']);?> </td>
                            <td> <?php echo ($value['customar_price']);?> </td>
                            <td> <?php echo ($value['category']);?> </td>
                            <td class="d-flex"><a class="btn btn-success" href="?id=manage_phone&cat=edit_phn&slid=<?php echo $value['serial_no'];?>&sl=<?php echo $index;?>">Edit</a> &nbsp; &nbsp; <a id="dlt_phn_clk" class="btn btn-danger" href="?id=manage_phone&cat=dlt_phn&slid=<?php echo $value['serial_no'];?>&sl=<?php echo $index;?>">Delete</a></td>
                          </tr>
                        </tbody>


                      <?php 
                          // S/N 
                          $index ++;

                          }

                        }else{
                          echo"<p>No Data Found!</p>";
                          }
                        }

                      ?>      
                  </table>
            </div>
        </section>

    </main>
