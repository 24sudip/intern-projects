<?php
session_start();
if (isset($_SESSION['login_email'])) {
    echo "<h2>Valid Admin</h2>";
} else {
    header('location: error.php');
}
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
                    <h2>Your Email: <?= $_SESSION['login_email'] ?></h2>
                    <a href="logout.php" class="btn btn-info">Logout</a>
                    <!-- <div class="alert alert-success">
                    </div> -->
                    <?php  ?>
                    <?php  ?>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
