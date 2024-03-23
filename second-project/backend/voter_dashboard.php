<?php
session_start();
if (!isset($_SESSION['voter_login_id'])) {
    header('location:error.php');
}
$voter_id = $_SESSION['voter_login_id'];
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
                <?php if (isset($_SESSION['give_vote_success'])) { ?>
                    <div class="alert alert-success">
                        <?= $_SESSION['give_vote_success'] ?>
                    </div>
                <?php } unset($_SESSION['give_vote_success']); ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th><?= $_SESSION['voter_login_name']?></th>                                
                            </tr>
                        </thead>
                        <tbody>
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
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th>Prarthi Name</th>
                                <th>Marka</th>
                                <th>protik_photo</th>
                                <th>election_zila</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $prarthi_details_query = "SELECT * FROM prarthis";
                            $after_prarthis_query = mysqli_query($db_connect, $prarthi_details_query);
                            ?>
                            <?php foreach($after_prarthis_query as $after_prarthis_item):?>
                            <tr>
                                <td><?= $after_prarthis_item['name']?></td>
                                <td><?= $after_prarthis_item['protik_name']?></td>
                                <td><img src="../asset/upload/protik_photos/<?= $after_prarthis_item['protik_photo'] ?>" style="width: 70px;height: 70px;"></td>
                                <td><?= $after_prarthis_item['election_zila']?></td>
                                <td>
                                    <?php if ($after_id_assoc['given_vote'] == 'no') {?> 
                                    <a href="vote_prarthi.php?vote_prarthi_id=<?= $after_prarthis_item['prarthi_id']?>" class="btn btn-info">Give Vote</a>                                
                                    <?php } ?>                               
                                </td>
                            </tr>
                            <?php endforeach;?>											
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
