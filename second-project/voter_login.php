<!--  -->
<?php
session_start();
if (isset($_SESSION['voter_login_id'])) {
    header('location: backend/voter_dashboard.php');
}
if (isset($_SESSION['commissioner_dashboard_confirm'])) {
    header('location: backend/commissioner_dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Voter Login</title>
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
										<a href="index.html"><img src="asset/images/logo-full.png" alt=""></a>
									</div>
                                    <h2 class="text-center mb-4 text-white">Voter Sign in</h2>
                                    <form action="voter_login_post.php" method="post">
                                        <?php if (isset($_SESSION['voter_register_success'])) { ?>
                                            <div class="alert alert-success">
                                                <?= $_SESSION['voter_register_success'] ?>
                                            </div>
                                        <?php } unset($_SESSION['voter_register_success']); ?>

                                        <?php if (isset($_SESSION['voter_login_error'])) {?>
                                            <div class="alert alert-danger">
                                                <?= $_SESSION['voter_login_error'] ?>
                                            </div>
                                        <?php } unset($_SESSION['voter_login_error']); ?>

                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Name</strong></label>
                                            <input type="text" class="form-control" placeholder="Enter Name" name="name"
                                            value="<?php if (isset($_SESSION['voter_register_name'])) { 
                                                echo $_SESSION['voter_register_name']; 
                                            } unset($_SESSION['voter_register_name']); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Phone Number</strong></label>
                                            <input type="tel" class="form-control" placeholder="Enter Phone Number" name="phone_number" 
                                            value="<?php if (isset($_SESSION['voter_register_phone_number'])) { 
                                                echo $_SESSION['voter_register_phone_number']; 
                                            } unset($_SESSION['voter_register_phone_number']); ?>">
                                        </div>
                                        
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>                                    
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
