<?php

if (!session_id()) session_start();
if (!$_SESSION['login']){ 
    header("Location:index.php");
    die();
}

?>

  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"/> -->

    
    <!--Font-Awesome  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel='stylesheet' href="css/manageFile.css">
    <title>Document</title>

   

<?php 
include "header.php";
?>

<!--main-container-part-->
<div id="content">
    
      <!--Linker  -->
        <div id="content-header">
        <div id="breadcrumb"><a href="manageProduct.php" class="tip-bottom"><i class="icon-home"></i>
            ManageProduct</a></div>
    </div>

    

    <div class="container-fluid">

      <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">



    <!--SEARCH BAR  -->
       
             
    <!-- MANAGE PRODUCT TABLE  -->

    
      <div class="row height d-flex justify-content-center align-items-center">

      <div class="row">  <!--- container class exclude..--->
          <div class="col-10">

            <div class="search_bar" id="search_bar" style="">
              <i class="fa fa-search"></i>
              <input type="text" class="form-control" placeholder="Search Here">
              <span class="btn btn-primary"><i class="fas fa-search"></i></span>
            </div>

          </div>

          <div class="col-2">

          <button type="button" class="btn btn-primary" id="add-item-btn"> <a href="addProduct.php" style="color:white;"> Add Item &nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i></a></button>
        
           
        </div>
        
      </div>
      </div>
   
    

    <div class="box-body">
            <table  class="table table-responsive  table-bordered text-center" id="tableManage" style="">

            <thead>
              <tr>
                  <th scope="col">Image</th>
                  <th scope="col">Name</th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Availibility</th>
                  <th scope="col">Action</th>
              </tr>
              </thead>
              <tr>
                <td><(0_0)></th>
                <td>Blank</td>
                <td>900</td>
                <td>10</td>
                <td>Yes</td>
                <td>
                    <div class="row">
                    <div class="col-6 ">
                    <button class="action-type-btn" style="">
                    <i class="fa fa-trash " aria-hidden="true"></i>
                    </button>
                
                    </div>
                    <div class="col-6">
                    <button class="action-type-btn" id="">
                    <i class="fa fa-pencil "></i>
                    </button>
                    </div>
                </div>
                </td>
              </tr>

            </table>
          </div>
        </div>

    </div> 
    
</div>
<!--end-main-container-part-->

<!--Footer-part-->

<?php

include "footer.php";
?>