<?php
    include('config.php');
    $site="http://localhost/codeshare/display.php?id=";
    if (isset($_GET['id'])) {
        $connection=mysqli_connect(
            $config['DB_HOST'],
            $config['DB_USER'],
            $config['DB_PASSWORD'],
            $config['DB_NAME']
        );
        $id=$_GET['id'];
        $query="SELECT data from code where iid='$id'";
        $result=$connection->query($query);
        if($result){
            $row=$result->fetch_array();
            $tmp=str_replace(")",")<br/>",$row['data']);
            
          
        }else{
            echo "<h1> Error </h1>";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Codeshare</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="js/respond.js">
    <style>
        
        body{
            background-color: #333333;
        }
        
        
        #data{
            
            padding: 20px;
            width: 700px;
            margin: 50px auto;
            
        }
        
        
        
       
        .url_txt{
            background-color: #DCDCDC;
            padding: 5px;
            
        }
    
    </style>
    <body>
      
    <div class="container" >
       
        <pre id="data">
            <p class="url_txt"><a href="<?php echo $site.$id;?>"><?php echo $site.$id;?></a></p>
            <?php echo $tmp; ?>;
        </pre>
    </div>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    </script>
    </body>
</html>