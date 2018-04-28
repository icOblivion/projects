<?php
/**
 * Created by IntelliJ IDEA.
 * User: The Emperor
 * Date: 3/30/2018
 * Time: 5:21 PM
 */

require_once('../../../private/initialize.php');
require_login(); ?>

<?php include(SHARED_PATH . '/header.php'); ?>
    <header>
        <a href="<?php echo url_for('/index.php'); ?>">Back to the list</a>
    </header>

    <div>
        <h1>Project #1 Welcome</h1>
    </div>

<?php include_once(SHARED_PATH . '/footer.php'); ?>