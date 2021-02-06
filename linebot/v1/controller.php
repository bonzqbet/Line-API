<?php

$conn = new mysqli("db-mysql-sgp1-22903-do-user-7425484-0.b.db.ondigitalocean.com:25060", "doadmin", "d9vh4gnoi1ubpeby", "coinmaster");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query("SET NAMES UTF8");

if (isset($_GET['action'])) {
    switch (trim($_GET['action'])) {
        case 'line':
            require 'Line/config.php';
            require 'function.php';
            require 'line.php';
            break;
    
        default:
            echo json_encode(array('status' => false, 'msg' => 'Not Found: action'));
            exit(0);
            break;
    }
} else {
    echo json_encode(array('status' => false, 'msg' => 'Not Params: action'));
    exit(0);
}
