
<main id="main" class="mx-2">
        <?php include_once("manage_phone_head.php");?>
        <section>
            <div class="headline">
                <h4 class="py-2">Search: <?php echo $_GET['mmdl'];?></h4>
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
$json_decode = json_decode($curren_data,true);                           
if(!empty($json_decode)){
  $index = 1;
    foreach($json_decode as $value){
  // if($value['model_no']== 'Camon 20'){
  $my_model_data = $value['model_no'];
  $mydata = $_GET['mmdl'];
  if(strstr(strtolower($my_model_data),strtolower($mydata))){
?>
                    <tbody>
                      <tr>
                        <th scope="row"> <?php echo $index;?> </th>
                        <td> <?php echo ($value['brand_name']);?> </td>
                        <td> <?php echo ($value['model_no']);?> </td>
                        <td> <?php echo ($value['retail_price']);?> </td>
                        <td> <?php echo ($value['customar_price']);?> </td>
                        <td> <?php echo ($value['category']);?> </td>
                        <td><a href="?id=manage_phone&cat=edit_phn">Edit</a> &nbsp; &nbsp; <a href="#">Delete</a></td>
                      </tr>
                    </tbody>

              <?php 
              // S/N 
              $index ++;
              }
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