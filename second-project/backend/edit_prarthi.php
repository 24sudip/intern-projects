<?php
session_start();
if (!isset($_SESSION['commissioner_login_name'])) {
    header('location:error.php');
}
if (isset($_GET['edit_prarthi_id'])) {
    $prarthi_id = $_GET['edit_prarthi_id'];
} else {
    $prarthi_id = $_SESSION['again_prarthi_id'];
}
$db_connect = mysqli_connect('localhost', 'root','','second_project');
$id_confirm_query = "SELECT * FROM prarthis WHERE prarthi_id='$prarthi_id'";
$after_id_query = mysqli_query($db_connect, $id_confirm_query);
$after_id_assoc = mysqli_fetch_assoc($after_id_query);
$_SESSION['edit_protik_photo'] = $after_id_assoc['protik_photo'];
require_once('header.php');
?>
<div class="row">
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Prarthi Edit</h4>
            </div>
            <div class="card-body">       
                <div class="basic-form custom_file_input">
                    <form action="edit_prarthi_post.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="edit_id" value="<?= $after_id_assoc['prarthi_id']; ?>">
                        <label>Name</label>
                        <div class="form-group">
                            <input type="text" class="form-control input-default" name="name"
                            value="<?= $after_id_assoc['name']; ?>">
                        </div>
                        <label>Protik Name</label>
                        <div class="form-group">
                            <input type="text" class="form-control input-default" name="protik_name"
                            value="<?= $after_id_assoc['protik_name']; ?>">
                        </div>
                        <label>Election Zila</label>
                        <div class="form-group">
                            <input type="text" class="form-control input-default" name="election_zila"
                            value="<?= $after_id_assoc['election_zila']; ?>">
                        </div>
                        <label>Protik Photo</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Edit Protik Photo</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="protik_photo">
                                <label class="custom-file-label">Choose file</label>
                            </div>                            
                        </div>                        
                        <button type="submit" class="btn btn-primary">Edit Prarthi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>				
<?php
require_once('footer.php');
?>
