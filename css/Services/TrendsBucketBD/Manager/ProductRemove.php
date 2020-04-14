<?php
    header("Access-Control-Allow-Origin: *"); /*sir Question*/

    include_once 'Crud.php';

    $crud = new Crud();

    $query = "Select * from produc_table order by p_id DESC";

    $result = $crud->getData($query);
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .edit {
      border: none;
      color:  #006837;
      padding: 2px 6px;
      font-size: 16px;
      cursor: pointer;
    }

    /* Darker background on mouse-over */
    .edit:hover {
      background-color: #006837;
      color: white;
    }
    .delete {
      border: none;
      color: #c1272d;
      padding: 2px 6px;
      font-size: 16px;
      cursor: pointer;
    }

    /* Darker background on mouse-over */
    .delete:hover {
      background-color: #c1272d;
      color: white;
    }
</style>


        <table class="table table-bordered table-white table-sm">
                <thead class="bg" style="background-color: #292c2f;">
                    <tr>
                        <th scope="col" style="color: white">ID</th>
                        <th scope="col" style="color: white">Name</th>
                        <th scope="col" style="color: white">Category</th>
                        <th scope="col" style="color: white">Description</th>
                        <th scope="col" style="color: white">Price</th>
                        <th scope="col" style="color: white">Size</th>
                        <th scope="col" style="color: white">Images</th>
                        <th scope="col" style="color: white"></th>
                        <th scope="col" style="color: white"></th>
                        <th scope="col" style="color: white"></th>
                        <th scope="col" style="color: white">Action</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                             foreach($result as $key=>$res){
                                echo "<tr >";
                                    echo "<td>".$res['p_id']."</td>";
                                    echo "<td>".$res['p_name']."</td>";
                                    echo "<td>".$res['category']."</td>";
                                    echo "<td>".$res['description']."</td>";
                                    echo "<td>".$res['price']."</td>";
                                    echo "<td>".$res['size']."</td>";
                                    echo "<td><img width='30px' src='".$res['img_1']."'/></td>";
                                    echo "<td><img width='30px' src='".$res['img_2']."'/></td>";                                      
                                    echo "<td><img width='30px' src='".$res['img_3']."'/></td>";   
                                    echo "<td><img width='30px' src='".$res['img_4']."'/></td>";   
                                    echo "<td><button id=".$res['p_id']." class='btn delete'><i class='fa fa-trash'></i></button></td>";                     
                                echo "</tr>";
                                }
                        ?>
                </tbody>
        </table>


<script type="text/javascript">
    $(document).ready(function(){
        
        $('.delete').click(function(){
            var p_id = $(this).attr('id');
            
            $.ajax({
                url:"ProductDelete.php",
                type:"POST",
                data: {p_id:p_id},
                success: function(data){
                    //alert(data);
                    if(data==1){
                        $.get('ProductView.php',function(data){
                          $('#P_data-show').html(data);
                        })
                    }
                    else
                    {
                     alert(data);   
                    }
                }
            });
        });
        
        
        
    });
</script>


