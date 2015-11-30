<?php
    function db_connect($email,$secret){
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

            $sql="SELECT * FROM user WHERE UPPER (email)== '$email' AND UPPER (password) == '$secret'";
            $result = $connection->query($sql);
            if (count($result)==1) {

                return true;
            }else{
                return false;
            }
        }
        $connection->close();
    }
?>