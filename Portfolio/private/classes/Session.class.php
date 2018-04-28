<?php
/**
 * Created by IntelliJ IDEA.
 * User: The Emperor
 * Date: 3/30/2018
 * Time: 3:59 PM
 */

class Session
{
    private $user_id;
    public $nickname;
    private $last_login;

    public const MAX_LOGIN_AGE = 60 * 60 * 24;

    public function __construct()
    {
        session_start();
        $this->check_stored_login();
    }

    public function login($user)
    {
        if ($user) {
            session_regenerate_id();
            $this->user_id = $_SESSION['user_id'] = $user->id;
            $this->nickname = $_SESSION['nickname'] = $user->nickname;
            $this->last_login = $_SESSION['last_login'] = time();
        }
    }

    public function is_logged_in()
    {
        return isset($this->user_id) && $this->last_login_is_recent();
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['nickname']);
        unset($_SESSION['last_login']);
        unset($this->user_id);
        unset($this->nickname);
        unset($this->last_login);
        return true;
    }

    private function check_stored_login()
    {
        if (isset($_SESSION['user_id'])) {
            $this->user_id = $_SESSION['user_id'];
            $this->nickname = $_SESSION['nickname'];
            $this->last_login = $_SESSION['last_login'];
        }
    }

    private function last_login_is_recent()
    {
        if (!isset($this->last_login)) {
            return false;
        } elseif (($this->last_login + self::MAX_LOGIN_AGE) < time()) {
            return false;
        } else {
            return true;
        }
    }

    public function message($msg = "")
    {
        if (!empty($msg)) {
            $_SESSION['message'] = $msg;
            return true;
        } else {
            return $_SESSION['message'] ?? '';
        }
    }

    public function clear_message()
    {
        unset($_SESSION['message']);
    }
}