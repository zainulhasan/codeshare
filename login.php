<?php
require ('functions.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username="";
    $password="";

    $username=$_POST['email'];
    $password=$_POST['password'];

    $tmp  = "Username: ";
    $tmp .= $username;
    $tmp .= " ";
    $tmp .= "Password: ";
    $tmp .= $password ;
    $tmp .= " ";

    print_login_value($tmp);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in - Codeshare</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="js/respond.js">


</head>
<body>

<!-- header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-6 logo" >
                <a href="index.php"><img src="img/logo.png" alt="logo"></a>
            </div>
            <div class="col-md-6  signup">
                <button class="btn btn-default" onclick="location.href='signup.php';"
>Sign up</button>
            </div>
        </div>
    </div>
</header>


<!-- main -->
<main>
    <div class="container">
        <h1 class="is-tile heading">Log in to access your saved code</h1>

            <!-- Signup from -->

        <form class="login-form-container form" action="login.php" method="post">
            <div class="full-width">
            <span id="error" style="display:none"></span>
                <div class="form-field">
                    <input type="email" name="email" placeholder="Email" required autofoucs>
                </div>
                <div class="form-field">
                    <input type="password" name="password" placeholder="Password" required autofoucs>
                </div>
                <button type="submit" class="btn btn-primary">Log In</button>
            </div>
        </form>
        <p id="forget" class="forget" >Forget?&nbsp;<a href="forget.php" on>Rest your password.</a></p>

    </div>

</main>

<!-- JavaScript-->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>