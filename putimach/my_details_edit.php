<?php
$id = $_GET['id'];
require_once 'include/db.php';
$sql = "SELECT * FROM personal_info WHERE id=$id";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);

if(isset($_POST['name'])){
	$name = $_POST['name'];
   // $phone = $_SESSION['phone'];
	//$phone = $_POST['phone'];
	$skils_a = $_POST['skils_a'];
	$language = $_POST['language'];
	$education = $_POST['education'];
	$experince = $_POST['experince'];
	$father = $_POST['father'];
	$mother = $_POST['mother'];
	$present = $_POST['present'];
	$permanent = $_POST['permanent'];
	$nation = $_POST['nation'];
	$religion = $_POST['religion'];
	$number_a = $_POST['number_a'];
	$blood = $_POST['blood'];
	$gender = $_POST['gender'];
	$img = $_FILES['image'];
		$tmp_mame = $img['tmp_name'];
		$file_name = $img['name'];
		//echo print_r($img); exit();
	//	var_dump($_POST); exit;
	
		move_uploaded_file($tmp_mame, "image/".$file_name);
		if($img['size'] > 1){
			if(file_exists("image/".$row['image']) && !empty($row['image'])){
				unlink("image/".$row['image']);
			}
			//move_uploaded_file($tmp_name, "image/".$file_name);
			
			$sql = "UPDATE personal_info SET name='$name', skils_a='$skils_a', language='$language', education='$education',experince='$experince', father='$father', mother='$mother', present='$present', permanent='$permanent', nation='$nation', religion='$religion', number_a='$number_a', blood='$blood', gender='$gender', image='$file_name' WHERE id = $id";
		}else{
			$sql = "UPDATE personal_info SET name='$name', skils_a='$skils_a', language='$language', education='$education',experince='$experince', father='$father', mother='$mother', present='$present', permanent='$permanent', nation='$nation', religion='$religion', number_a='$number_a', blood='$blood', gender='$gender' WHERE id = $id";
		}
		
		$sql=mysqli_query($connect,$sql);
		if($sql){
			header ("Location: my_details_show.php?id=" . $id);
		}
		
	}

?>
<?php
require_once 'include/header.php';
require_once 'include/nav.php';
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="container">
	<div class="row">
	    <div class="col-md-6" style="padding-top: 12px;">
				<img id="showImage" src="image/<?php echo $row['image'];?>" style="height: 100px; width: 100px; border: 1px solid black">
		</div>
	</div>		
		<br>	
    <div class="row">
        
        <div class="col-md-6">
            <div class="mb-3 row">
                <label  class="col-sm-2 col-form-label">BIO :</label>
                <div class="col-sm-10">
                    <textarea name="name"   cols="" rows="2"><?= $row['name']?></textarea>
                  
                </div>
             </div>

        </div>
         <div class="col-md-6">
             <div class="mb-3 row">
                <label  class="col-sm-2 col-form-label"> Gender :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="gender" value="<?= $row['gender']?>">
                </div>
             </div>
             
         </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Contact :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="contact_a" value="<?= $row['phone']?>">
                </div>
             </div>

        </div>
         <div class="col-md-6">
             <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Skills :</label>
                <div class="col-sm-10">
                    <textarea name="skils_a"  cols="" rows="2"> <?= $row['skils_a']?></textarea>
                 
                </div>
             </div>
             
         </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Language :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="language" value="<?= $row['language'];?>">
                </div>
             </div>

        </div>
         <div class="col-md-6">
             <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Education :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="education" value="<?= $row['education']?>">
                </div>
             </div>
             
         </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Work Experince :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="experince" value="<?= $row['experince']?>">
                </div>
             </div>

        </div>
         <div class="col-md-6">
             <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Father's Name :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control"  name="father" value="<?= $row['father']?>">
                </div>
             </div>
             
         </div>
    </div>
     <div class="row">
        <div class="col-md-6">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Mother's Name :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="mother" value="<?= $row['mother']?>">
                </div>
             </div>

        </div>
         <div class="col-md-6">
             <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Present Address :</label>
                <div class="col-sm-10">
                    <textarea name="present"  cols="" rows="2"><?= $row['present']?> </textarea>
                </div>
             </div>
             
         </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Permanent Address :</label>
                <div class="col-sm-10">
                    <textarea name="permanent"  cols="" rows="2"> <?= $row['permanent']?></textarea>
                  
                </div>
             </div>

        </div>
         <div class="col-md-6">
             <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nationality :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nation" value="<?= $row['nation']?>">
                </div>
             </div>
             
         </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Religion :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="religion" value="<?= $row['religion']?>">
                </div>
             </div>

        </div>
         <div class="col-md-6">
             <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">NID Number :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="number_a" value="<?= $row['number_a']?>">
                </div>
             </div>
             
         </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Blood Group :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="blood" value="<?= $row['blood']?>">
                </div>
             </div>

        </div>
         <div class="col-md-6">
             <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label"> Image</label>
                <div class="col-sm-10">
                  <input type="file" name="image" id="image" class="form-control">
                </div>
             </div>
             
         </div>
         
    </div>
    <div class="row">
        <div>
             <div class="col-md-6">
             <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <input class="btn btn-info" type="submit" value = "Submit"></td>
                </div>
             </div>
             
         </div>
        </div>
        
    </div>
    
</div>
</div>
</form>




 
	  <!--<div class="container">-->
		 <!-- <div class="row clearfix">-->
			<!--  <div class="col-md-2">-->
			<!--	  <br>-->
			  <!--<a href="index.php" class="btn btn-primary">Back</a>-->
			<!--  </div>-->
		 <!-- <div class="col-md-8">-->
			<!--   <h1 style="text-align: center";>Personal Information</h1>-->
		 <!--<table class="table">-->
			  <!-- <form action="" method="POST"> -->
			<!--  <form action="" method="post" enctype="multipart/form-data">-->
			<!--  <tr> -->
			<!--	  <th class="text-right">BIO : </th>-->
			<!--	 <td><input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control"></td>-->
			 
				 <!-- <th class="text-right">Contact : </th>
			<!--	 <td><input type="number" name="contact_a" value="<?php echo $row['contact_a']; ?>" class="form-control"></td>-->-->
			<!-- </tr>-->
			<!--  <tr> -->
			<!--	  <th class="text-right">Skills : </th>-->
			<!--	 <td><input type="text" name="skils_a" value="<?php echo $row['skils_a']; ?>" class="form-control"></td>-->
			
			<!--	  <th class="text-right">Language : </th>-->
			<!--	 <td><input type="text" name="language" value="<?php echo $row['language']; ?>" class="form-control"></td>-->
			<!-- </tr>-->
			 
			<!--  <tr> -->
			<!--	  <th class="text-right">Education : </th>-->
			<!--	 <td><input type="text" name="education" value="<?php echo $row['education']; ?>" class="form-control"></td>-->
			
			<!--	  <th class="text-right">Work Experince : </th>-->
			<!--	 <td><input type="text" name="experince" value="<?php echo $row['experince']; ?>" class="form-control"></td>-->
			<!-- </tr>-->
			
			<!--  <tr> -->
			<!--	  <th class="text-right">Father's Name : </th>-->
			<!--	 <td><input type="text" name="father" value="<?php echo $row['father']; ?>" class="form-control"></td>-->
			
			<!--	  <th class="text-right">Mother's Name : </th>-->
			<!--	 <td><input type="text" name="mother" value="<?php echo $row['mother']; ?>" class="form-control"></td>-->
			<!-- </tr>-->
			
			<!--  <tr> -->
			<!--	  <th class="text-right">Present Address : </th>-->
			<!--	 <td><input type="text" name="present" value="<?php echo $row['present']; ?>" class="form-control"></td>-->
			
			<!--	  <th class="text-right">Permanent Address : </th>-->
			<!--	 <td><input type="text" name="permanent" value="<?php echo $row['permanent']; ?>" class="form-control"></td>-->
			<!-- </tr>-->
	
			<!--  <tr> -->
			<!--	  <th class="text-right">Nationality : </th>-->
			<!--	 <td><input type="text" name="nation" value="<?php echo $row['nation']; ?>" class="form-control"></td>-->
		 
			<!--	  <th class="text-right">Religion : </th>-->
			<!--	 <td><input type="text" name="religion" value="<?php echo $row['religion']; ?>" class="form-control"></td>-->
			<!-- </tr>-->
			 
			<!--  <tr> -->
			<!--	  <th class="text-right">NID Number : </th>-->
			<!--	 <td><input type="number" name="number_a" value="<?php echo $row['number_a']; ?>" class="form-control"></td>-->
			  
			<!--	  <th class="text-right">Blood Group : </th>-->
			<!--	 <td><input type="text" name="blood" value="<?php echo $row['blood']; ?>" class="form-control"></td>-->
			<!-- </tr>-->
			
			<!--  <tr> -->
			<!--	  <th class="text-right">Gender : </th>-->
			<!--	 <td><input type="text" name="gender" value="<?php echo $row['gender']; ?>" class="form-control"></td>-->

				

			<!-- </tr>-->
			<!--  <tr>-->
			<!--	  <tr>-->
			<!--	  <th><label for="">Image File:</label></th>-->
			<!--	 <th><input type="file" name="image" id="image" class="form-control"></th>-->
				 
			<!--	 <div class="col-md-3" style="padding-top: 12px;">-->
			<!--					<img id="showImage" src="image/<?php echo $row['image'];?>" style="height: 120px; width: 120px; border: 1px solid black">-->
			<!--					</div>-->
			<!--	  </tr> -->
			<!--	  <th class="text-right"> </th>-->
			<!--	 <td><input class="btn btn-info" type="submit" value = "Submit"></td>-->
			<!-- </tr>-->
			<!-- </form>-->
			<!--  </table>-->
			  
			<!--  </div>-->
		 <!-- </div>-->
	  
	  <!--</div>-->

 <?php
require_once 'include/footer.php';
?>
<script type="text/javascript">
			 $(document).ready(function(){
$('#image').change(function(e){
var reader = new FileReader();
reader.onload = function(e){
	$('#showImage').attr('src',e.target.result);
}
reader.readAsDataURL(e.target.files['0']);
});
			 });
			 
			 </script>