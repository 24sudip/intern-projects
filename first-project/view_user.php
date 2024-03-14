<?php
session_start();
$db_connect = mysqli_connect('localhost', 'root','','first_project');
$user_details_query = "SELECT * FROM users WHERE role='user' AND delete_status='0'";
$after_details_query = mysqli_query($db_connect, $user_details_query);
$serial = 1;
require_once('header.php');
?>

<div class="col-lg-12 mt-5">
    <?php if (isset($_SESSION['user_edit'])) { ?>
        <div class="alert alert-success">
            <?= $_SESSION['user_edit'] ?>
        </div>
    <?php } unset($_SESSION['user_edit']); ?>

    <?php if (isset($_SESSION['register_success'])) { ?>
        <div class="alert alert-success">
            <?= $_SESSION['register_success'] ?>
        </div>
    <?php } unset($_SESSION['register_success']); ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">SL</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($after_details_query as $after_details_item):?>
            <tr>
                <th scope="row"><?= $serial++?></th>
                <td><?= $after_details_item['user_name']?></td>
                <td><?= $after_details_item['email']?></td>
                <td><?= $after_details_item['role']?></td>
                <td>
                    <a href="edit_user.php?edit_user_id=<?= $after_details_item['user_id']?>" class="btn btn-primary">Edit</a>
                    <a href="delete_user.php?delete_user_id=<?= $after_details_item['user_id']?>" class="btn btn-danger">Hard-Delete</a>
                    <a href="soft_delete_user.php?softdel_user_id=<?= $after_details_item['user_id']?>" class="btn btn-warning">Soft-Delete</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<div class="col-lg-12">
    <a href="dashboard.php" class="btn btn-success">Dashboard</a>
</div>
<?php
require_once('footer.php');
$_SESSION['soft_delete_time'] = date("Y-m-d H:i:s");
?>
