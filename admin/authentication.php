<?php      

    session_start ();

    include ("connection.php");

    if(isset($_POST['submit'])){


        $username = $_POST['user'];  
        $password = $_POST['pass'];  

        // $username = stripcslashes($username); 
        // $password = stripcslashes($password);  
        // $username = mysqli_real_escape_string($conn, $username);  
        // $password = mysqli_real_escape_string($conn, $password);  
          
        $sql="SELECT * FROM `login` WHERE name='$username' and password='$password'";
        $result=mysqli_query($conn,$sql);

        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count=mysqli_num_rows($result);

        if($count==1){

            $_SESSION["login"]="1";

            $_SESSION['name']=$username;
            header("Location:dashboard.php");
        }
        else{
            header("location:index.php? err=1");

        }
    }

?>  