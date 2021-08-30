<?php 
    // die('OK');
    session_start();
            if(isset($_POST['submit'])){
                $phone = $_POST['hello'];                       
                $follower = $_SESSION['phone'];
                // die();
                require_once 'include/db.php';
                $sql ="SELECT * FROM followers WHERE user ='$phone' AND follower = '$follower' Limite 1 ";
                $result = $connect -> query($sql);
                if($result -> num_rows>0){
                    
                }
                else{
                $insert_query = "INSERT INTO followers(user,follower,status) VALUES ('$phone','$follower',1)";
                $result = mysqli_query($connect,$insert_query);
                header('location: index.php');
                ob_end_flush();                       
            }
            }
            //  else{
            // header('location: login.php');
            // }
    ?>