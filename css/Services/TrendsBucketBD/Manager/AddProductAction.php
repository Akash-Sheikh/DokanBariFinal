<?php
	
	include_once 'Crud.php';
	
	$crud = new Crud();
	
     if(isset($_POST['submit'])){
		$product_name = $_POST['product_name'];
		$category = $_POST['category'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$size = $_POST['size'];
		$img_1 = time().'_'.$_FILES['img_1']['name'];
		$img_2 = time().'_'.$_FILES['img_2']['name'];
		$img_3 = time().'_'.$_FILES['img_3']['name'];
		$img_4 = time().'_'.$_FILES['img_4']['name'];
		$status = "false";
		
		$result = $crud->execute("INSERT INTO produc_table(p_name,category,description,price,size,img_1,img_2,img_3,img_4,status) VALUES ('$product_name','$category','$description','$price','$size','$img_1','$img_2','$img_3','$img_4','$status')");
		
		if($result){
				$target = 'Product_images/' . $img_1;
	            move_uploaded_file($_FILES['img_1']['tmp_name'], $target);
				$target = 'Product_images/' . $img_2;
	            move_uploaded_file($_FILES['img_2']['tmp_name'], $target);
				$target = 'Product_images/' . $img_3;
	            move_uploaded_file($_FILES['img_3']['tmp_name'], $target);
				$target = 'Product_images/' . $img_4;
	            move_uploaded_file($_FILES['img_4']['tmp_name'], $target);	            	            	           
				header("location:AddProduct.php");		
			}
		}
		else{
			echo "problem";
		}
		
?>