<?php
    session_start();
    require 'connection.php';
    require 'session_check.php'; 
    $u_id = $_SESSION['U_ID'];
    
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dashboard</title>    
        <!-- Bootstrap-->
        <link href="lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--Common Plugins CSS -->
        <link href="css/plugins/plugins.css" rel="stylesheet">
        <!--fonts-->
        <link href="lib/line-icons/line-icons.css" rel="stylesheet">
        <link href="lib/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
        <link href="lib/dt-picker/jquery.datetimepicker.min.css" rel="stylesheet">
        <link href="lib/select2/dist/css/select2.min.css" rel="stylesheet">
        <link href="lib/chartist/chartist.min.css" rel="stylesheet" />
        <link href="css/chartist-custom.css" rel="stylesheet" />
        <link href="css/picker-custom.css" rel="stylesheet" />
        <link href="css/select2-custom.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body class="bg-white">

        <div class="page-wrapper" id="page-wrapper">
           <?php require 'sidebar.php'; ?>
           <!-- page-aside end-->
            <main class="content">
                <?php require 'header.php'; ?>

                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row align-items-center mb-30 pt-30">
                            <div class="col-md-12 mr-auto ml-auto">
                                <div class="mb-0">
                                    <!-- <a href='#' class='float-right btn btn-sm btn-info btn-icon'><i class="fa fa-cog mr-2"></i>View Settings</a> -->
                                  
                                    
                                </div>

                                <?php
                                        
                                        $Orders = "SELECT SUM(Purchase_Amount) FROM purchases";
                                        $Orders_query = mysqli_query($con,$Orders) or die("Cant Fetch Stock");
                                        $stock_list=mysqli_fetch_assoc($Orders_query);
                                        ?> 
                                  




                          
</div>                               
</div>                    
<style>
.row {
  display: flex;
}

.column {
  flex: 33.33%;
  padding: 5px;
}



</style>
<div class="row">
  <div class="column">
  <a href="CatoSuites.php">  <img src="images/CatoSuites.jpg" alt="Cato suites" style="width:100%"></a>
  </div>
  <div class="column">
  <a href="LuxeFlorida.php">  <img src="images/LuxeFlorida.jpg" alt="Luxe Florida" style="width:100%"></a>
  </div>
  <div class="column">
   <a  href="LuxeMusgrave.php"> <img src="images/LuxeMusgrave.jpg" alt=" Luxe Musgrave"  Style="width:100%"></a>
  </div>
  <div class="column">
  <a href="CasaDeLuxe.php">  <img src="images/CasaDeLuxe.jpg" alt="CasaDeLuxe" style="width:100%"></a>
  </div>
  <div class="column">
  <a href="LuxeOnRidge.php">  <img src="images/LuxeOnRidge.jpg" alt="LuxeOnRidge" style="width:100%"></a>
  </div>
  <div class="column">
   <a href="LuxeSuites.php"> <img src="images/LuxeSuites.jpg" alt=" LuxeSuites"  Style="width:100%"></a>
  </div>


</div>
</div>



                                        </div>
                                    </div>
                                </div><!--portlet-->
                            </div><!--col-->
                        </div>
                    </div>
                </div>
            </main><!-- page content end-->
        </div><!-- app's main wrapper end -->
        <!-- Common plugins -->
        <script type="text/javascript" src="js/plugins/plugins.js"></script> 
        <script type="text/javascript" src="js/appUi-custom.js"></script> 
         <script src="lib/chartist/chartist.min.js"></script>
        <script src="lib/chartist/chartist-tooltip.js"></script>
        <script type="text/javascript" src="lib/peity/jquery.peity.min.js"></script>
        <script type="text/javascript" src="lib/dt-picker/jquery.datetimepicker.full.min.js"></script>
        <script src="lib/select2/dist/js/select2.min.js"></script>
        <script type="text/javascript" src="js/dashboard.custom.js"></script> 
    </body>
</html>

