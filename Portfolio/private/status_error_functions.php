<?php
/**
 * Created by IntelliJ IDEA.
 * User: The Emperor
 * Date: 3/30/2018
 * Time: 4:52 PM
 */

function require_login()
{
    global $session;
    if (!$session->is_logged_in()) {
        redirect_to(url_for('/index.php'));
    } else {

    }
}

function display_errors($errors = array())
{
    $output = '';
    if (!empty($errors)) {
        $output .= "<div class=\"errors\">";
        $output .= "Please fix the following errors:";
        $output .= "<ul>";
        foreach ($errors as $error) {
            $output .= "<li>" . h($error) . "</li>";
        }
        $output .= "</ul>";
        $output .= "</div>";
    }
    return $output;
}

function display_session_message()
{
    global $session;
    $msg = $session->message();
    if (isset($msg) && $msg != '') {
        $session->clear_message();
        return '<div id="message">' . h($msg) . '</div>';
    }
}