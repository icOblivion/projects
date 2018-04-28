<?php
/**
 * Created by IntelliJ IDEA.
 * User: The Emperor
 * Date: 3/30/2018
 * Time: 4:14 PM
 */

require_once ('../../private/initialize.php'); ?>

<?php
if(is_post_request()){
    $args = $_POST['user'];
    $user = new User($args);
    $result = $user->save();

    if($result === true){
        //$new_id = $user->id;
        $session->message('The user was created successfully');
        redirect_to(url_for('/registration/login.php')); // $new_id
    }else{
        // show errors
    }
}else{
    $user = new User;
}

?>

<?php $page_title = 'Register'; ?>
<?php include (SHARED_PATH . '/pub_header.php'); ?>

<div id="content">
    <a class="back-link" href="<?php echo url_for('/index.php'); ?>">&laquo; Back to List</a>

    <div class="new user">
        <h1>Create User</h1>
        <?php echo display_errors($user->errors); ?>

        <form action="<?php echo url_for('/registration/register.php'); ?>" method="post">
            <?php include ('form_fields.php'); ?>

            <div id="operations">
                <input type="submit" value="Register User">
            </div>
        </form>
    </div>
</div>

<?php include (SHARED_PATH . '/footer.php'); ?>
