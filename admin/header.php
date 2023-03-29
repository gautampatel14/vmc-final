<!DOCTYPE html>
<html lang="en">
<head>
    <title>Store Module</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Bootstrap links -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="css/fullcalendar.css"/>
    <link rel="stylesheet" href="css/matrix-style.css"/>
    <link rel="stylesheet" href="css/matrix-media.css"/>
    <link rel="stylesheet" href="css/header.css"/>
    
    <!--Font-Awesome  -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/jquery.gritter.css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  

</head>

<body>

    <div id="header">

        <h2 style="color: white;position: absolute">
            <span style="color:white;margin-left:30px;  margin-top:40px;">Store</span>
        </h2>

    </div>

    <!--sidebar-menu-->
    <div id="sidebar">
        <ul>
            <li class="active">
                <a href="dashboard.php"><i class="icon icon-home"></i><span>Dashboard</span></a>
            </li>

            <li class="submenu"><a href="#"><i class="icon icon-th-list"></i> <span>Product</span> </a>
                
                <ul>
                    <li><a href="addProduct.php">Add Product</a></li>
                    <li><a href="manageProduct.php">Manage Product</a></li> 
                </ul>

            </li>

            <li class="submenu"><a href="#"><i class="icon icon-th-list"></i> <span>Order</span> </a>
                
                <ul>
                    <li><a href="addOrder.php">Add Order</a></li>
                    <li><a href="manageOrder.php">Manage Order</a></li> 
                </ul>

            </li>

        </ul>
    </div>
    <!--sidebar-menu-->

    <div id="search" style="font-size:14px;margin-right:7px;font-weight:520">
        <a href="logout.php" style="color:white"><i class='fa fa-sign-out red-color' style="color:#f64d4d;font-size:20px"></i><span>Logout</span></a>
    </div>

<body>