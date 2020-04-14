
<?php

	include_once 'Crud.php';
	
	$crud = new Crud();
	
	
		$id = $_POST['id'];
		$user_name = $_POST['user_name'];
		$address = $_POST['address'];
		$phone_number = $_POST['phone_number'];
		$age = $_POST['age'];
		$email = $_POST['email'];
		
		$result = $crud->execute("UPDATE manager_info SET user_name = '$user_name', address = '$address', phone_number = '$phone_number', age = '$age', email = '$email'  WHERE id = '$id'");
		
		if($result){
			echo true;
		}else{
			echo false;
		}	
	
?>