<?php
session_start();
ob_start();
  require_once 'include/db.php'; 
	if(isset($_POST) && !empty($_FILES['video']['name'])){
        $video_name = $_FILES["video"]['name'];   
        $videoname_after_explod = explode(".",$video_name); 
        $video_extention = end($videoname_after_explod); 
        $accepted_extention_video =['mp4','avi'];
            if(!in_array($video_extention,$accepted_extention_video)){
                $_SESSION['non_valid_photo_for_feed_video'] = "Cannot upload this video ";
                header('location: vlog.php');   
            }    
        $video_new_name =time().".".$video_extention; 
        $video_temp_name = $_FILES['video']['tmp_name'];
        $video_destination = "video/".$video_new_name;
        move_uploaded_file($video_temp_name,$video_destination);
        
            $chat = $_POST['chat'];
            $phone = $_SESSION['phone'];
    
        // require_once 'include/db.php'; 
        $sql = "INSERT INTO hook_video(id,video,chat,phone,date_video) VALUES (NULL,'$video_new_name','$chat','$phone',NOW())"; 
        $result = mysqli_query($connect, $sql);
        header ('Location: vlog.php');
        ob_end_flush();

	}else{
		
	}
?>


