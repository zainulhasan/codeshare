<?php
require ('config.php');
$error="";
$name="";
$password="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $connection=mysqli_connect($config['DB_HOST'],$config['DB_USER'],$config['DB_PASSWORD'],$config['DB_NAME']);
    $email=$_POST['email'];
    $sql="SELECT * FROM user WHERE email='$email'";
    $result=$connection->query($sql);
    if($result->num_rows ==1){

       while($row=$result->fetch_assoc()){

        if($row['email']==$email){

            $name=$row['name'];
            $password=$row['password'];
            header('location:login.php');
            exit;

           }else{

                $error="Invalid Email";

           }
       }


        $to      = $email;
        $subject = 'Forget Password';
        $message = 'Name: '.$name.'\n'.'Email : '. $email . '\n' .'Password: '. $password;
       // mail($to, $subject, $message);
    }

    else{


    }



    $connection->close();

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