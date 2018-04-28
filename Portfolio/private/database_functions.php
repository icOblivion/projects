<?php
/**
 * Created by IntelliJ IDEA.
 * User: The Emperor
 * Date: 3/29/2018
 * Time: 2:44 PM
 */

function db_connect(){
    $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    confirm_db_connect($connection);
    return $connection;
}

function confirm_db_connect($connection){
    if($connection->connect_errno){
        $msg  = "Database query failed: ";
        $msg .= $connection->connect_error;
        $msg .= " (" . $connection->connect_errno . ")";
        exit($msg);
    }
}

function db_disconnect($connection){
    if(isset($connection)){
        $connection->close();
    }
}