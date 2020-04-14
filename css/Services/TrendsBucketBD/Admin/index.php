<?php

    session_start();  
    if(!isset($_SESSION['email']))
    {
        header("location:AdminLogin.php");
    }
    else {
    $now = time(); // Checking the time now when home page starts.

    if ($now > $_SESSION['expire']) {
        session_destroy();
        //header("location:ManagerLogin.php");
    }
    }

?>
<?php include 'inc/header.php';?>


        <div class="container"> 
          <div class="card-header">
            <h5 style="color: black; font-weight: bold;">Dashboard !</h5>
          </div>
        
          <center>
          <div class="row my-3">
        <div class="col-md-3" style="padding: 10px;">
            <div class="card text-center h-100" style="background-color: #007bff">
                <div class="card-block">
                    <h5 class="card-title" style="color: white; padding-top: 19px;">Total Customers</h5>
                    <h2><i class="fa fa-users fa-2x" style="color: white;"></i></h2>
                </div>
                <div class="row px-2 no-gutters">
                    <div class="col">
                        <h3 style="color: white;">0</h3>
                    </div>
                </div>
            </div>
        </div>
         <div class="col-md-3" style="padding: 10px;">
            <div class="card text-center h-100" style="background-color: #c30">
                <div class="card-block">
                    <h5 class="card-title" style="color: white; padding-top: 19px;">Total Vendors</h5>
                    <h2><i class="fa fa-users fa-2x" style="color: white;"></i></h2>
                </div>
                <div class="row px-2 no-gutters">
                    <div class="col">
                        <h3 style="color: white;">0</h3>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="col-md-3" style="padding: 10px;">
            <div class="card text-center h-100" style="background-color: #17a2b8">
                <div class="card-block">
                    <h5 class="card-title" style="color: white; padding-top: 19px;">Total Products</h5>
                    <h2><i class="fa fa-product-hunt fa-2x" style="color: white;"></i></h2>
                </div>
                <div class="row px-2 no-gutters">
                    <div class="col">
                        <h3 style="color: white;">0</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="padding: 10px;">
            <div class="card text-center h-100" style="background-color: #27a243">
                <div class="card-block">
                    <h5 class="card-title" style="color: white; padding-top: 19px;">Currently Ordered</h5>
                    <h2><i class="fa fa-shopping-bag fa-2x" style="color: white;"></i></h2>
                </div>
                <div class="row px-2 no-gutters">
                    <div class="col">
                        <h3 style="color: white;">0</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="padding: 10px;">
            <div class="card text-center h-100" style="background-color: #d53343">
                <div class="card-block">
                    <h5 class="card-title" style="color: white; padding-top: 19px;">Order Cancelled</h5>
                    <h2><i class="fa fa-remove fa-2x" style="color: white;"></i></h2>
                </div>
                <div class="row px-2 no-gutters">
                    <div class="col">
                        <h3 style="color: white;">0</h3>
                    </div>
                </div>
            </div>
        </div>
   
    </div>
</div>
        </center>



<?php include 'inc/footer.php';?>