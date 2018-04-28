<?php
/**
 * Created by IntelliJ IDEA.
 * User: The Emperor
 * Date: 3/29/2018
 * Time: 2:36 PM
 */

require_once ('../../private/initialize.php');

$errors = [];
$nickname = '';
$password = '';

if(is_post_request()){
    $nickname = $_POST['nickname'] ?? '';
    $password = $_POST['password'] ?? '';

    if(is_blank($nickname)) {
        $errors[] = "Username cannot be blank.";
    }
    if(is_blank($password)) {
        $errors[] = "Password cannot be blank.";
    }

    if(empty($errors)){
        $user = User::find_by_nickname($nickname);

        if($user != false && $user->verify_password($password)){
            $session->login($user);
            redirect_to(url_for('/index.php'));
        }else{
            $errors[] = "Log in was unsuccessful.";
        }
    }
}
?>

<?php $page_title = "Log in"; ?>
<?php include (SHARED_PATH . "/pub_header.php"); ?>

<div id="content">
    <?php echo display_errors($errors); ?>

    <form action="login.php" method="post">
        Nickname:<br/>
        <input type="text" name="nickname" value="<?php echo h($nickname); ?>"> <br/>

        Password:<br/>
        <input type="password" name="password" value=""> <br/>
        <input type="submit" name="submit" value="Log In">
    </form>
</div>

<?php include (SHARED_PATH . "/footer.php"); ?>
