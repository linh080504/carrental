<?php
define('hostName', "localhost");
define('userName', "root");
define('passWord', "");
define('databaseName', "httxe");

function db_connect(){
    $conn = new mysqli(hostName, userName, passWord, databaseName);
    if($conn->connect_error){
        die('database error'. $conn->connect_error);
    }
    return $conn;
}

function db_close($conn){
    $conn->close();
}
?>