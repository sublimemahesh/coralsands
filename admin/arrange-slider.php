<!DOCTYPE html>
<html>

    <!-- Mirrored from almsaeedstudio.com/themes/AdminLTE/pages/forms/general.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jan 2017 06:31:41 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | General Form Elements</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <link href="css/custome.css" rel="stylesheet" type="text/css"/>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php include './header.php'; ?>
            <!-- Left side column. contains the logo and sidebar -->
            <?php include './sidebar-menu.php'; ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Manage Slider 
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Manage Slider</a></li>
                        <li class="active">Arrange Slider</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title"></h3>
                                </div>
                                <div class="panel-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    Arrange Slider Image
                                                </div>
                                                <div class="panel-body">
                                                    <form method="post">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <ul id="sortable">
                                                                        <li class="ui-state-default">
                                                                            <span class="number-class">(1)</span>
                                                                            <img width="300px" height="130" class="example-image img-responsive" src="../images/slider/relax8.jpg" alt=""/>
                                                                            <input type="hidden" name="sort[]"  value="44" class="sort-input"/>
                                                                        </li>
                                                                        <li class="ui-state-default">
                                                                            <span class="number-class">(2)</span>
                                                                            <img width="300px" height="130" class="example-image img-responsive" src="../images/slider/a6.jpg" alt=""/>
                                                                            <input type="hidden" name="sort[]"  value="43" class="sort-input"/>
                                                                        </li>
                                                                        <li class="ui-state-default">
                                                                            <span class="number-class">(3)</span>
                                                                            <img width="300px" height="130" class="example-image img-responsive" src="../images/slider/white-water-rafting-sri-lanka.jpg" alt=""/>
                                                                            <input type="hidden" name="sort[]"  value="45" class="sort-input"/>
                                                                        </li>
                                                                    </ul>  
                                                                    <div class="row">
                                                                        <div class="col-sm-12 text-center" style="margin-top: 19px;">
                                                                            <input type="submit" class="btn btn-info" id="btn-submit" value="Save Images" name="save-date">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include './footer.php'; ?>

<!-- Control Sidebar -->
<?php include './sidebar-menu.php'; ?>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
    $(function () {
        $("#sortable").sortable();
        $("#sortable").disableSelection();
    });
</script>
</body>

<!-- Mirrored from almsaeedstudio.com/themes/AdminLTE/pages/forms/general.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jan 2017 06:31:41 GMT -->
</html>
