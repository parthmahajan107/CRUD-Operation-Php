<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'crud';

    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn) {
        echo("Could not connect to MySql: " . mysqli_connect_error());
    }   
?>