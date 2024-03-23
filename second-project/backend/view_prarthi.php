<?php
session_start();
if (!isset($_SESSION['commissioner_dashboard_confirm'])) {
    header('location:error.php');
}
require_once('header.php');
?>
<div class="row">
    <div class="col-xl-12 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">View Prarthi</h4>
            </div>
            <div class="card-header">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Soft-Deleted Prarthi
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php
                                $db_connect = mysqli_connect('localhost', 'root','','second_project');
                                $prarthi_softdel_query = "SELECT * FROM prarthis WHERE delete_status='1'";
                                $after_softdel_query = mysqli_query($db_connect, $prarthi_softdel_query);
                                $serial_two = 1;
                                ?>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">SL</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Marka</th>
                                            <th scope="col">Election Zila</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($after_softdel_query as $after_softdel_item):?>
                                        <tr>
                                            <th scope="row"><?= $serial_two++?></th>
                                            <td><?= $after_softdel_item['name']?></td>
                                            <td><?= $after_softdel_item['protik_name']?></td>
                                            <td><?= $after_softdel_item['election_zila']?></td>
                                            <td>                                                               
                                                <a href="undo_prarthi.php?undo_prarthi_id=<?= $after_softdel_item['prarthi_id']?>" class="btn btn-warning">Undo</a>                                
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?php if (isset($_SESSION['prarthi_edit_success'])) { ?>
                    <div class="alert alert-success">
                        <?= $_SESSION['prarthi_edit_success'] ?>
                    </div>
                <?php } unset($_SESSION['prarthi_edit_success']); ?>
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
                        <?php
                        $db_connect = mysqli_connect('localhost', 'root','','second_project');
                        $prarthi_details_query = "SELECT * FROM prarthis WHERE delete_status='0'";
                        $after_prarthis_query = mysqli_query($db_connect, $prarthi_details_query);
                        $serial = 1;
                        ?>
                        <?php foreach($after_prarthis_query as $after_prarthis_item):?>
                        <tr>
                            <th scope="row"><?= $serial++?></th>
                            <td><?= $after_prarthis_item['name']?></td>
                            <td><?= $after_prarthis_item['protik_name']?></td>
                            <td><img src="../asset/upload/protik_photos/<?= $after_prarthis_item['protik_photo'] ?>" style="width: 70px;height: 70px;"></td>
                            <td><?= $after_prarthis_item['election_zila']?></td>
                            <td><?= $after_prarthis_item['gotten_vote']?></td>
                            <td>                                
                                <a href="edit_prarthi.php?edit_prarthi_id=<?= $after_prarthis_item['prarthi_id']?>" class="btn btn-success">Edit</a>                                
                                <a href="delete_prarthi.php?delete_prarthi_id=<?= $after_prarthis_item['prarthi_id']?>" class="btn btn-danger">Hard-Delete</a>                                
                                <a href="softdel_prarthi.php?softdel_prarthi_id=<?= $after_prarthis_item['prarthi_id']?>" class="btn btn-warning">Soft-Delete</a>                                
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
