<?php

include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Login</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="css/matrix-login.css"/>
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    

</head>
<body>

    <section class="vh-100" style="background-color: #ffffff;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            
              <div class="card" style="border-radius: 1rem;width: fit-content;">
                <div class="row" style="justify-content: center;">
                 
                  <div class="col-md-6 col-lg-12 align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">

                    <!-- <div class="alert alert-danger" role="alert">
                          This is a danger alert—check it out!
                    </div> -->


                      <form class="login-form" action="authentication.php" method="post">

                        <div class="d-flex align-items-center mb-3 pb-1">
                         <img src="https://www.patnalive.in/wp-content/uploads/2020/03/VMC-Vadodara.jpg" style="height: 15%;width: 15%; border-radius: 50%;">
                        
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login into your account</h5>
      
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example17">Username</label>
                            <input type="text" id="user_name" name="user" class="form-control form-control-lg" required />
                          
                        </div>
      
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example27">Password</label>
                            <input type="password" id="admin_password" name="pass"class="form-control form-control-lg" required />
                         
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button class="btn btn-lg btn-block" type="submit" name="submit" value="login" style="background-color: #0b5699; color: #ffffff;">Login</button>
                        </div>



                        <?php 

                          if(isset($_REQUEST["err"]))

                            $msg="Invalid username or Password";
                          
                          ?>
                         <p style="color:red;">
                          <?php if(isset($msg))
                          {
                            
                          echo $msg;
                          }
                          ?>

                          </p>    

                      </form>

                    </div>
                  </div>
                </div>
              </div>
            
          </div>
        </div>
      </section>


<script src="js/jquery.min.js"></script>
<script src="js/matrix.login.js"></script>

</body>

</html>
