<?php
    require ('config.php');
    $connection=mysqli_connect($config['DB_HOST'],$config['DB_USER'],$config['DB_PASSWORD'],$config['DB_NAME']);

    function get_name_by_email($email){
        global $connection;
        $sql="SELECT name FROM user WHERE email='$email'";
        $result=$connection->query($sql);
        if($result->num_rows ==1){
            $row=$result->fetch_array();
            return $row['name'];
        }else{
            return null;
        }


    $connection->close();

}

?>