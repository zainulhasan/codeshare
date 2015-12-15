<?php
include('config.php');
session_start();
$val;
if(isset($_SESSION['email'])){
    
    $connection=mysqli_connect(
        $config['DB_HOST'],
        $config['DB_USER'],
        $config['DB_PASSWORD'],
        $config['DB_NAME']);

    $email=$_POST['email'];
    
    $sql="SELECT id from user where email='$email'";
    $result=$connection->query($sql);
    
    while($row=$result->fetch_assoc()){
        
        $val=$val+$row['id'];
        
    }
    echo "</ul>";

       ;
}else{
    
    header("location:login.php");
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
       .email{
           float :left;
           color:#fff;
           margin: 6px 20px;
        }
        
        .email p{
            font-size: 15px;
            font-weight: 600;
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
            
            
            <div class="email"><p>Hassan9224@gamil.com</p></div>
            <button class="btn btn-default" id="share-btn" style="background-color: #EC3360;border-color:                  #ea1c4e;text-align: center;width:130px;height: 35px;" onclick="refir();">Share Code</button>
            <button class="btn btn-default" id="logout_btn" onclick=redirect();>Logout</button>
        </div>

    </div>
</header>
</div>
  </div>
</div>

<div class="container">
    <h1 style="color:#fff;"><?php echo $val;?></h1>
</div>

<!-- JavaScript-->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="src/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="js/script.js"></script>
<script>
    function redir(){
        
        <?php echo "location.href='home.php'";?>
    }
    
    function redirect(){

        <?php echo "location.href='logout.php'";?>
    }

</script>
</body>
</html>