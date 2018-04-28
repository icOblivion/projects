<?php
/**
 * Created by IntelliJ IDEA.
 * User: The Emperor
 * Date: 3/30/2018
 * Time: 4:54 PM
 */

// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if (!isset($user)) {
    redirect_to(url_for('/index.php'));
}
?>

<dl>
    <dt>Nickname</dt>
    <dd><input type="text" name="user[nickname]" value="<?php echo h($user->nickname); ?>"/></dd>
</dl>

<dl>
    <dt>Email</dt>
    <dd><input type="text" name="user[email]" value="<?php echo h($user->email); ?>"/></dd>
</dl>

<dl>
    <dt>Password</dt>
    <dd><input type="password" name="user[password]" value=""/></dd>
</dl>

<dl>
    <dt>Confirm Password</dt>
    <dd><input type="password" name="user[confirm_password]" value=""/></dd>
</dl>