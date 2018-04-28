<?php include_once ('../private/initialize.php'); ?>
<?php require_once (SHARED_PATH . '/header.php'); ?>

<div id="main">
    <p><a href="<?php echo url_for('/users/register.php'); ?>">Register as user</a></p>
    <p><a href="<?php echo url_for('/users/login.php'); ?>">Login as a user</a></p>
    <p><a href="<?php echo url_for('/users/logout.php'); ?>">Login as an admin</a></p>
</div>

<?php require_once (SHARED_PATH . '/footer.php'); ?>