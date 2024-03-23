<?php
session_start();
if (!isset($_SESSION['commissioner_login_name'])) {
    header('location:error.php');
}
if (isset($_GET['edit_voter_id'])) {
    $voter_id = $_GET['edit_voter_id'];
} else {
    $voter_id = $_SESSION['again_edit_id'];
}
$db_connect = mysqli_connect('localhost', 'root','','second_project');
$id_confirm_query = "SELECT * FROM voters WHERE voter_id='$voter_id'";
$after_id_query = mysqli_query($db_connect, $id_confirm_query);
$after_id_assoc = mysqli_fetch_assoc($after_id_query);
$_SESSION['edit_voter_photo'] = $after_id_assoc['voter_photo'];
require_once('header.php');
?>
<div class="row">
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Voter Edit</h4>
            </div>
            <div class="card-body">       
                <div class="basic-form custom_file_input">
                    <form action="edit_voter_post.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="edit_id" value="<?= $after_id_assoc['voter_id']; ?>">
                        <label>Name</label>
                        <div class="form-group">
                            <input type="text" class="form-control input-default" name="name"
                            value="<?= $after_id_assoc['name']; ?>">
                        </div>
                        <label>Father's Name</label>
                        <div class="form-group">
                            <input type="text" class="form-control input-default" name="father_name"
                            value="<?= $after_id_assoc['father_name']; ?>">
                        </div>
                        <label>Mother's Name</label>
                        <div class="form-group">
                            <input type="text" class="form-control input-default" name="mother_name"
                            value="<?= $after_id_assoc['mother_name']; ?>">
                        </div>
                        <label>Date Of Birth</label>
                        <div class="form-group">
                            <input type="date" class="form-control input-default" name="date_of_birth"
                            value="<?= $after_id_assoc['date_of_birth']; ?>">
                        </div>
                        <label>Address</label>
                        <div class="form-group">
                            <input type="text" class="form-control input-default" name="address"
                            value="<?= $after_id_assoc['address']; ?>">
                        </div>
                        <label>Zila</label>
                        <div class="form-group">
                            <input type="text" class="form-control input-default" name="zila"
                            value="<?= $after_id_assoc['zila']; ?>">
                        </div>
                        <label>Upzila</label>
                        <div class="form-group">
                            <input type="text" class="form-control input-default" name="upzila"
                            value="<?= $after_id_assoc['upzila']; ?>">
                        </div>
                        <label>Gender</label>
                        <div class="form-group">
                            <select class="form-control input-default" name="gender">
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                            <?php if (isset($_SESSION['gender_error'])) { ?>
                                <div class="alert alert-danger">
                                    <?= $_SESSION['gender_error'] ?>
                                </div>
                            <?php } unset($_SESSION['gender_error']); ?>
                        </div>
                        <label>Email</label>
                        <div class="form-group">
                            <input type="email" class="form-control input-default" name="email"
                            value="<?= $after_id_assoc['email']; ?>">
                        </div>
                        <label>Voter Photo</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Edit Voter Photo</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="voter_photo">
                                <label class="custom-file-label">Choose file</label>
                            </div>                            
                        </div>                        
                        <button type="submit" class="btn btn-primary">Edit Voter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>				
<?php
require_once('footer.php');
?>
