<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "kriptografi";

    $connection = new mysqli($hostname, $username, $password, $database);

    if($connection -> connect_error){
        die('Connection errror'. $connect_error);
    }
?>