<?php
// Header File Include
include_once("temp/header.php");
?>
    <main id="main" class="mx-2">
      <?php include_once("temp/phone_list_head.php");?>
        <section>
            <div class="headline">
                <h4 class="py-2">My Phone List</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered text-white mb-5">
                    <thead class="thead">
                      <tr class="text-center" >
                        <th scope="col">S/L</th>
                        <th scope="col">Name</th>
                        <th scope="col">Model</th>
                        <th scope="col">RP</th>
                        <th scope="col">CP</th>
                        <th scope="col">Category</th>
                      </tr>
                    </thead>
                    <tbody>

                        <?php   
                           if(file_exists('data/data.json')){
                            $curren_data= file_get_contents('data/data.json');
                            if(!empty( $json_decode= json_decode($curren_data,true))){
                                foreach($json_decode as $value){

                          ?>
                              <tr>
                                <th scope="row"> <?php echo ($value['serial_no']);?> </th>
                                <td> <?php echo ($value['brand_name']);?> </td>
                                <td> <?php echo ($value['model_no']);?> </td>
                                <td> <?php echo ($value['retail_price']);?> </td>
                                <td> <?php echo ($value['customar_price']);?> </td>
                                <td> <?php echo ($value['category']);?> </td>
                              </tr>

                      <?php 
                          }}else{
                          echo"<p>No Data Found!</p>";
                          }
                        }
                      
                      ?>
            
                    </tbody>
                  </table>
            </div>
        </section>

    </main>
<?php
// Footer File Include
include_once("temp/footer.php");
?>