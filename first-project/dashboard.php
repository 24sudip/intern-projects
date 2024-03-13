<?php
session_start();
if (isset($_SESSION['login_email'])) {
    echo "<h2>Valid Admin</h2>";
} else {
    header('location: error.php');
}
$email = $_SESSION['login_email'];
$db_connect = mysqli_connect('localhost', 'root','','first_project');
$user_details_query = "SELECT * FROM users WHERE email='$email'";
$after_details_query = mysqli_query($db_connect, $user_details_query);
$after_details_assoc = mysqli_fetch_assoc($after_details_query);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Welcome</h1>
                    <h2>Your Name: <?= $after_details_assoc['user_name'] ?></h2>
                    <h2>Your Email: <?= $after_details_assoc['email'] ?></h2>
                    <a href="logout.php" class="btn btn-info">Logout</a>
                </div>
                <div class="col-lg-12 mt-5">
                  <div class="row">
                    <div class="col-lg-1">
                      <a href="add_user.php" class="btn btn-sm btn-primary">Add User</a>
                    </div>
                    <div class="col-lg-1">
                      <a href="view_user.php" class="btn btn-sm btn-primary">User List</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
