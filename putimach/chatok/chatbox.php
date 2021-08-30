<?php
session_start();
include("db.php");
include("nav.php");
include("links.php");

$registration = mysqli_query($connect, "SELECT * FROM registration Where id = '".$_SESSION["nameid"]."'")
or die("Failed to query database".mysql_errno());
$name = mysqli_fetch_assoc($registration);
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Chatbox</title>
</head>
<body>
     <div class="container">
     	<div class="row">
     		<div class="col-md-4 mt-4" style="height:450px; overflow-y: scroll; overflow-x: hidden;">
     			<p>Hi <?php echo $name["name"];?></p>
     			<input type="text" id="fromUser" value=<?php echo $name["id"]; ?> hidden />

                 <p>Send message to:</p>
                 <ul class="text-left">
                 	<?php

						$msgs = mysqli_query($connect, "SELECT * FROM registration ORDER BY id DESC")
						or die("Failed to query database".mysql_errno());
						while($msg = mysqli_fetch_assoc($msgs))
						{
							echo '<li><a href="?toUser='.$msg["id"].'"><img src="../image/'.$msg["image"].'"  style="height:40px; width:40px;border-radius:50%" > '.$msg["name"].'</a></li>';
						}
                 	?>
                 </ul>
                <a href="index.php"><--- Back</a>
     		</div>
     		<div class="col-md-4">
     		 <div class="modal-dialog">
		    	    <div class="modal-content">
		    		<div class="modal-header">
    			<h4>
    				<?php
    				if(isset($_GET["toUser"]))
                       {
                       $userName = mysqli_query($connect, "SELECT * FROM registration WHERE id = '".$_GET["toUser"]."'")
						or die("Failed to query database".mysql_errno());
						$uName = mysqli_fetch_assoc($userName);
						echo '<input type="text" value='.$_GET["toUser"].' Id="toUser" hidden/>';
						echo $uName["name"];
                       }
                       else
                       {
                       	 $userName = mysqli_query($connect, "SELECT * FROM registration")
						or die("Failed to query database".mysql_errno());
						$uName = mysqli_fetch_assoc($userName);
						$_SESSION["toUser"] = $uName["id"];
						echo '<input type="text" value='.$_SESSION["toUser"].' Id="toUser" hidden/>';
						echo $uName["name"];
                       }
    				?>
    			</h4>
    		</div>
    		<div class="modal-body" id="msgBody" style="height:300px; overflow-y: scroll; overflow-x: hidden;">
    			<?php
                      if(isset($_GET["toUser"]))
                      	  $chats = mysqli_query($connect, "SELECT * FROM messages where (FromUser = '".$_SESSION["nameid"]."' AND ToUser = '".$_GET["toUser"]."') OR (FromUser = '".$_GET["toUser"]."' AND ToUser = '".$_SESSION["nameId"]."')")
						      or die("Failed to query database".mysql_errno());
						      //$chat = mysqli_fetch_assoc($chats);
						      else
						      	  $chats = mysqli_query($connect, "SELECT * FROM messages where (FromUser = '".$_SESSION["nameid"]."' AND ToUser = '".$_SESSION["toUser"]."') OR (FromUser = '".$_SESSION["toUser"]."' AND ToUser = '".$_SESSION["nameid"]."')")
						      or die("Failed to query database".mysql_errno());

						     while($chat = mysqli_fetch_assoc($chats))
						     {
                               if($chat["FromUser"] == $_SESSION["nameid"])
                               	echo "<div style='text-align:right;'>
                               <p style='background-color:lightblue; word-wrap:break-word; display:inline-block; padding:5px; border-radius:10px; max width:70%;'>".$chat["Message"]."
                               </P>
                               </div>";
                               else
                               	echo "<div style='text-align:left;'>
                               <p style='background-color:yellow; word-wrap:break-word; display:inline-block; padding:5px; border-radius:10px; max width:70%;'>".$chat["Message"]."
                               </P>
                               </div>";
						     }
    			?>
    		</div>
    		<div class="modal-footer">
    			<textarea id="message" class="form-control" style="height:70%;"></textarea>
    			<button id="send" class="btn btn-primary" style="height:70%;">Send</button> 
    		</div>
    	</div>
    </div> 			
  </div>
     		<div class="col-md-4">
     			
     		</div>
     	</div>
     </div>
</body>
<script type="text/javascript">
	$(document).ready(function(){

    $("#send").on("click",function(){
      //alert();
		$.ajax({
			url:"insertMessage.php",
			method:"POST",
			data:{
				fromUser: $("#fromUser").val(),
				toUser: $("#toUser").val(),
				message: $("#message").val()
			},
			dataType:"text",
			success:function(data)
			{
				$("#message").val("");
				//alert(data);
			}
		});
		});

		setInterval(function(){
			$.ajax({
                   url:"realTimechat.php",
                   method:"POST",
                   data:{
                   	fromUser:$("#fromUser").val(),
                   	toUser:$("#toUser").val()
                   },
                   dataType:"text",
                   success:function(data)
                   {
                   	$("#msgBody").html(data);
                   }
			});

		},700);
	});
</script>

</html>