<?php
 session_start();
 include("db.php");

 $fromUser = $_POST["fromUser"];
 $toUser = $_POST["toUser"];
 $message = $_POST["message"];

 //echo $fromUser." ".$toUser ." ".$message;

//var_dump($fromUser);exit;
 $output="";

  $sql = "INSERT INTO messages (FromUser,ToUser,Message) VALUES ('$fromUser','$toUser','$message')";
 
//  $sql "INSERT INTO messages(FromUser,ToUser,Message) VALUES (1,1,'hi')";
 if($connect -> query($sql))
 {
	$output.="Data save successfully...";
 }
 else
 {
 	$output.="Error. Please Try Agane";
}
echo $output;

//messenger e call deo

?>

