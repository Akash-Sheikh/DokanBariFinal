

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css'><link rel="stylesheet" href="css/AdminLogin.css">

</head>
<body>
<!-- partial:index.partial.html -->
<main>

   <br>
<br>
<br>
      <div class="container">
        <!--
        <h5 class="align-center header">
           Please login
        </h5>
        -->
        
        <div class="center-align">
        <div class="card login hoverable">
          <div class="card-image">
            <img src="ImageSrc/logo.png" class="responsive-img">
          
          </div>

          <div class="card-action">
            <h5>Admin Login</h5> 
          </div>
          <div class="card-content">
          
          <form class="col s12" action="AdminLoginPhpCode.php" method="POST">
            <div class="row">
              <div class="input-field col s12">
                <input type="email" name="email" id="email" class="validate" placeholder="Enter your email" required="">
    
              </div>
 
              <div class="input-field col s12">
                <input type="password" name="password" id="password" class="validate" placeholder="Enter your password" required="">
    
              </div>
            </div>

    

            <div class="row">
              <div class="left-align">
          <input type="checkbox" id="test5">
          <label for="test5">Remember Me</label>
        </div>
            </div>


              <div class="row center-align">
                <button type="submit" name="submit" class="col s12 btn btn-large waves-effect green">Login</button>
              </div>

          </form>
        </div>
          </div>

        </div>
        
      </div>

 
  </main>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.1.1.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js'></script>
</body>
</html>





 <?php
                if(isset($_GET["status"]))
                  {
                    if($_GET["status"]=="NotOk")
                        {
                            echo "<div id='status' style='color:#F44336'>
                            <label>email or password are wrong</label>
                            </div>";
                        }
                  }
                               
            ?> 



<?php include 'inc/footer.php';?>



