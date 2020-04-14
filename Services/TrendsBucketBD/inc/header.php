
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>DragonFoods</title>
          
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- All CSS -->
      <!--   <link rel="stylesheet" href="css/Page.css"> -->
        <!-- NavBar CSS -->
     <!--    <link rel="stylesheet" href="css/Navstyles.css">
        <link rel="stylesheet" href="css/footer.css"> -->

        <!-- Bootstrap CSS CDN --><!--
        <link rel="stylesheet" href="css/Navstyles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        -->
        <!-- Font Awesome JS --><!--
	    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        -->

          <!-- Bootstrap CSS CDN -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
           <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">


          <!-- Load an icon library -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <!--      <style type="text/css">
          	.dropdown-menu > a:hover {
               background-color: #343a40;
            }
          </style> -->
          <!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149922706-1"></script> -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149922706-1');
</script>

</head>

<body>

	<div id="header">
		<nav class="navbar navbar-default" role="navigation" style="background-color: white;">
	
			<a class="navbar-brand" href="index.php"><img href="index.php" style="width: 150px; height: 50px; margin-top: -10%;" src="ImageSrc/logo.png"></a>
		  <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="background-color: white;">
		    <span class="glyphicon glyphicon-align-justify" style="color: black;"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    <ul class="nav navbar-nav">
		      		      <li class="active">
		      	<?php if(isset($_SESSION['c_uname'])){echo "<a class='active'>Hi ";
		      	                                      echo $_SESSION['c_uname'];
		      	                                      echo "</a>";
		                                             }?>
		      </li>
		      
		      <li  class="active">
		      	<?php if(!isset($_SESSION['c_uname'])){echo "<a id='tabnav' class='nav-link' href='login.php' style='background-color:white;'>Log in</a>";}?> 
		      </li>
		      <li id="tabnav" class="active">
		      	<?php if(!isset($_SESSION['c_uname'])){echo "<a class='nav-link' href='register.php' style='background-color:white;'>Registration</a>";}?>
		      </li>
		      
		      <?php if(isset($_SESSION['c_uname'])){echo "
													      <li class='nav-item dropdown'>
													        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
													          My History 
													        </a>
													        <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink' style='color: #fff;background-color: #20211d;'>
													          <a class='dropdown-item' href='#' style='color: white'>Last Month</a>
													          <a class='dropdown-item' href='#' style='color: white'>All History</a>
													          <!--<a class='dropdown-item' href='exchangeHis.php' style='color: white'>Exchange history</a>-->
													        </div>
													      </li>
		                                            ";}?>

		      <li class="active">
		      	<?php if(isset($_SESSION['c_uname'])){echo "<a class='nav-link' href='LogOut.php' style='background-color:white;'>Log out</a>";}?>
		      </li> 
		    </ul>
		  </div>  
		</nav>
		<br>
	</div>
</body>

	