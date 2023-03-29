<?php      
    // session_start();
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "vmctest";  
      
    $conn = new mysqli($host, $user, $password, $db_name);  
   
    
    if($conn->connect_error){
        die("Error : connection error !".$conn->conncect_error);
    }
    //echo "Connection Done";
?>  