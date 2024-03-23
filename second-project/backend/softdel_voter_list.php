<?php
session_start();
if (!isset($_SESSION['commissioner_login_name'])) {
    header('location:error.php');
}
$db_connect = mysqli_connect('localhost', 'root','','second_project');
$voter_details_query = "SELECT * FROM voters WHERE delete_status='1'";
$after_details_query = mysqli_query($db_connect, $voter_details_query);
$serial = 1;
require_once('header.php');
?>
<div class="row">
    <div class="col-xl-12 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Soft-Deleted Voter</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Name</th>                            
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($after_details_query as $after_voters_item):?>
                        <tr>
                            <th scope="row"><?= $serial++?></th>
                            <td><?= $after_voters_item['name']?></td>
                            <td>                                                                
                                <a href="undo_softdel_voter.php?undo_softdel_voter_id=<?= $after_voters_item['voter_id']?>" class="btn btn-warning">Undo</a>                                
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
