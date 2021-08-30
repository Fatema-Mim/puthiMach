<?php
session_start();
    require_once "include/header.php";
    require_once "include/nav.php"; 
    $phone = $_SESSION['phone'];
?>
<div class="container mt-3 ">

    <h2 class="text-center">All pending Proposal</h2>

    <div class="mt-3">
        <div class="container">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <col style="width: 20%">
                <col style="width: 10%">
                <col style="width: 10%">
                <thead>
                    <tr>
                        <!-- <th>Photo</th> -->
                        <th>Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Location</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once 'include/db.php';
                        $select = "SELECT * from date_reg Where partner_phone = '$phone' AND status = 0 ";
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
                        <td style="padding-left: 0px; padding-right: 0px;">
                            <a href="accept.php?id=<?= $row['id']?>" class="btn-primary btn" name="accept" id="btn_for_desktop">Accept</a>
                          
                            <a href="reject.php?id=<?= $row['id']?>" class="btn-danger btn" id="btn1_for_desktop">Reject</a>
                            
                        </td>

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
        <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script> -->
