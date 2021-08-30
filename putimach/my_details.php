<?php
session_start();

if(isset($_POST['save_image'])){

	$name = $_POST['name'];
	 $phone = $_SESSION['phone'];
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
	//$nation = $_POST['nation'];
	$number_a = $_POST['number_a'];
	$blood = $_POST['blood'];
	$gender = $_POST['gender'];
    $img = $_FILES["image"];
	$file_name = $img['tmp_name'];
	$destination = $img['name'];
	 $phone = $_SESSION['phone'];
	if(move_uploaded_file($file_name, "image/".$destination)){
require_once 'include/db.php';
$sql = "INSERT INTO personal_info VALUES(NULL,'$name','$phone','$skils_a','$language','$education','$experince','$father','$mother', '$present','$permanent', '$nation', '$religion','$number_a', '$blood', '$gender','$destination',NOW())";

if($result = mysqli_query($connect,$sql)){
header ('Location: my_details.php');
	}

	}

	
}


?>

<?php
require_once 'include/header.php';
require_once 'include/nav.php';
?>
	  <div class="container">
		  <div class="row clearfix">
			  <div class="col-md-2">
				  <br>
			  <a href="dairy.php" class="btn btn-primary">Back</a>
			  </div>
		  <div class="col-md-8">
			   <h1 style="text-align: center";>Personal Information</h1>
			   <table class="table">
		 <form action="" method="post" enctype="multipart/form-data">
			  <tr> 
				  <th class="text-right">Image : </th>
				 <td><input type="file" name="image" id="image" class="form-control"></td>
				 <div class="col-md-3" style="padding-top: 12px;">
								<img id="showImage" src="image/<?php echo $employee['image'];?>" style="height: 100px; width: 100px; border: 1px solid black">
								</div>
				  <th class="text-right">BIO : </th>
				 <td><input type="text" name="name" class="form-control"></td>
				 
			 </tr>
				   <tr> 
				  <!--<th class="text-right">Contact : </th>
				 <td><input type="number" name="phone" class="form-control"></td>-->
			 
				  <th class="text-right">Skils : </th>
				 <td><input type="text" name="skils_a" class="form-control"></td>
			 </tr>
				  <tr> 
				  <th class="text-right">Language : </th>
				 <td><input type="text" name="language" class="form-control"></td>
			  
				  <th class="text-right">Education : </th>
				 <td><input type="text" name="education" class="form-control"></td>
			 </tr>
				   <tr> 
				  <th class="text-right">Work Experince : </th>
				 <td><input type="text" name="experince" class="form-control"></td>
			 
				  <th class="text-right">Father's Name : </th>
				 <td><input type="text" name="father" class="form-control"></td>
			 </tr>
				  <tr> 
				  <th class="text-right">Mother's Name : </th>
				 <td><input type="text" name="mother" class="form-control"></td>
			 
				  <th class="text-right">Present Address :</th>
				 <td><input type="text" name="present" class="form-control"></td>
			 </tr>
				  <tr> 
				  <th class="text-right">Permanent Address :</th>
				 <td><input type="text" name="permanent" class="form-control"></td>
			
				  <!--<th class="text-right">Date of Birth :</th>
				 <td><input type="date" name="birth" class="form-control"></td>-->
				<th class="text-right">Nationality : </th>
                                <td>
                                    <input type="text" name="nation" class="form-control" id="to_con"
                                        placeholder="Country or City Name" list="datalist1">
                                </td>
                                <datalist id="datalist1">
                                    <option value="Afghan">
                                    <option value="Albanian">
                                    <option value="Algerian">
                                    <option value="Argentinian">
                                    <option value="Australian">
                                    <option value="Austrian ">
                                    <option value="Bangladeshi ">
                                    <option value="Belgian">
                                    <option value="Bolivian">
                                    <option value=" Batswana">
                                    <option value="Brazilian ">
                                    <option value="Bulgarian ">
                                    <option value="Cambodian ">
                                    <option value=" Cameroonian">
                                    <option value="Canadian ">
                                    <option value="Chilean ">
                                    <option value="Chinese ">
                                    <option value="Colombian ">
                                    <option value="Costa Rican ">
                                    <option value="Croatian ">
                                    <option value="Cuban ">
                                    <option value="Czech ">
                                    <option value=" Danish">
                                    <option value="Dominican ">
                                    <option value=" Ecuadorian">
                                    <option value="Egyptian ">
                                    <option value="Salvadorian ">
                                    <option value="English ">
                                    <option value="Estonian ">
                                    <option value="Ethiopian ">
                                    <option value=" Fijian">
                                    <option value="Finnish ">
                                    <option value="French ">
                                    <option value=" German">
                                    <option value="Ghanaian ">
                                    <option value="Greek ">
                                    <option value="Guatemalan ">
                                    <option value="Haitian ">
                                    <option value="Honduran ">
                                    <option value="Hungarian ">
                                    <option value="Icelandic ">
                                    <option value=" Indian">
                                    <option value="Indonesian ">
                                    <option value="Iranian ">
                                    <option value=" Iraqi">
                                    <option value="Irish">
                                    <option value="Israeli">
                                    <option value="Italian">
                                    <option value="Jamaican">
                                    <option value="Japanese">
                                    <option value="Jordanian">
                                    <option value="Kenyan">
                                    <option value="Kuwaiti">
                                    <option value="Lao">
                                    <option value="Latvian">
                                    <option value="Lebanese">
                                    <option value="Libyan">
                                    <option value="Lithuanian">
                                    <option value="Malagasy">
                                    <option value="Malaysian">
                                    <option value="Malian">
                                    <option value="Maltese">
                                    <option value="Mexican">
                                    <option value="Mongolian">
                                    <option value="Moroccan">
                                    <option value="Mozambican">
                                    <option value="Namibian">
                                    <option value="Nepalese">
                                    <option value="Dutch">
                                    <option value="New Zealand">
                                    <option value="Nicaraguan">
                                    <option value="Nigerian">
                                    <option value="Norwegian">
                                    <option value="Pakistani">
                                    <option value="Panamanian ">
                                    <option value="Paraguayan ">
                                    <option value="Peruvian ">
                                    <option value="Philippine">
                                    <option value="Polish">
                                    <option value="Portuguese ">
                                    <option value="Romanian">
                                    <option value="Russian ">
                                    <option value="Saudi">
                                    <option value="Scottish">
                                    <option value="Senegalese">
                                    <option value="Serbian">
                                    <option value="Singaporean">
                                    <option value="Slovak">
                                    <option value="South African">
                                    <option value="Korean">
                                    <option value="Spanish">
                                    <option value="Sri Lankan">
                                    <option value="Sudanese">
                                    <option value="Swedish">
                                    <option value="Swiss">
                                    <option value="Syrian">
                                    <option value="Taiwanese ">
                                    <option value="Tajikistani">
                                    <option value="Thai">
                                    <option value="Tongan ">
                                    <option value="Tunisian ">
                                    <option value="Turkish ">
                                    <option value="Ukrainian ">
                                    <option value="Emirati ">
                                    <option value="British ">
                                    <option value="American">
                                    <option value="Uruguayan">
                                    <option value="Venezuelan">
                                    <option value="Vietnamese">
                                    <option value="Welsh">
                                    <option value="Zambian">
                                    <option value="Zimbabwean">
			 </tr>
			 
				  <tr> 
				<th class="text-right">Religion :</th>
				 <td><input type="text" name="religion" class="form-control"></td>
				 <th class="text-right">NID Number :</th>
				 <td><input type="number" name="number_a" class="form-control"></td>
			 </tr>
		
			
				  <tr> 
				  <th class="text-right">Blood Group :</th>
				 <td>
					 <select name="blood">
					 <option value="null">Select Option</option>
						<Option>AB+</Option>
						<Option>AB-</Option>
						<Option>A+</Option>
						<Option>A-</Option>
						<Option>B+</Option>
						<Option>B-</Option>
						<Option>O+</Option>
						<Option>O-</Option>
					 </select>	  
				</td>
					<th class="text-right">Gender : </th>
						<td>
							<div class="radioButton col">
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
									<label class="form-check-label" for="inlineRadio1">Male</label>
								</div>

								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
									<label class="form-check-label" for="inlineRadio2">Female</label>
								</div>

								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Other">
									<label class="form-check-label" for="inlineRadio2">Other</label>
								</div>
							</div>
							
						</td>
				</tr>
				  
			  <tr> 
				  <th class="text-right"> </th>
				 <td><input  type="submit" name="save_image" class="btn btn-info" value="Submit"></td>
				
			 </tr>
			 </form>
			  </table>
			  
			  </div>
		  </div>
	  
	  </div>

 <?php
   require_once 'include/header.php'; 
 
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