<?php
    include('config.php');
    session_start();
    if(isset($_POST['name'])){
    $data=$_POST['name'];
    $email=$_SESSION['email'];
    
                            
        $connection=mysqli_connect(
            $config['DB_HOST'],
            $config['DB_USER'],
            $config['DB_PASSWORD'],
            $config['DB_NAME']
        );
        
        if($connection){
            
            $query="INSERT INTO code (data,email) VALUES ('$data','$email')";
            if($connection->query($query)==true){
                echo $connection->insert_id;
            }else{
                
                echo "Noting found";
                
            }
            
        }else{
            echo "404";
        }
        
       
       
      
    }else{
        
        echo "Post not working";
    }
?>