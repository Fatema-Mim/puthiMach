<?php
session_start();
ob_start();
  require_once 'include/db.php'; 
	if(isset($_POST) && !empty($_FILES['image']['name'])){

		$img1 = $_FILES["image"]['name'];
		$name_after_explod = explode(".",$img1);
		 $extention = end($name_after_explod);
		 $accepted_extention = ['png','jpg','jpge'];

		if(!in_array($extention,$accepted_extention)){
			$_SESSION['non_valid_photo_for_feed']="Cannot upload this photo ";
			header('location: index.php');
			die();
		}

		$image_new_name = time().".".$extention;
		$temp_location =$_FILES["image"]["tmp_name"];
		$destination = "images/".$image_new_name;
		move_uploaded_file($temp_location,$destination);


		$chat = $_POST['chat'];
		$phone = $_SESSION['phone'];
            $sql="INSERT INTO hook_image(id,image1,chat,phone,date_image) VALUES (NULL,'$image_new_name','$chat','$phone',NOW())";
            mysqli_query($connect,$sql);
			header ('Location: index.php');
			ob_end_flush();

	}else{
		$chat = $_POST['chat'];
		$phone = $_SESSION['phone'];
		require_once 'include/db.php'; 
		$sql = "INSERT INTO hook_image (chat,phone,date_image) VALUES('$chat','$phone',NOW())";
		$result = mysqli_query($connect, $sql);
	   
		header ('Location: index.php');
		// ob_end_flush();

	}
?>
