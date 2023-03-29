<?php

if (!session_id()) session_start();
if (!$_SESSION['login']){ 
    header("Location:index.php");
    die();
}

?>

    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="css/matrix-style.css"/>
    <link rel="stylesheet" href="css/matrix-media.css"/>
    <link rel="stylesheet" href="css/dashboard.css"/>


    
    
    <!--Font-Awesome  -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <!-- <link rel="stylesheet" href="css/jquery.gritter.css"/> -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
     
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>     


<?php 
include "header.php";
?>

<!--main-container-part-->
<div id="content">
  
    <div id="content-header">
        <div id="breadcrumb"><a href="dashboard.php" class="tip-bottom"><i class="icon-home"></i>
            Dashboard</a></div>
    </div>
 

    <!--Action boxes-->
    <div class="container-fluid">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
           
            <section class="content">
            

                <div class="row-field row">

                    <div class="main-box">
                   
                        <div class="small-box bg-primary">

                            <div class="inner-flex">
                                <div class="inner">
                                    <h3>10</h3>
                                    <h4><b>Total Products</b></h4>
                                </div>

                                <div class="icon bg-primary-icon">
                                    <i class="fa fa-cubes"></i>
                                </div> 
                            </div> 
                            <div class="info-link bg-primary-link">
                                <a href="manageProduct.php" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                    </div>
                    

                    <div class="main-box">
                    
                        <div class="small-box bg-green">

                            <div class="inner-flex">
                                <div class="inner">
                                    <h3>10</h3>
                                    <h4><b>Total Order</b></h4>
                                </div>

                                <div class="icon bg-green-icon">
                                    <i class="fa fa-th"></i>
                                </div>
                            </div>

                            <div class="info-link bg-green-link">
                                <a href="manageOrder.php" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>

                        </div>
                    </div>
                   
                    <div class="main-box">
                    
                        <div class="small-box bg-yellow">

                            <div class="inner-flex">
                                <div class="inner">

                                    <h3>10</h3>
                                    <h4><b>Total PaidOrder</h4></b>

                                </div>
                                <div class="icon bg-yellow-icon">
                                    <i class="fa fa-check"></i>
                                </div>
                            </div>

                            <div class="info-link bg-yellow-link">
                                <a href="#" class="small-box-footer">More Info<i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                   
                    <div class="main-box">
                    
                        <div class="small-box bg-red">

                            <div class="inner-flex">
                                <div class="inner">
                                    <h3>3</h3>
                                    <h4><b>Total UnPaid Order</b></h4>
                                </div>

                                <div class="icon bg-red-icon">
                                    <i class="fa fa-dollar"></i>
                                </div>

                            </div>

                            <div class="info-link bg-red-link">
                                <a href="#" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>

                        </div>                      
                    </div>
                           
                </div>

            </section>

           

        </div>

    </div>
</div>



<?php

include "footer.php";
?>