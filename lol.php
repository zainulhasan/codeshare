<?php

    session_start();

    if(isset($_SESSION['contant'])){

        echo "<script>alert('$_SESSION[contant]')</script>";
    }else{

        echo "<script>alert(not working)</script>";

    }

?>