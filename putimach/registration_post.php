<?php
session_start();
if(isset($_POST['sign_up'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $img1 = $_FILES["image1"]['name'];
    $name_after_explod = explode(".",$img1);
    $extention = end($name_after_explod);
    $accepted_extention = ['png','jpg','jpge'];

        if(!in_array($extention,$accepted_extention)){
            $_SESSION['non_valid_photo']="Cannot upload this photo ";
            header('location: index.php');
            // echo "naaaaaaaa";
            die();
        }

    $image_new_name = $phone.".".$extention;
    $temp_location =$_FILES["image1"]["tmp_name"];
    $destination = "image/".$image_new_name;
    move_uploaded_file($temp_location,$destination);
    // die();
    //        $file_name = $img1['tmp_name'];
    //        $image = $img1['name'];
    //        move_uploaded_file($file_name, "images/".$image);
   
    $birthday = $_POST['birthday'];
    $passworda = $_POST['passworda'];
    $confirm_password = $_POST['confirm_password'];
    $gender = $_POST['gender'];
   
    if($passworda==$confirm_password){
        require_once 'include/db.php';
        $count_query= "SELECT COUNT(*) AS total FROM registration WHERE phone = '$phone'";
        $form_db = mysqli_query($connect,$count_query);
         $after_assoc = mysqli_fetch_assoc($form_db);
             if($after_assoc['total'] == 0){
                $count_query1="SELECT COUNT(*) AS total1 FROM registration WHERE username = '$username'";
                $form_db1=mysqli_query($connect,$count_query1);
                $after_assoc1=mysqli_fetch_assoc( $form_db1);
                    if($after_assoc1['total1']==0){
                        require_once 'include/db.php';
                        $insert = "INSERT INTO registration VALUES (NULL,'$name','$username','$phone','$image_new_name','$birthday','$passworda',0,'$gender',NOW())"; 
                        $quert= mysqli_query($connect,$insert);
                        $_SESSION['phone']=$phone;
                        header('location: index.php');
                    }else{
                        $_SESSION['duplicat_user']="This User name already resister!!";
                        header('location: registration.php'); 
                    }       
             }else{
                $_SESSION['duplicat_phone']="This phone number already resister!!";
                header('location: registration.php');
             }
       
    }else{
        header('location: registration.php');
    }
}


?>