<?php
session_start();
 $phone = $_SESSION['phone'];
?>
<?php
require_once 'include/header.php';
require_once 'include/nav.php';
?>


<div class="container">
    	      <?php
            require_once 'include/db.php';
            $sql = "SELECT * FROM personal_info where phone= '$phone'";
            $result = mysqli_query($connect, $sql);
            while($row = mysqli_fetch_array($result))
           {
			?> 
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
                    <textarea name=""   cols="" rows="2"><?= $row['name']?></textarea>
                  
                </div>
             </div>

        </div>
         <div class="col-md-6">
             <div class="mb-3 row">
                <label  class="col-sm-2 col-form-label"> Gender :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?= $row['gender']?>">
                </div>
             </div>
             
         </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Contact :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?= $row['phone']?>">
                </div>
             </div>

        </div>
         <div class="col-md-6">
             <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Skills :</label>
                <div class="col-sm-10">
                    <textarea name=""  cols="" rows="2"> <?= $row['skils_a']?></textarea>
                 
                </div>
             </div>
             
         </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Language :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?= $row['language'];?>">
                </div>
             </div>

        </div>
         <div class="col-md-6">
             <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Education :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?= $row['education']?>">
                </div>
             </div>
             
         </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Work Experince :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?= $row['experince']?>">
                </div>
             </div>

        </div>
         <div class="col-md-6">
             <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Father's Name :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?= $row['father']?>">
                </div>
             </div>
             
         </div>
    </div>
     <div class="row">
        <div class="col-md-6">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Mother's Name :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?= $row['mother']?>">
                </div>
             </div>

        </div>
         <div class="col-md-6">
             <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Present Address :</label>
                <div class="col-sm-10">
                    <textarea name=""  cols="" rows="2"><?= $row['present']?> </textarea>
                </div>
             </div>
             
         </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Permanent Address :</label>
                <div class="col-sm-10">
                    <textarea name=""  cols="" rows="2"> <?= $row['permanent']?></textarea>
                  
                </div>
             </div>

        </div>
         <div class="col-md-6">
             <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nationality :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?= $row['nation']?>">
                </div>
             </div>
             
         </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Religion :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?= $row['religion']?>">
                </div>
             </div>

        </div>
         <div class="col-md-6">
             <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">NID Number :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?= $row['number_a']?>">
                </div>
             </div>
             
         </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Blood Group :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?= $row['blood']?>">
                </div>
             </div>

        </div>
         <div class="col-md-6">
             <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <a class="btn btn-primary btn-block" href="my_details_edit.php?id=<?php echo $row['id'];?>">Edit</a>
                </div>
             </div>
             
         </div>
    </div>
    
    
    
</div>

<?php
}
require_once 'include/footer.php';
?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>