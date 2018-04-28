<?php include_once('../../private/initialize.php'); ?>

<?php

$errors = [];


/*if (is_post_request()) {
    $users = [];
    $users['username'] = $_POST['username'] ?? '';
    $users['email'] = $_POST['email'] ?? '';
    $users['password'] = $_POST['password'] ?? '';

    $result = insert_user($users);
    if($result === true){
        redirect_to(url_for('/users/login.php'));
    }else{
        $errors = $result;
    }
}

?>*/

<?php require_once(SHARED_PATH . '/header.php'); ?>
    <h1>Login</h1>
    <p><?php echo display_errors($errors); ?></p>
    <div id="main">
        <form action="<?php echo url_for('/users/login.php'); ?>" method="post">
            <p>
                Username: <input type="text" name="username">
                Password: <input type="password" name="password"> <br>
                <input type="submit" value="Login">
            </p>
        </form>
    </div>
    <a href="<?php echo url_for(''); ?>">Forgot password?</a>
    <a href="<?php echo url_for('/index.php'); ?>">Go back</a>

<?php require_once(SHARED_PATH . '/footer.php'); ?>
