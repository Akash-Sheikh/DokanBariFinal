<?php
    header("Access-Control-Allow-Origin: *"); /*sir Question*/

    include_once 'Crud.php';

    $crud = new Crud();

    $query = "CALL MANAGER_READ()";

    $result = $crud->getData($query);
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 

<style>
    .edit {
     
      border: none;
      color: #3e3210;
      padding: 2px 6px;
      font-size: 16px;
      cursor: pointer;
    }

    /* Darker background on mouse-over */
    .edit:hover {
      background-color: #3e3210;
      color: white;
    }
    .active {
     
      border: none;
      color: #28a745;
      padding: 2px 6px;
      font-size: 16px;
      cursor: pointer;
    }

    /* Darker background on mouse-over */
    .active:hover {
      background-color: #28a745;
      color: white;
    }
    .deactive {
      border: none;
      color: #c1272d;
      padding: 2px 6px;
      font-size: 16px;
      cursor: pointer;
    }

    /* Darker background on mouse-over */
    .deactive:hover {
      background-color: #c1272d;
      color: white;
    }   

    .view {
      border: none;
      color: #004085;
      padding: 2px 6px;
      font-size: 16px;
      cursor: pointer;
    }

    /* Darker background on mouse-over */
    .view:hover {
      background-color: #004085;
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
                        <th scope="col" style="color: white">Edit</th>
                         <th scope="col" style="color: white">View</th>
                        <th scope="col" style="color: white">Status</th>
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
                                    $status = $res['status'];
                                    echo "<td><button id=".$res['id']." class='btn edit'><i class='fa fa-edit'></i></button></td>";
                                    echo "<td><button id=".$res['id']." class='btn view'><i class='fa fa-user-circle-o'></i></button></td>";
                                    if ($status != "false"){
                                           echo "<td><button id=".$res['id']." class='btn active'><i class='fa fa-check'></i></button></td>";  
                                        } 
                                    else {
                                           echo "<td><button id=".$res['id']." class='btn deactive'><i class='fa fa-ban'></i></button></td>";
                                        }                            
                                echo "</tr>";
                                }
                        ?>
                </tbody>
        </table>


<script type="text/javascript">
    $(document).ready(function(){
        
        $('.edit').click(function(){
            var id = $(this).attr('id');
            //alert(cat_id);
            $.ajax({
                url:"ManagerEdit.php",
                type:"POST",
                data: {id:id},
                success: function(data){
                    $('html,body').animate({scrollTop:0}, 'slow', function(){
                        $('#edit-form').slideDown();
                        $('#edit-form').html(data);
                    })
                }
            });
        });
        
         $('.active').click(function(){
            var id = $(this).attr('id');
            alert("Account Blocked");
            $.ajax({
                url:"ManagerActive.php",
                type:"POST",
                data: {id:id},
                success: function(data){
                    //alert(data);
                    if(data==1){
                        $.get('ManagerView.php',function(data){
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

         $('.deactive').click(function(){
            var id = $(this).attr('id');
            alert("Account Activated");
            $.ajax({
                url:"ManagerDeactive.php",
                type:"POST",
                data: {id:id},
                success: function(data){
                    //alert(data);
                    if(data==1){
                        $.get('ManagerView.php',function(data){
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
        
        
    });
</script>


