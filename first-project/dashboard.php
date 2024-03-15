<?php
session_start();
if (isset($_SESSION['login_email'])) {
    echo "<h2>Valid Account</h2>";
} else {
    header('location: error.php');
}
$_SESSION['dashboard_confirm'] = 'Yes';
$email = $_SESSION['login_email'];
$db_connect = mysqli_connect('localhost', 'root','','first_project');
$user_details_query = "SELECT * FROM users WHERE email='$email'";
$after_details_query = mysqli_query($db_connect, $user_details_query);
$after_details_assoc = mysqli_fetch_assoc($after_details_query);

if ($after_details_assoc['role'] == 'user') {
    $_SESSION['dashboard_role'] = 'user';
    $_SESSION['user_id'] = $after_details_assoc['user_id'];
    header('location: user_dashboard.php');
} else {
    $_SESSION['dashboard_role'] = 'admin';
    echo "<h1>For Admin</h1>";
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
                    <div class="col-lg-3">
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      List of soft-deletes 
                      </button>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <?php
                                      $db_connect = mysqli_connect('localhost', 'root','','first_project');
                                      $user_softdel_query = "SELECT * FROM users WHERE role='user' AND delete_status='1'";
                                      $after_softdel_query = mysqli_query($db_connect, $user_softdel_query);
                                      $serial2 = 1;
                                      ?>
                                      <table class="table">
                                          <thead>
                                              <tr>
                                                  <th scope="col">SL</th>
                                                  <th scope="col">Name</th>
                                                  <th scope="col">Email</th>
                                                  <th scope="col">Soft Delete Time</th>
                                                  <th scope="col">Action</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <?php foreach($after_softdel_query as $after_softdel_item):?>
                                              <tr>
                                                  <th scope="row"><?= $serial2++?></th>
                                                  <td><?= $after_softdel_item['user_name']?></td>
                                                  <td><?= $after_softdel_item['email']?></td>
                                                  <td><?= $after_softdel_item['soft_delete_time']?></td>
                                                  <td>                                   
                                                      <a href="undo_soft_delete.php?softdel_user_id=<?= $after_softdel_item['user_id']?>" class="btn btn-warning">Undo</a>
                                                  </td>
                                              </tr>
                                              <?php endforeach;?>
                                          </tbody>
                                      </table>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
