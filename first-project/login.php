<?php
session_start();
if (isset($_SESSION['dashboard_confirm'])) {
    if ($_SESSION['dashboard_role'] == 'user') {
        header('location:user_dashboard.php');
    } else if($_SESSION['dashboard_role'] == 'admin') {
        header('location:dashboard.php');
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <section>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 mt-5">
					<div class="card">
                        <?php if (isset($_SESSION['register_success'])) { ?>
                            <div class="alert alert-success mb-3">
                                <?= $_SESSION['register_success'] ?>
                            </div>
                        <?php } unset($_SESSION['register_success']); ?>
						<div class="card-header bg-success">
                            <span class="text-white">Admin Login</span>						
						</div>
						<div class="card-body">
							<form action="login_post.php" method="post">
								
								<div class="mb-3">
									<input class="form-control" type="email" name="email" placeholder="Email" 
                                    value="<?php if (isset($_SESSION['register_email'])) { 
										echo $_SESSION['register_email']; 
									 } ?>">
                                    <?php if (isset($_SESSION['login_error'])) { ?>
                                        <div class="alert alert-danger">
                                            <?= $_SESSION['login_error'] ?>
                                        </div>
                                    <?php } unset($_SESSION['login_error']); ?>
								</div>
								<div class="mb-3">
									<input class="form-control" type="password" name="password" placeholder="Password">
                                    <?php if (isset($_SESSION['match_error'])) { ?>
                                        <div class="alert alert-danger">
                                            <?= $_SESSION['match_error'] ?>
                                        </div>
                                    <?php } unset($_SESSION['match_error']); ?>
								</div>
								<button type="submit" class="btn btn-primary">Login</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
