<?php
/*
    session_start();
    if(!isset($_SESSION['c_email']))
    {
        header("location:login.php");
    }
    else {
    $now = time(); // Checking the time now when home page starts.

    if ($now > $_SESSION['c_expire']) {
        session_destroy();
        //header("location:ManagerLogin.php");
    }
    }
    header("Access-Control-Allow-Origin: *"); /*sir Question
*/
?>


<?php include 'inc/header.php';?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea,input[type=email],input[type=password] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 30px;
  background-color: #f2f2f2;
  padding: 60px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
 <center>
<body>
   

<h2>Add Manager</h2>


<div class="container">
  <form action="AddManager_crud.php" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">User Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="User_name" placeholder="User name" required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="fname">Picture</label>
      </div>
      <div class="col-75">
        <input type="file" name="picture" placeholder="Picture" required>
      </div>
    </div>    

<div class="row">
      <div class="col-25">
        <label for="subject">Address</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="Address" placeholder="Address"  style="height:100px" required></textarea>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Phone</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="Phone_number" placeholder="Phone number"required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Age</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="Age" placeholder="Age" required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Email</label>
      </div>
      <div class="col-75">
        <input type="email" id="lname" name="Email" placeholder="Email" required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="lname" name="Password" placeholder="Password" required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Confirm Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="lname" name="CPassword" placeholder="Confirm password" required>
      </div>
    </div>
   <br>
   <br>
    <div class="row">
      <input type="submit" name="submit_btn" value="ADD">
    </div>
  </form>
</div>

</body>

</center>
</html>







<?php include 'inc/footer.php';?>