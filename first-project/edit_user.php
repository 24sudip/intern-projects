<?php
session_start();
require_once('header.php');
?>
<div class="col-lg-6 mt-5">
    <?php
    if (isset($_SESSION['edit_id'])) {
        $edit_user_id = $_SESSION['edit_id'];
    } else {
        $edit_user_id = $_GET['edit_user_id'];
    }
    $db_connect = mysqli_connect('localhost', 'root', '', 'first_project');
    $user_edit_select = "SELECT * FROM users WHERE user_id=$edit_user_id;";
    $user_edit_final = mysqli_query($db_connect, $user_edit_select);
    $user_edit_after_assoc = mysqli_fetch_assoc($user_edit_final);
    ?>
    <form action="edit_user_post.php" method="post">
        <div class="card">
            <div class="card-header bg-success">
                <span class="text-white">Edit User</span>
            </div>                                                   
            <div class="card-body">
                <input type="hidden" value="<?= $user_edit_after_assoc['user_id']?>" name="edit_user_id">
                <div class="col-sm-10 mb-3">
                    <input type="text" class="form-control" name="user_name" value="<?= $user_edit_after_assoc['user_name']?>"></input>
                </div>
                <div class="col-sm-10 mb-3">
                    <input type="email" class="form-control" name="email" value="<?= $user_edit_after_assoc['email']?>">
                </div>                                                                        
                <div class="col-sm-10 mb-3">
                    <input type="password" class="form-control" name="password" placeholder="New Password">
                    <?php if (isset($_SESSION['password_edit_error'])) {?>
                        <div class="alert alert-danger">
                            <?= $_SESSION['password_edit_error'] ?>
                        </div>
                    <?php } unset($_SESSION['password_edit_error']); ?>
                </div>                                                                        
                <div class="col-sm-10 mb-3">
                    <input type="text" class="form-control" name="role" value="<?= $user_edit_after_assoc['role']?>"></input>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </div>
    </form>
</div>
<div class="col-lg-12 mt-5">
    <a href="dashboard.php" class="btn btn-success">Dashboard</a>
</div>
<?php
require_once('footer.php');
?>
