<?php
session_start();
if (!isset($_SESSION['commissioner_login_name'])) {
    header('location:error.php');
} else {
    $_SESSION['commissioner_dashboard_confirm'] = "Yes";
}
require_once('header.php');
?>
<div class="row">
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Input Style</h4>
            </div>
            <div class="card-body">
                <div class="basic-form custom_file_input">
                    <form action="prarthi_register_post.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control input-default " placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-default " placeholder="Marka" name="protik_name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-default " placeholder="Election Zila" name="election_zila">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload Protik Photo</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="protik_photo">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Prarthi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once('footer.php');
?>
