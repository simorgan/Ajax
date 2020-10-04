<?php
//connect to a database

   // Database login details
   define('DB_HOST', 'localhost');
   define('DB_USER', 'raspi');
   define('DB_PASS', 'Oscar2010');
   define('DB_NAME', 'personList');


$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(mysqli_connect_errno()){
    // connection failed
    echo 'Failed to connect to MySql '.  mysqli_connect_errno();
}

echo 'Processing.....';

// check for a GET variable 
/*
if(isset($_GET['name'])){
    echo 'GET: Your name is ', $_GET['name'];
}*/

// check for a POST variable 

if(isset($_POST['name'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    echo 'POST: Your name is ', $_POST['name'];

    $query = "INSERT INTO people(firstName) VALUES('$name')";

    if (mysqli_query($conn, $query)) {
        echo ' user added';
        # code...
    }else{
        'ERROR: '. mysqli_erroe($conn);
    }
}


