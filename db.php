<?php

    $username="";
    $password="";

    $username=$_POST['email'];
    $password=$_POST['password'];

    $tmp  = "Username: ";
    $tmp .= $username;
    $tmp .= "<br />";
    $tmp .= "Password: ";
    $tmp .= $password ;

    echo $tmp;

?>