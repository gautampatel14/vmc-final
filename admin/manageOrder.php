<?php
if (!session_id()) session_start();
if (!$_SESSION['login']){ 
    header("Location:index.php");
    die();
}
?>

    
    
    <!--Font-Awesome  -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel='stylesheet' href="css/manageFile.css">
    
<?php 
include "header.php";
?>

<!--main-container-part-->
<div id="content">
    
    <!--Linker  -->
    <div id="content-header">
        <div id="breadcrumb"><a href="manageOrder.php" class="tip-bottom"><i class="icon-home"></i>
            ManageOrder</a></div>
    </div>

    

    <!--Action boxes-->
    <div class="container-fluid">

      <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
            

        <div class="box-body">
            <table  class="table table-responsive  table-bordered table-hover text-center" id="tableManage" style="">

            <thead>
              <tr>
                  <th scope="col">Bill No</th>
                  <th scope="col">Client Name</th>
                  <th scope="col">Contact</th>
                  <th scope="col">DateTime</th>
                  <th scope="col">Prod.Qty</th>
                  <th scope="col">Price</th>
                  <th scope="col">Action</th>
              </tr>
              </thead>
              <tr>
                <td>101</th>
                <td>Abc</td>
                <td>909090900</td>
                <td>10/10/2023</td>
                <td>10</td>
                <td>900</td>
                
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