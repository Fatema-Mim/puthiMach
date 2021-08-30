<?php
    $id = $_GET['id'];
    require_once 'include/db.php'; 
    $query = "SELECT status FROM date_reg WHERE id=$id";
    $row = mysqli_query($connect,$query);
    $result = mysqli_fetch_array($row);
    if($result['status']==0){
        require_once 'include/db.php';
        $update_query ="UPDATE date_reg SET status = '2' WHERE id = $id";    
       mysqli_query($connect,$update_query);
        header('location: feed.php');

    }



?>