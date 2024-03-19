<?php
session_start();
if (!isset($_SESSION['commissioner_dashboard_confirm'])) {
    header('location:error.php');
}
require_once('header.php');
?>
<div class="row">
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Prarthi Register</h4>
            </div>
            <div class="card-body">       
                <?php if (isset($_SESSION['prarthi_register_success'])) { ?>
                    <div class="alert alert-success">
                        <?= $_SESSION['prarthi_register_success'] ?>
                    </div>
                <?php } unset($_SESSION['prarthi_register_success']); ?>

                <div class="basic-form custom_file_input">
                    <form action="prarthi_register_post.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control input-default " placeholder="Name" name="name"
                            value="<?php if (isset($_SESSION['old_name'])) { 
										echo $_SESSION['old_name']; 
									 } unset($_SESSION['old_name']); ?>">

									<?php if (isset($_SESSION['name_error'])) { ?>
										<div class="alert alert-danger">
											<?= $_SESSION['name_error'] ?>
										</div>
									<?php } unset($_SESSION['name_error']); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-default " placeholder="Marka" name="protik_name"
                            value="<?php if (isset($_SESSION['old_protik_name'])) { 
										echo $_SESSION['old_protik_name']; 
									 } unset($_SESSION['old_protik_name']); ?>">

									<?php if (isset($_SESSION['protik_name_error'])) { ?>
										<div class="alert alert-danger">
											<?= $_SESSION['protik_name_error'] ?>
										</div>
									<?php } unset($_SESSION['protik_name_error']); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-default " placeholder="Election Zila" name="election_zila" value="<?php if (isset($_SESSION['old_election_zila'])) { 
										echo $_SESSION['old_election_zila']; 
									 } unset($_SESSION['old_election_zila']); ?>">

									<?php if (isset($_SESSION['election_zila_error'])) { ?>
										<div class="alert alert-danger">
											<?= $_SESSION['election_zila_error'] ?>
										</div>
									<?php } unset($_SESSION['election_zila_error']); ?>
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
                        <?php if (isset($_SESSION['protik_photo_error'])) { ?>
                            <div class="alert alert-danger">
                                <?= $_SESSION['protik_photo_error'] ?>
                            </div>
                        <?php } unset($_SESSION['protik_photo_error']); ?>
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
