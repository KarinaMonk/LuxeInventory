<?php
    session_start();
    require 'connection.php';
    require 'session_check.php';

    $add_success = 0;


    if(isset($_POST['Add_Product']))
    {
        
        $Product_name = $_POST['Product_Name'];
        
        

        $add_products="INSERT INTO products (ProductID, Product_Name) VALUES ('','$Product_name')";
        $add_query = mysqli_query($con,$add_products) or die("Add Product Failed");

        if($add_query)
        {
            $add_success = 1;
        } 
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Add Product</title>    
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
    </head>
    <body>

        <div class="page-wrapper" id="page-wrapper">
            <?php require 'sidebar.php'; ?><!-- page-aside end-->
            <main class="content">
                <?php require 'header.php'; ?>
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
                                                <h3>Add Product</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex justify-content-end h-md-down">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb no-padding bg-trans mb-30">
                                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-Home mr-2 fs14"></i></a></li>
                                        <li class="breadcrumb-item">Pages</li>
                                        <li class="breadcrumb-item active">Add Product</li>
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
                                <div class="portlet-box portlet-gutter ui-buttons-col mb-30">
                                    <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                                        <div class="flex d-flex flex-column">
                                            <h3>Add Product</h3> 
                                            <?php if($add_success == 1){ ?>
                                            <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                                                <strong>Success!</strong> Product Added.
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                        <?php $add_success = 0; } ?>
                                        </div>
                                    </div>
                                    <form method="POST">
                                        <div class="portlet-body">
                                            <div class="form-group">
                                                <label>Product Name</label>
                                                <input type="text" class="form-control form-control-lg" placeholder="Product Name" name="Product_Name">
                                            </div>
                                           
                                            
                                            
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary mr-1 mb-2" name="Add_Product" value="Add Product">
                                            </div>
                                        </div>
                                    </form>
                                </div><!--portlet-->
                               
                            </div>
                           <div class="col-lg-6">
                                <div class="page-content">
                    <div class="container-fluid">
                          
                            
                        </div>
                    </div>
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
        <!-- Required datatable js -->
        <script type="text/javascript" src="data-tables/jquery.dataTables.min.js"></script> 
        <script type="text/javascript" src="data-tables/dataTables.bootstrap4.min.js"></script> 
        <script type="text/javascript" src="data-tables/dataTables.responsive.min.js"></script> 
        <script type="text/javascript" src="data-tables/responsive.bootstrap4.min.js"></script> 
        <script src="js/plugins-custom/datatables-custom.js"></script>
    </body>
</html>
