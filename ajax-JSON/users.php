<?php
//connect to a database

   // Database login details
   define('DB_HOST', 'localhost');
   define('DB_USER', 'raspi');
   define('DB_PASS', 'Oscar2010');
   define('DB_NAME', 'ajaxtest');


$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(mysqli_connect_errno()){
    // connection failed
    echo 'Failed to connect to MySql '.  mysqli_connect_errno();
}

$query = 'SELECT * FROM users';

//Get result
$result = mysqli_query($conn, $query);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);