<?php
include('function.php');
include('config.php');
$name="";
$site="http://localhost/codeshare/display.php?id=";
$btn_value="Login";


if(isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $btn_value = "Logout";

}

if (isset($_GET['id'])) {
    $connection=mysqli_connect(
        $config['DB_HOST'],
        $config['DB_USER'],
        $config['DB_PASSWORD'],
        $config['DB_NAME']
    );
    $id=$_GET['id'];
    $query="SELECT * from code where iid='$id'";
    $result=$connection->query($query);
    if($result){
        $row=$result->fetch_array();
        $tmp=$row['data'];
        $username=$row['email'] ;
        $date=$row['date'];
        $title=$row['subject'];
        $name = get_name_by_email($username);
        if(empty($tmp)){
            $tmp="<h1> Item Not Found in Database </h1>";
            $site="";
            $id="";
        }


    }else{
        echo "<h1> Error </h1>";

    }
}else{

    $tmp="<h1 style='text-align: center;'>No Item to Display.</h1>";
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Codeshare</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="js/respond.js">

    <style>

        pre{
            background-color: #fff;
        }
        body{
            background-color: #fff;;
        }

        .header-main{
            height:55px;
        }
        #current_user{

            background-color: transparent;
            border-color: transparent;
            text-align: center;
            width:200px;
            height: 35px;
            font-size:17px;
        }

        #current_user:hover{

            color:#fff;

        }
        #current_user:hover {
            cursor: pointer;

        }

        #main{
            background-color: #fff;
        }


        .container{
            background-color: #DFF0D8;
            margin-top: 40px;
        }
    </style>

</head>
<body>

<!-- header -->
<header>
    <div class="header-main">

        <div class="logo logo-home">
            <a href="index.php"><img src="img/logo.png" alt="logo"></a>
        </div>


        <div class="nav-main">
            <button class="btn btn-default" id="current_user" onclick="user();"><?php echo $name ;?></button>
            <button class="btn btn-default" id="share-btn" style="background-color: #EC3360;border-color: #ea1c4e;text-align: center;width:130px;height: 35px;">Share Code Now</button>
            <button class="btn btn-default" id="logout_btn" onclick=redirect();><?php echo $btn_value;?></button>
        </div>

    </div>
</header>
</div>


<div class="main">
    <div class="container">
        <div class="alert alert-success">
            <p>Subject: <?php echo $title;?></p>
            <p>Auther: <?php echo $name;?></p>
            <p>Date: <?php echo $date;?></p>
        </div>

        <pre>
            <?php echo $tmp; ?>
        </pre>
    </div>
</div>






<!-- JavaScript-->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>

    $("#share-btn").click(function(){

        window.location="home.php";
    });

    function redirect(){

        <?php echo "location.href='logout.php'";?>
    }
    function user(){

        <?php echo "location.href='user.php'";?>
    }

</script>
</body>
</html>