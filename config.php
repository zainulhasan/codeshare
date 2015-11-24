<?php

    $host="localhost";
    $username="codeshare";
    $password="codeshare";
    $database="codeshare";

    $connection=mysqli_connect(
        $host,
        $username,
        $password,
        $database
    );

    if(!$connection){

        die("Failed to connect to database".mysqli_connect_errno());
    }

    else{

        echo "Database connected .";
    }
?>