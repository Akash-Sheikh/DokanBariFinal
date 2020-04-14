<?php
    header("Access-Control-Allow-Origin: *"); /*sir Question*/

    include_once 'Crud.php';

    $crud = new Crud();

    $query = "CALL MANAGER_READ()";

    $result = $crud->getData($query);
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 

<style>
   
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
                        <th scope="col" style="color: white">User Name</th>
                        <th scope="col" style="color: white">Address</th>
                        <th scope="col" style="color: white">Phone</th>
                        <th scope="col" style="color: white">Age</th>
                        <th scope="col" style="color: white">Email</th>
                        <th scope="col" style="color: white">Remove</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                             foreach($result as $key=>$res){
                                echo "<tr >";
                                    echo "<td>".$res['id']."</td>";
                                    echo "<td>".$res['user_name']."</td>";
                                    echo "<td>".$res['address']."</td>";                                 
                                    echo "<td>".$res['phone_number']."</td>";
                                    echo "<td>".$res['age']."</td>";
                                    echo "<td>".$res['email']."</td>";
                                    echo "<td><button id=".$res['id']." class='btn delete'><i class='fa fa-trash'></i></button></td>";                     
                                echo "</tr>";
                                }
                        ?>
                </tbody>
        </table>


<script type="text/javascript">
  
        
        $('.delete').click(function(){
            var id = $(this).attr('id');
            
            $.ajax({
                url:"ManagerDelete.php",
                type:"POST",
                data: {id:id},
                success: function(data){
                    //alert(data);
                    if(data==1){
                        $.get('ManagerDeleteView.php',function(data){
                          $('#data-show').html(data);
                        })
                    }
                    else
                    {
                     alert(data);   
                    }
                }
            });
        });
        
        

</script>


