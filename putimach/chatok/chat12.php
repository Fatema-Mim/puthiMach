<?php
session_start();
ob_start();
include("db.php");
include("links.php");
include("nav.php");
$phone = $_SESSION['phone'];

if(isset($_GET["nameid"]))
{
	$_SESSION["nameid"] = $_GET["nameid"];
	header("location: chatbox.php");
	ob_end_flush();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <div class="modal-dialog">
    	<div class="modal-content">
    		<div class="modal-header">
    			<h4>Confirm Your Account to go Chatok</h4>
    		</div>
    		<div class="modal-body">
    			<ol>
    			<?php
                      $registration = mysqli_query($connect, "SELECT * FROM registration where phone='$phone' ");
                    //   or die("Failed to query database".mysql_error());
                      while($name = mysqli_fetch_assoc($registration ))
                      {
                      	echo '<li> 
                             <a href="chat12.php?nameid='.$name["id"].'">'.$name["name"].'</a>
                      	</li>
                      	';
                      }
    			 ?>
    			</ol>
    			<!--<a href="registerUser.php" style="float:right;">Register here.</a>-->
    		</div>
    	</div>
    </div>
</body>
</html>
