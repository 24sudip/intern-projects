<?php
session_start();
if (!isset($_SESSION['commissioner_login_name'])) {
    header('location:error.php');
}
$voter_id = $_GET['details_voter_id'];
$db_connect = mysqli_connect('localhost', 'root','','second_project');
$id_confirm_query = "SELECT * FROM voters WHERE voter_id='$voter_id'";
$after_id_query = mysqli_query($db_connect, $id_confirm_query);
$after_id_assoc = mysqli_fetch_assoc($after_id_query);
require_once('header.php');
?>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>
                                    <img src="../asset/upload/voter_photos/<?= $after_id_assoc['voter_photo']?>" width="70"/>
                                </th>                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <th><?= $after_id_assoc['name']?></th>                                
                            </tr>
                            <tr>
                                <td>Father's Name</td>
                                <td><?= $after_id_assoc['father_name']?></td>
                            </tr>                            
                            <tr>
                                <td>Mother's Name</td>
                                <td><?= $after_id_assoc['mother_name']?></td>
                            </tr>                            
                            <tr>
                                <td>Date Of Birth</td>
                                <td><?= $after_id_assoc['date_of_birth']?></td>
                            </tr>                            
                            <tr>
                                <td>Address</td>
                                <td><?= $after_id_assoc['address']?></td>
                            </tr>                            
                            <tr>
                                <td>Zila</td>
                                <td><?= $after_id_assoc['zila']?></td>
                            </tr>                            
                            <tr>
                                <td>Upzila</td>
                                <td><?= $after_id_assoc['upzila']?></td>
                            </tr>                            
                            <tr>
                                <td>Gender</td>
                                <td><?= $after_id_assoc['gender']?></td>
                            </tr>                            
                            <tr>
                                <td>Phone Number</td>
                                <td><?= $after_id_assoc['phone_number']?></td>
                            </tr>                            
                            <tr>
                                <td>Email</td>
                                <td><?= $after_id_assoc['email']?></td>
                            </tr>                            
                        </tbody>
                    </table>
                </div>
            </div>					
        </div>
    </div>
</div>				
<?php
require_once('footer.php');
?>
