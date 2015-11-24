<?php
require ('functions.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email="";

    $email=$_POST['email'];

    $tmp  = "Email: ";
    $tmp .= $email;
    $tmp .= " ";


    print_forget_value($tmp);

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset password - Codeshare</title>
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
                <button class="btn btn-default" onclick="location.href='login.php';"
>Login</button>
            </div>
        </div>
    </div>
</header>


<!-- main -->
<main>
    <div class="container">
        <h1 class="is-tile heading">Forgot your password?</h1>

            <!-- Signup from -->

        <form class="login-form-container form" method="post" action="forget.php">
            <div class="full-width">
            <div class="form-field forget-p"><p>No problem, enter your email below and we'll send you instructions to reset it.</p></div>
            <span id="error" style="display:none"></span>
                <div class="form-field">
                    <input type="email"  name="email" placeholder="Email" required autofoucs>
                </div>
                <button type="submit" class="btn btn-primary">Log In</button>
            </div>
        </form>

    </div>

</main>

<!-- JavaScript-->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>