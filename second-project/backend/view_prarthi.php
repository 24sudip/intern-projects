<?php
session_start();
if (!isset($_SESSION['commissioner_dashboard_confirm'])) {
    header('location:error.php');
}
$db_connect = mysqli_connect('localhost', 'root','','second_project');
$prarthi_details_query = "SELECT * FROM prarthis";
$after_prarthis_query = mysqli_query($db_connect, $prarthi_details_query);
$serial = 1;
require_once('header.php');
?>
<div class="row">
    <div class="col-xl-12 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">View Prarthi</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Name</th>
                            <th scope="col">Marka</th>
                            <th scope="col">Protik Photo</th>
                            <th scope="col">Election Zila</th>
                            <th scope="col">Gotten Vote</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($after_prarthis_query as $after_prarthis_item):?>
                        <tr>
                            <th scope="row"><?= $serial++?></th>
                            <td><?= $after_prarthis_item['name']?></td>
                            <td><?= $after_prarthis_item['protik_name']?></td>
                            <td><img src="../asset/upload/protik_photos/<?= $after_prarthis_item['protik_photo'] ?>" style="width: 70px;height: 70px;"></td>
                            <td><?= $after_prarthis_item['election_zila']?></td>
                            <td><?= $after_prarthis_item['gotten_vote']?></td>
                            <td>                                
                                <a href="delete_prarthi.php?delete_prarthi_id=<?= $after_prarthis_item['prarthi_id']?>" class="btn btn-danger">Hard-Delete</a>                                
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
require_once('footer.php');
?>
