<?php

// Users

function find_all_users(){
    global $db;

    $sql  = "SELECT * FROM users ";
    $sql .= "ORDER BY id ASC";

    $result = mysqli_query($db, $sql);
    confirm_query_result($result);
    return $result;
}

function find_user_by_id($id){
    global $db;

    $sql  = "SELECT * FROM users ";
    $sql .= "WHERE id='" . db_escape($db, $id['id']) . "'";

    $result = mysqli_query($db, $sql);
    confirm_query_result($result);
    $user = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $user;
}

function insert_user($user){
    global $db;

    $sql  = "INSERT INTO users ";
    $sql .= "(username, email, password) ";
    $sql .= "Values (";
    $sql .= "'" . db_escape($db, $user['username']) . "',";
    $sql .= "'" . db_escape($db, $user['email']) . "',";
    $sql .= "'" . db_escape($db, $user['password']) . "'";
    $sql .= ")";

    $result = mysqli_query($db, $sql);

    if($result){
        return true;
    }else{
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
}