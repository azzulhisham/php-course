<?php

    define('DB_HOST', 'localhost');
    define('DB_USER', 'sultan');
    define('DB_PASS', 'Az@HoePinc0615');
    define('DB_NAME', 'php_course_dev');

    //connection string
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //check connection
    if($conn->connect_error) {
        die('Connection Failed ' . $conn->connect_error);
    }

?>