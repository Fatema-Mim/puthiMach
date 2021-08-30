<?php
session_start();
include("db.php");
include("links.php");

if(isset($_GET["nameid"]))
{
	$_SESSION["nameid"] = $_GET["nameid"];
	header("location: chatbox.php");
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
    			<h4>Please Selict Your Accound</h4>
    		</div>
    		<div class="modal-body">
    			<ol>
    			<?php
                      $registration = mysqli_query($connect, "SELECT * FROM registration ")
                      or die("Failed to query database".mysql_error());
                      while($name = mysqli_fetch_assoc($registration ))
                      {
                      	echo '<li> 
                             <a href="index.php?nameid='.$name["id"].'">'.$name["name"].'</a>
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