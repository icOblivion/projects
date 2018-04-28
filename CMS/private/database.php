<?php
/**
 * Created by IntelliJ IDEA.
 * User: The Emperor
 * Date: 12/18/2017
 * Time: 6:54 PM
 */

require_once ('db_credentials.php');

function db_connect(){
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    confirm_db_connect();
    return $connection;
}

function db_disconnect(){
    if(isset($connection)){
        mysqli_close($connection);
    }
}

function db_escape($connection, $string){
    return mysqli_real_escape_string($connection, $string);
}

function confirm_db_connect(){
    if(mysqli_connect_errno()){
        $msg  = "Database failed to connect: ";
        $msg .= mysqli_connect_error();
        $msg .= " (" . mysqli_connect_errno() . ")";
        exit($msg);
    }
}

function confirm_query_result($result_set){
    if(!$result_set){
        exit("Database query result failed.");
    }
}