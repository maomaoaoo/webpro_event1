<?php

function getConnection():mysqli
{
    $hostname = '';
    $dbName = '';
    $username = '';
    $password = '';
    $conn = new mysqli($hostname, $username, $password, $dbName);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

require_once DATABASE_DIR . '/user.php';