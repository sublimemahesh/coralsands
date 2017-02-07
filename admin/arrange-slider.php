<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | General Form Elements</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <link href="css/custome.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php include './header.php'; ?>
            <?php include './sidebar-menu.php'; ?>

            <div class="content-wrapper">
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
        </div>
        <?php include './footer.php'; ?>

        <div class="control-sidebar-bg"></div>

        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>

        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script src="plugins/fastclick/fastclick.js"></script>

        <script src="dist/js/app.min.js"></script>

        <script src="dist/js/demo.js"></script>
        <script>
            $(function () {
                $("#sortable").sortable();
                $("#sortable").disableSelection();
            });
        </script>
    </body>

</html>
