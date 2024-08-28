<?php
session_start();
require 'connection.php';
require 'session_check.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Stock Details</title>    
        <!-- Bootstrap-->
        <link href="lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--Common Plugins CSS -->
        <link href="css/plugins/plugins.css" rel="stylesheet">
        <!--fonts-->
        <link href="lib/line-icons/line-icons.css" rel="stylesheet">
        <link href="lib/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
        <link href="lib/data-tables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="lib/data-tables/responsive.bootstrap4.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

        <div class="page-wrapper" id="page-wrapper">
            <?php require 'sidebar.php'; ?>
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
                                            <i class="icon-Server-2"></i>
                                        </div>
                                        <div class="list-body">
                                            <div class="list-title fs-2x">
                                                <h3>All Stock Details</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex justify-content-end h-md-down">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb no-padding bg-trans mb-0">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-Home mr-2 fs14"></i></a></li>
                                        <li class="breadcrumb-item">Stock</li>
                                        <li class="breadcrumb-item active">View Stock </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-content">
                    <div class="container-fluid">
                          <div class="bg-white table-responsive rounded shadow-sm pt-3 pb-3 mb-30">
                              <h6 class="pl-3 pr-3 text-capitalize font400 mb-20">Current Available Stock Details</h6>
                            <table id="data-table" class="table mb-0 table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th >orderID</th>
                                        <th >Hotel Name </th>
                                        <th >Product Name</th>
                                        <th >Current Amount</th>
                                        <th >Amount Required</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $i=1;
                                        $Orders = "SELECT * FROM orders WHERE Hotel_Name = 'LuxeOnRidge'";
                                        $Orders_query = mysqli_query($con,$Orders) or die("Cant Fetch Stock");
                                        while ($stock_list=mysqli_fetch_assoc($Orders_query)) {
                                    ?>
                                    <tr>
                                    
                                       <td><?php echo $stock_list['OrderID']; ?></td>
                                       <td><?php echo $stock_list['Hotel_Name']; ?></td>
                                       <td><?php echo $stock_list['Product_Name'];  ?></td>
                                       <td><?php echo $stock_list['CurrentAmount']; ?></td>
                                       <td><?php echo $stock_list['Amount_Required']; ?></td>
                                       
                                    
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                    
                                    
                                     
                                </tbody>
                            </table>
                        </div>



                        <div class="bg-white table-responsive rounded shadow-sm pt-3 pb-3 mb-30">
                              <h6 class="pl-3 pr-3 text-capitalize font400 mb-20">Purchases For LuxeOnRidge</h6>
                            <table id="data-table" class="table mb-0 table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th >PurchaseID</th>
                                        <th >OrderID </th>
                                        <th >Product Name</th>
                                        <th >Purchase Quantity</th>
                                        <th >Purchase Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        
                                        $Purchases = "SELECT * FROM purchases INNER JOIN orders on purchases.OrderID=orders.OrderID Where orders.Hotel_Name='LuxeOnRidge'";
                                        $Purchases_query = mysqli_query($con,$Purchases) or die("Cant Fetch Stock");
                                        while ($stock_list=mysqli_fetch_assoc($Purchases_query)) {
                                    ?>
                                    <tr>
                                    
                                       <td><?php echo $stock_list['PurchaseID']; ?></td>
                                       <td><?php echo $stock_list['OrderID']; ?></td>
                                       <td><?php echo $stock_list['Product_Name'];  ?></td>
                                       <td><?php echo $stock_list['Purchase_Quantity']; ?></td>
                                       <td><?php echo $stock_list['Purchase_Amount']; ?></td>
                                       
                                    
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                    
                                    
                                     
                                </tbody>
                            </table>
                        </div>







                    </div>
                </div>
                <footer class="content-footer bg-light b-t">
                    <div class="d-flex flex align-items-center pl-15 pr-15">
                        <div class="d-flex flex p-3 ml-auto">
                            <div>
                                <a href="#" class="d-inline-flex pl-0 pr-2 b-r">Contact</a>
                                <a href="#" class="d-inline-flex pl-2 pr-2 b-r">Storage</a>
                                <a href="#" class="d-inline-flex pl-2 pr-2 ">Privacy</a>
                            </div>
                        </div>
                        <div class="d-flex flex p-3 mr-auto justify-content-end">
                            <div class="text-muted">© Copyright 2014-2018. Smart Inventory Management System</div>
                        </div>
                    </div>
                </footer>
            </main><!-- page content end-->
        </div><!-- app's main wrapper end -->
        <!-- Common plugins -->
        <script type="text/javascript" src="js/plugins/plugins.js"></script> 
        <script type="text/javascript" src="js/appUi-custom.js"></script> 
        <!-- Required datatable js -->
        <script type="text/javascript" src="lib/data-tables/jquery.dataTables.min.js"></script> 
        <script type="text/javascript" src="lib/data-tables/dataTables.bootstrap4.min.js"></script> 
        <script type="text/javascript" src="lib/data-tables/dataTables.responsive.min.js"></script> 
        <script type="text/javascript" src="lib/data-tables/responsive.bootstrap4.min.js"></script> 
        <script src="js/plugins-custom/datatables-custom.js"></script>
    </body>
</html>
