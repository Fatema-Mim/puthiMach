<?php
session_start();
    require_once "include/header.php";
    require_once "include/nav.php"; 
    $phone = $_SESSION['phone'];
?>
<div class="container mt-3 ">

    <h2 class="text-center">Aquarium</h2>

    <div class="mt-3">
        <div class="container">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <col style="width: 25%">
              
                <thead>
                    <tr>
                        <!-- <th>Photo</th> -->
                        <th>Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Location</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once 'include/db.php';
                        $select = "SELECT * from date_reg Where partner_phone = '$phone' AND status=1";
                        $query = mysqli_query($connect,$select);
                        while($row=(mysqli_fetch_array( $query ))){
                            
                            ?>
                            <tr>
                        <!-- <td>
                            <img src="image/<?=  $row['image']?>" style="height: 70px; width: 70px;  border-radius: 50%;" alt="">
                        </td> -->
                        <td><?= $row['name']?></td>
                        <td><?= $row['dating_date']?></td>
                        <td><?= $row['dating_time']?></td>
                        <td><?= $row['location']?></td>
                        
                        
                        </tr>      
                    <?php
                        }
                    ?>
                </tbody>
                   <tbody>
                    <?php
                        require_once 'include/db.php';
                       
                        $select = "SELECT * from date_reg Where phone = '$phone' AND status=1";
                        $query = mysqli_query($connect,$select);
                        while($row=(mysqli_fetch_array( $query ))){
                            
                            ?>
                            <tr>
                        
                        <td><?= $row['partner_name']?></td>
                         <td><?= $row['dating_date']?></td>
                        <td><?= $row['dating_time']?></td>
                        <td><?= $row['location']?></td>
                        

                        </tr>      
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>




<?php
    require_once "include/footer.php";
?>
     
