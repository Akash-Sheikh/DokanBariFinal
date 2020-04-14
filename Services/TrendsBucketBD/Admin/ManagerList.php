

<?php include 'inc/header.php';?>


<style type="text/css">



</style>
    
    <div id="body" style=" ">
        <br>

            <div class="card" style="margin-left: 10px; margin-right: 10px; background: #ffffff;"> 
              <div class="card-header">
                <h5 style="color: black; font-weight: bold">Manager List</h5>
              </div>
              <div class="card-body" >
           
                  <script type="text/javascript">
                        $(document).ready(function(){
                    
                                $.get('ManagerView.php',function(data){
                                $('#data-show').html(data);
                                })

                          })
                  </script>
           
     
                <div id="edit-form"></div>
                <div style="overflow-x:auto;" id="data-show"></div>      

              </div>
            </div><br>

    </div>



<?php include 'inc/footer.php';?>
