<?php
include('function.php');
include('config.php');
$name="";
$site="display.php?id=";
$btn_value="Login";
session_start();

if(isset($_SESSION['email'])){
    $email=$_SESSION['email'];
    $btn_value="Logout";
    $name=get_name_by_email($email);

    $connection=mysqli_connect($config['DB_HOST'],$config['DB_USER'],$config['DB_PASSWORD'],$config['DB_NAME']);
    if($connection){
        $sql="SELECT * FROM code where email='$email'";
        $result=$connection->query($sql);
        $sub=array();
        $ids=array();
        while($row=$result->fetch_assoc()){

            $ids[]=$row['iid'];
            $sub[] =$row['subject'];
        }
    }

}else{

    header('Location:login.php');
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
            <button class="btn btn-default" id="current_user" disabled><?php echo $name ;?></button>
            <button class="btn btn-default" id="share-btn" style="background-color: #EC3360;border-color: #ea1c4e;text-align: center;width:130px;height: 35px;">Share Code Now</button>
            <button class="btn btn-default" id="logout_btn" onclick=redirect();><?php echo $btn_value;?></button>
        </div>

    </div>
</header>
</div>


<div class="main">
   <div class="container">
       <h1>Welcome! <?php echo $name ;?></h1>
       <ol class="list-group">
           <?php

          if(count($ids)==0){

              echo "<h1>No Item to Display.</h1>";
          }else{

              for($i=0;$i<count($ids);$i++){
                  $full_site=$site.$ids[$i];
                  $title=$sub[$i];
                  $id=$i+1;
                  echo "<a href=\"$full_site\" class=\"list-group-item\" target=\"_blank\">$id. $title</a>";
              }

          }

           ?>

       </ol>
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

</script>
</body>
</html>