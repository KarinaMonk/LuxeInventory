<?php
session_start();
require 'connection.php';
require 'session_check.php'; 

$success=0;
if (isset($_POST['add_purchase'])) {
    
            $OrderID=$_POST['OrderID'];
            $Product= $_POST['product'];
        
        $Purchase_Quantity = $_POST['Purchase_Quantity'];
        $Purchase_Amount = $_POST['Purchase_Amount'];



  echo   $insert="INSERT INTO purchases (OrderID,Product_Name,Purchase_Quantity,Purchase_Amount) VALUES ('$OrderID','$Product','$Purchase_Quantity','$Purchase_Amount')";
    $production_query = mysqli_query($con,$insert) or die('Order query failed');

    if ($production_query) {
        $success=1;
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Production</title>    
    <!-- Bootstrap-->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Common Plugins CSS -->
    <link href="css/plugins/plugins.css" rel="stylesheet">
    <link href="data-tables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="data-tables/responsive.bootstrap4.min.css" rel="stylesheet">
    <!--fonts-->
    <link href="line-icons/line-icons.css" rel="stylesheet">
    <link href="font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</head>
<body>

    <div class="page-wrapper" id="page-wrapper">
        <?php require 'sidebar.php';?>
        <!-- page-aside end-->
        <main class="content">
            <?php require 'header.php';?>
            <div class="page-subheader mb-30">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <div class="list">
                                <div class="list-item pl-0">
                                    <div class="list-thumb ml-0 mr-3 pr-3  b-r text-muted">
                                        <i class="icon-Folder-Pictures"></i>
                                    </div>
                                    <div class="list-body">
                                        <div class="list-title fs-2x">
                                            <h3>Add Purchase</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 d-flex justify-content-end h-md-down">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb no-padding bg-trans mb-30">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-Home mr-2 fs14"></i></a></li>
                                    <li class="breadcrumb-item">Purchase</li>
                                    <li class="breadcrumb-item active">Add Purchase</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                       
                        <div class="col-lg-6">
                             <form method="POST">
                            <div class="portlet-box portlet-gutter ui-buttons-col mb-30">
                                <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                                    <div class="flex d-flex flex-column">
                                        <h3>Add Purchase Details</h3> 
                                        <?php if($success == 1){ ?>
                                            <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                                                <strong>Success!</strong> Purchase Sheet Generated!

                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                        <?php $success = 0; } ?>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                 
                                <div class="form-group">
                                        <input type="text" name="OrderID" class="form-control" placeholder="Enter Order ID" />          
                                    </div> 
                        
                                    
                                    <?php

                                                  // SQL part
                                    $sql = mysqli_query($con, "SELECT Product_Name FROM products");
                                        $data = $sql->fetch_all(MYSQLI_ASSOC);
                                          

                                          ?>
                                   <div class="form-group">
                                        <label>Select Product</label>
                                        <select class="form-control mb-20 form-control-lg" name="product" value=''>
                                       <option value=""> </option>
                                       
                                           <?php foreach ($data as $row): ?>
                                 <option value= "<?= htmlspecialchars($row['Product_Name']) ?>">
                                 <?= htmlspecialchars($row['Product_Name']) ?>
                                      </option>
                                      <?  $row++   ?>
                                       <?php endforeach ?>
                                       
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="Purchase_Quantity" class="form-control" placeholder="Enter Purchase Quantity" />          
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="Purchase_Amount" class="form-control" placeholder="Enter Purchase Amount spent" />          
                                    </div>
                                </div>
                              
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary mr-1 mb-2" name="add_purchase" value="Generate Purchase">
                                    </div>

                                </div>

                            </div><!--portlet-->
                             </form>
                        </div>
                       
                        <div class="col-lg-6">

                            
                               
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <?php require 'footer.php'; ?>
    </main><!-- page content end-->
</div><!-- app's main wrapper end -->
<!-- Common plugins -->
<script type="text/javascript" src="js/plugins/plugins.js"></script> 
<script type="text/javascript" src="js/appUi-custom.js"></script> 
<script type="text/javascript" src="data-tables/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="data-tables/dataTables.bootstrap4.min.js"></script> 
<script type="text/javascript" src="data-tables/dataTables.responsive.min.js"></script> 
<script type="text/javascript" src="data-tables/responsive.bootstrap4.min.js"></script> 
<script src="js/plugins-custom/datatables-custom.js"></script>

</body>
</html>
