<?php

    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'root');
    define('DB_NAME', 'phpblog');
    define('ROOT_URL', 'http://localhost:8888/16-Website-Data-Fetching-with-MySQL/');

    //create connection
    $conn = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);

    //Check connection
    if(mysqli_connect_errno()){
        echo 'Failed to connect to MySQL' . mysqli_connect_errno();
    }