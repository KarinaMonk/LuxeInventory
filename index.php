<?php
        ob_start();
        session_start();
        require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login </title>
    <!-- Bootstrap-->
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


    <body class='bg-white'>


        <div class="page-wrapper" id="page-wrapper">

            <main class="content">

                <div class="container-fluid flex d-flex">
                    <div class='row flex align-items-center'>
                        <div class='col-lg-6 d-flex flex h-lg-down  full-height bg-pattern bg-fHeight' >
                        <img src="/images/luxe logo.svg" alt="luxe logo">
                        </div>
                        <div class='col-lg-3 col-md-5 col-sm-6 ml-auto flex d-flex mr-auto full-height pt-40 pb-20'>
                            <div class="w100 d-block">
                                
                                <div class="title-sep text-center sep-white mt-20 mb-30">
                                <br>
                                <br>
                                <br>
                                <br>
                                 <br>
                                <br>    
                                <span class='font600 fs16 text-dark'>Sign In</span>

                                </div>
                                <?php
                                 if(isset($_POST['submit']))
                                {
                                    $query = mysqli_query($con,"select * from users where U_Email='".$_POST['Email']."' and U_Password='".$_POST['Password']."'  ");
                                    $row = mysqli_num_rows($query);

                                    if($row>0)
                                    {
                                        $data = mysqli_fetch_array($query);
                                        $_SESSION['U_Email'] = $data['U_Email'];
                                        $_SESSION['U_ID'] = $data['U_ID'];
                                        
                                        //$_SESSION['role'] = $data['role'];
                                        //$_SESSION['role'] = $data['role'];
                                        header("location:dashboard.php");
                                    }
                                    else
                                    {
                                ?>
                                    <div class="alert alert-danger" role="alert">
                                        Invalid Email/Password
                                    </div>
                                    <?php
                                    }
                                 }
                                ?>

                                    <div>

                                        <form role="form" method="POST">
                                            <div class="input-icon-group">
                                                <div class="d-flex flex flex-row">
                                                    <label class="flex d-flex mr-auto" for='pass'>Email</label>

                                                </div>
                                                <div class='input-icon-append'>
                                                    <i class="fa fa-user"></i>
                                                    <input placeholder="Email address" type="text" class="form-control" name="Email" required>
                                                </div>
                                            </div>
                                            <div class="input-icon-group">
                                                <div class="d-flex flex flex-row">
                                                    <label class="flex d-flex mr-auto" for='pass'>password</label>
                                                    <div class="flex d-flex ml-auto justify-content-end">
                                                        <a href="#" class="text-primary fs12">Forget</a>
                                                    </div>
                                                </div>
                                                <div class='input-icon-append'>
                                                    <i class="fa fa-lock"></i>
                                                    <input id="pass" placeholder="Password" type="password" class="form-control" name="Password" required>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-gradient-dark btn-block btn-lg" name="submit" >Sign In</button>

                                        </form>

                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main end-->

            </main>
            <!-- page content end-->
        </div>
        <!-- app's main wrapper end -->
        <!-- Common plugins -->
        <script type="text/javascript" src="js/plugins/plugins.js"></script>
        <script type="text/javascript" src="js/appUi-custom.js"></script>

    </body>

</html>
