<?php
/**
 * Created by IntelliJ IDEA.
 * User: The Emperor
 * Date: 3/29/2018
 * Time: 2:36 PM
 */

require_once ('../../private/initialize.php');

$session->logout();
redirect_to(url_for('/index.php'));