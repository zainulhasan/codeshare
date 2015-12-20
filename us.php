<?php
    
$conn=mysqli_connect("localhost","root","","codeshare");
if($conn){
        
    $sql="Select * from code";
    $result=$conn->query($sql);
     if ($result->num_rows > 0) {
        while($row=$result->fetch_assoc()){
            
           // echo "<a herf='"."display.php?d=".$row['iid']."'>".$row['iid']."</a>".'<br/>';
            $tmp="<a href=";
            $tmp+="display.php?d=";
            $tmp+="'>";
            $tmp+=$row['iid'];
            $tmp+="</a>";
            
            echo $tmp;
        }
     }
    
}else{
    
    echo "Db not found";
}


?>