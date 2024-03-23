<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Commissioner Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="asset/images/favicon.png">
    <link href="asset/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="#"><img src="asset/images/logo-full.png" alt="logo"></a>
									</div>
                                    <h2 class="text-center mb-4 text-white">Voter Sign Up</h2>
                                    <?php if (isset($_SESSION['voter_login_id']) || isset($_SESSION['commissioner_dashboard_confirm'])) {?>
                                        <h3 class="text-white">Please Logout to Register Again</h3>
                                    <?php } ?>
                                    
                                    <?php if (!isset($_SESSION['voter_login_id']) && !isset($_SESSION['commissioner_dashboard_confirm'])) {?>
                                        <form action="voter_register_post.php" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="mb-1 text-white"><strong>Name</strong></label>
                                                <input type="text" class="form-control" placeholder="Name" name="name"
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
                                                <label class="mb-1 text-white"><strong>Father's Name</strong></label>
                                                <input type="text" class="form-control" placeholder="Father's Name" name="father_name" value="<?php if (isset($_SESSION['old_father_name'])) { 
                                                    echo $_SESSION['old_father_name']; 
                                                } unset($_SESSION['old_father_name']); ?>">
    
                                                <?php if (isset($_SESSION['father_name_error'])) { ?>
                                                    <div class="alert alert-danger">
                                                        <?= $_SESSION['father_name_error'] ?>
                                                    </div>
                                                <?php } unset($_SESSION['father_name_error']); ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1 text-white"><strong>Mother's Name</strong></label>
                                                <input type="text" class="form-control" placeholder="Mother's Name" name="mother_name" value="<?php if (isset($_SESSION['old_mother_name'])) { 
                                                    echo $_SESSION['old_mother_name']; 
                                                } unset($_SESSION['old_mother_name']); ?>">
    
                                                <?php if (isset($_SESSION['mother_name_error'])) { ?>
                                                    <div class="alert alert-danger">
                                                        <?= $_SESSION['mother_name_error'] ?>
                                                    </div>
                                                <?php } unset($_SESSION['mother_name_error']); ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1 text-white"><strong>Date Of Birth</strong></label>
                                                <input type="date" class="form-control" placeholder="Date of Birth" name="date_of_birth" value="<?php if (isset($_SESSION['old_date_of_birth'])) { 
                                                    echo $_SESSION['old_date_of_birth']; 
                                                } unset($_SESSION['old_date_of_birth']); ?>">
    
                                                <?php if (isset($_SESSION['date_of_birth_error'])) { ?>
                                                    <div class="alert alert-danger">
                                                        <?= $_SESSION['date_of_birth_error'] ?>
                                                    </div>
                                                <?php } unset($_SESSION['date_of_birth_error']); ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1 text-white"><strong>Address</strong></label>
                                                <input type="text" class="form-control" placeholder="Address" name="address" 
                                                value="<?php if (isset($_SESSION['old_address'])) { 
                                                    echo $_SESSION['old_address']; 
                                                } unset($_SESSION['old_address']); ?>">
    
                                                <?php if (isset($_SESSION['address_error'])) { ?>
                                                    <div class="alert alert-danger">
                                                        <?= $_SESSION['address_error'] ?>
                                                    </div>
                                                <?php } unset($_SESSION['address_error']); ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1 text-white"><strong>Zila</strong></label>
                                                <input type="text" class="form-control" placeholder="Zila" name="zila" 
                                                value="<?php if (isset($_SESSION['old_zila'])) { 
                                                    echo $_SESSION['old_zila']; 
                                                } unset($_SESSION['old_zila']); ?>">
    
                                                <?php if (isset($_SESSION['zila_error'])) { ?>
                                                    <div class="alert alert-danger">
                                                        <?= $_SESSION['zila_error'] ?>
                                                    </div>
                                                <?php } unset($_SESSION['zila_error']); ?>
                                            </div>                                       
                                            <div class="form-group">
                                                <label class="mb-1 text-white"><strong>Upzila</strong></label>
                                                <input type="text" class="form-control" placeholder="UpZila" name="upzila" 
                                                value="<?php if (isset($_SESSION['old_upzila'])) { 
                                                    echo $_SESSION['old_upzila']; 
                                                } unset($_SESSION['old_upzila']); ?>">
    
                                                <?php if (isset($_SESSION['upzila_error'])) { ?>
                                                    <div class="alert alert-danger">
                                                        <?= $_SESSION['upzila_error'] ?>
                                                    </div>
                                                <?php } unset($_SESSION['upzila_error']); ?>
                                            </div>                                       
                                            <div class="form-group">
                                                <label class="mb-1 text-white"><strong>Gender</strong></label>
                                                <select class="form-control" name="gender">
                                                    <option value="">Gender</option>
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
                                            <div class="form-group">
                                                <label class="mb-1 text-white"><strong>Phone Number</strong></label>
                                                <input type="tel" class="form-control" placeholder="Phone Number"
                                                name="phone_number" value="<?php if (isset($_SESSION['old_phone_number'])) { 
                                                    echo $_SESSION['old_phone_number']; 
                                                } unset($_SESSION['old_phone_number']); ?>">
    
                                                <?php if (isset($_SESSION['phone_number_error'])) { ?>
                                                    <div class="alert alert-danger">
                                                        <?= $_SESSION['phone_number_error'] ?>
                                                    </div>
                                                <?php } unset($_SESSION['phone_number_error']); ?>
    
                                                <?php if (isset($_SESSION['phone_match_error'])) { ?>
                                                    <div class="alert alert-danger">
                                                        <?= $_SESSION['phone_match_error'] ?>
                                                    </div>
                                                <?php } unset($_SESSION['phone_match_error']); ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1 text-white"><strong>Email</strong></label>
                                                <input type="email" class="form-control" placeholder="Email"
                                                name="email" value="<?php if (isset($_SESSION['old_email'])) { 
                                                    echo $_SESSION['old_email']; 
                                                } unset($_SESSION['old_email']); ?>">
    
                                                <?php if (isset($_SESSION['email_error'])) { ?>
                                                    <div class="alert alert-danger">
                                                        <?= $_SESSION['email_error'] ?>
                                                    </div>
                                                <?php } unset($_SESSION['email_error']); ?>
                                            </div>
                                            <label class="mb-1 text-white"><strong>Voter Photo</strong></label>
                                             <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload Voter Photo</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="voter_photo">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                            <?php if (isset($_SESSION['voter_photo_error'])) { ?>
                                                <div class="alert alert-danger">
                                                    <?= $_SESSION['voter_photo_error'] ?>
                                                </div>
                                            <?php } unset($_SESSION['voter_photo_error']); ?>
                                            <div class="text-center">
                                                <button type="submit" class="btn bg-white text-primary btn-block">Sign Me Up</button>
                                            </div>                                    
                                        </form>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="asset/vendor/global/global.min.js"></script>
	<script src="asset/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="asset/js/custom.min.js"></script>
    <script src="asset/js/deznav-init.js"></script>

</body>

</html>
