<?php include_once('../../private/initialize.php'); ?>

<?php

if (is_post_request()) {
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

?>

<?php require_once(SHARED_PATH . '/header.php'); ?>
    <h1>Register</h1>
    <p><?php echo display_errors($errors); ?></p>
    <div id="main">
        <form action="<?php echo url_for('/users/register.php'); ?>" method="post">
            <p>
                Username: <input type="text" name="username">
                Email: <input type="email" name="email">
                Password: <input type="password" name="password"> <br>
                <input type="submit" value="Register">
            </p>
        </form>
    </div>
    <a href="<?php echo url_for('/index.php'); ?>">Go back</a>

<?php require_once(SHARED_PATH . '/footer.php'); ?>