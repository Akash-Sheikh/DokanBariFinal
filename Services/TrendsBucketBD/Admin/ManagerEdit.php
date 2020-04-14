<?php
	include_once 'Crud.php';
	
	$crud = new Crud();
	
	$id = $_POST['id'];
	//echo $id ;
	$query = "select * from manager_info where id=$id";
	
	$result = $crud->getData($query);
	
	foreach($result as $res){
		$id = $res['id'];
		$user_name = $res['user_name'];
		$address = $res['address'];
		$phone_number = $res['phone_number'];
		$age = $res['age'];
		$email = $res['email'];
	}
?>


	<input type="text" id="man_id" name="id" hidden value="<?php echo $id;?>"/>
	<div class="row mb-3">
		<div class="col-sm-4">
			<input type="text" id="man_name" class="form-control" name="user_name" value="<?php echo $user_name;?>"/><br>
			<input type="text" id="man_address" class="form-control" name="address" value="<?php echo $address;?>"/><br>
			<input type="text" id="man_phone" class="form-control" name="phone_number" value="<?php echo $phone_number;?>"/><br>
			<input type="text" id="man_age" class="form-control" name="age" value="<?php echo $age;?>"/><br>
			<input type="text" id="man_email" class="form-control" name="email" value="<?php echo $email;?>"/><br>
			<input class='btn btn-success' type="button" id="update" name="update" value="Update"/>
			<input class='btn btn-danger' type="button" onclick="$('#edit-form').slideUp();" name="cancel" value="Cancel"/>
		</div>
	</div>	
	
	
	

<script type="text/javascript">
	$(document).ready(function(){
		
		$('#update').click(function(){
			var id = $('#man_id').val();
			var user_name = $('#man_name').val();
			var address = $('#man_address').val();
			var phone_number = $('#man_phone').val();
			var age = $('#man_age').val();
			var email = $('#man_email').val();
		
			$.ajax({
				url:"ManagerEditAction.php",
				type:"POST",
				data: {id:id,user_name:user_name,address:address,phone_number:phone_number,age:age,email:email},
				success: function(data){
					
					if(data==1){
						
					    $('#id').val('');
						$('#user_name').val('');
						$('#address').val('');
						$('#phone_number').val('');
						$('#age').val('');
						$('#email').val('');
						$('#edit-form').slideUp();
						$.get('ManagerView.php',function(data){
						  $('#data-show').html(data);
						})
					}
					else{
					alert("Problem");					
					}
				}
			});
		});
		
		
		
	});
</script>