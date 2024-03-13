<?php
session_start();
require_once('header.php');
?>
<div class="col-lg-6 mt-5">
    <div class="card">
        <div class="card-header bg-success">
            <span class="text-white">User Registration</span>						
        </div>
        <div class="card-body">
            <form action="add_user_post.php" method="post">
                <div class="mb-3">
                    <input class="form-control" type="text" name="user_name" placeholder="Name" 
                    value="<?php if (isset($_SESSION['old_name'])) { 
                        echo $_SESSION['old_name']; 
                        } ?>">
                    <?php if (isset($_SESSION['name_error'])) { ?>
                        <div class="alert alert-danger">
                            <?= $_SESSION['name_error'] ?>
                        </div>
                    <?php } unset($_SESSION['name_error']); ?>
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
                    <?php } unset($_SESSION['email_error']); ?>
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
                    <?php } unset($_SESSION['password_error']); ?>
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" name="role" value="user">
                </div>
                <input class="form-control" type="hidden" name="delete_status" value="hard">
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
<?php
require_once('footer.php');
?>
