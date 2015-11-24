<?php
require ('functions.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name="";
    $email="";
    $password="";

    $name=$_POST['full_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $tmp  = "Name: ";
    $tmp .= $name;
    $tmp .= " ";
    $tmp .= "Email: ";
    $tmp .= $email;
    $tmp .= " ";
    $tmp .= "Password: ";
    $tmp .= $password ;
    $tmp .= " ";

    print_signup_value($tmp);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - Save and share code real-time - Codeshare</title>
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
        <h1 class="is-tile heading">Sign up to save code</h1>

            <!-- Signup from -->

        <form class="login-form-container form" action="signup.php" method="post">
            <div class="full-width">
            <span id="error" style="display:none"></span>
                <div class="form-field">
                    <input type="text" name="full_name" placeholder="Enter full Name" required autofoucs>
                </div>
                <div class="form-field">
                    <input type="email" name="email" placeholder="Email" required autofoucs>
                </div>
                <div class="form-field">
                    <input type="password" name="password" placeholder="Password" required autofoucs>
                </div>
                <button type="submit" class="btn btn-primary">Log In</button>
            </div>
        </form>
        <p id="forget" class="forget" >Already have account?&nbsp;<a href="login.php" style="text-decoration: none;">Login </a></p>

    </div>

</main>

<!-- JavaScript-->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>