<?php
	
	include_once 'Crud.php';
	
	$crud = new Crud();
	
	if(isset($_POST['submit_btn'])){
		$User_name = $_POST['User_name'];
		$Address = $_POST['Address'];
		$Phone_number = $_POST['Phone_number'];
		$Age = $_POST['Age'];
		$Email = $_POST['Email'];
		$Password = md5($_POST['Password']);
		$picture = time().'_'.$_FILES['picture']['name'];
        $Status = "false";
		
		$result = $crud->execute("INSERT into manager_info(user_name,address,phone_number,age,email,password,status,picture) VALUES('$User_name','$Address','$Phone_number','$Age','$Email','$Password','$Status','$picture')");
		
		if($result){
				$target = 'Manager_images/' . $picture;
	            move_uploaded_file($_FILES['picture']['tmp_name'], $target);
				echo "success";	
			}
			//header("location:addmanager.php?status=ok");
		}
		
		else{
			echo "Insertion Problem!";
		}
	
?>