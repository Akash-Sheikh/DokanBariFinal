
<?php

	include_once 'Crud.php';
	
	$crud = new Crud();
	
	
		$p_id = $_POST['p_id'];
		
		$product_name = $_POST['product_name'];
		$category = $_POST['category'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$size = $_POST['size'];
		$img_1 = $_POST['img_1'];
		$img_2 = $_POST['img_2'];
		$img_3 = $_POST['img_3'];
		$img_4 = $_POST['img_4'];
		
		$result = $crud->execute("Update produc_table SET p_name='$product_name',category='$category',description='$description',price='$price',size='$size',img_1='$img_1',img_2='$img_2',img_3='$img_3',img_4='$img_4' where p_id=$p_id");
		
		if($result){
			echo true;
		}else{
			echo false;
		}	
	
?>