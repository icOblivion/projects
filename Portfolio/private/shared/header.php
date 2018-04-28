<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio <?php if (isset($page_title)) {echo '- ' . h($page_title);} ?></title>
</head>
<body>

<navigation>
    <ul>
        <?php if ($session->is_logged_in()) { ?>
            <li>User: <?php echo $session->nickname; ?></li>
            <li><a href="<?php echo url_for('/registration/logout.php'); ?>">Logout</a></li>
        <?php }else{ ?>
            <li><a href="<?php echo url_for('/registration/login.php'); ?>">Login</a></li>
            <li><a href="<?php echo url_for('/registration/register.php'); ?>">Register</a></li>
            <p class="italic">You need to be logged in to access the content bellow !</p>
        <?php }?>
    </ul>
</navigation>

<?php echo display_session_message(); ?>

