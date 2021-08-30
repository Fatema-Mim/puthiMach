<?php
    session_start();
    ob_start();
    require_once 'include/header.php';
    require_once 'include/nav.php';
    if(isset($_SESSION['phone'])){

        require_once 'include/db.php';    
        $id = $_GET['id'];
        $select = "SELECT * FROM registration WHERE id=$id";
        $result = mysqli_query($connect, $select);
        foreach($result as $value):
?>

<header>
    <div class="col-6 m-auto my_code text-white">
        <div class="form-title">
            <div class="text-center text-info">
                <img src="images/putimach logo.png" alt="" style="height: 120px; width: 300px">
                </br>
                Dating From 
            </div>
        </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">                    
                    <div class="mb-2 row">
                        <label for="datingDate" class="col-sm-4 col-form-label">Partner Name</label>
                        
                        <div class="col-sm-8">
                            <?php
                                require_once 'include/db.php';
                                $phones = $_SESSION['phone'];
                                $sql1 = mysqli_query($connect, "SELECT * FROM registration WHERE phone = '$phones'");
                                $row = mysqli_fetch_assoc($sql1);
                            ?>
                            <input type="text" class="form-control" name="partner_name" value="<?php echo $value['name'] ?>">
                            <input type="text" class="form-control" name="self_name" value="<?php echo $row['name'] ?>" style="display: none;">
                            <input type="number" class="form-control" name="balance" value="<?php echo $row['balance'] ?>" style="display: none;">
                            <input type="text" class="form-control" name="partner_phone" value="<?php echo $value['phone'] ?>" style="display: none;">
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="datingDate" class="col-sm-4 col-form-label">Dating Date</label>
                        
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="datingDate" required>
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="datingTime" class="col-sm-4 col-form-label">Dating Time</label>
                        <div class="col-sm-8">
                            <input type="time" class="form-control" name="datingTime" required>
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="Location" class="col-sm-4 col-form-label">Location</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Please Input Dating Location" id="passworda" name="location" required>
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">NID No.</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" placeholder="Input Your NID Number" id="confirm_password" name="nidNo" required>
                        </div>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn" name="submit" id="click">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>


<?php
    endforeach;
    if(isset($_POST['submit'])){
        $name = $_POST['self_name'];
        $partner_name = $_POST['partner_name'];
        $partner_phone = $_POST['partner_phone'];
        $phone = $_SESSION['phone'];
        $datingDate = $_POST['datingDate'];
        $datingTime = $_POST['datingTime'];
        $location = $_POST['location'];
        $nidNo = $_POST['nidNo'];
        require_once 'include/db.php';

        $sql = "INSERT INTO date_reg( name, phone ,dating_date, dating_time, location, nid, partner_name, partner_phone,status) VALUES ( '$name', '$phone', '$datingDate', '$datingTime', '$location', '$nidNo', '$partner_name', '$partner_phone',0)";
        $sql2= "UPDATE registration SET balance= balance-5 WHERE phone = $phone";
        $sql3 = "INSERT INTO transaction(name, phone,credit,debit,date_time) VALUES ('$name','$phone',0,5,NOW())";
        $result = mysqli_query($connect, $sql);
        $result2 = mysqli_query($connect, $sql2);
        $result3 = mysqli_query($connect, $sql3);
         header('location: finder.php');
    }
}
else{
    header('location: login.php');
}
?>
<script>
    $('#click').on('click',function(){
        Swal.fire(
          
          'success',
          'your request is sent'
          )
 });
</script>

<?php
    require_once 'include/footer.php';
?>
