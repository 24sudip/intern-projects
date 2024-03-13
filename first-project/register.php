<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <section>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 mt-5">
					<div class="card">
						<div class="card-header bg-success">
							<span class="text-white">Admin Registration</span>						
						</div>
						<div class="card-body">
							<form action="register_post.php" method="post">
								<div class="mb-3">
									<input class="form-control" type="text" name="user_name" placeholder="Name" 
									value="<?php if (isset($_SESSION['old_name'])) { 
										echo $_SESSION['old_name']; 
									 } ?>">
									<?php if (isset($_SESSION['name_error'])) { ?>
										<div class="alert alert-danger">
											<?= $_SESSION['name_error'] ?>
										</div>
									<?php } ?>
								</div>
								<div class="mb-3">
									<input class="form-control" type="email" name="email" placeholder="Email"
									value="<?php if (isset($_SESSION['old_email'])) { 
										echo $_SESSION['old_email']; 
									 } ?>">
									<?php if (isset($_SESSION['email_error'])) { ?>
										<div class="alert alert-danger">
											<?= $_SESSION['email_error'] ?>
										</div>
									<?php } ?>
								</div>
								<div class="mb-3">
									<input class="form-control" type="password" name="password" placeholder="Password"
									value="<?php if (isset($_SESSION['old_password'])) { 
										echo $_SESSION['old_password']; 
									 } ?>">
									<?php if (isset($_SESSION['password_error'])) { ?>
										<div class="alert alert-danger">
											<?= $_SESSION['password_error'] ?>
										</div>
									<?php } ?>
								</div>
								<div class="mb-3">
									<input class="form-control" type="text" name="role" value="admin">
								</div>
								<button type="submit" class="btn btn-primary">Register</button>
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
<?php
session_unset();
?>
