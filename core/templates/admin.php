<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.75, user-scalable=yes">
        <meta name="description" content="">
        <meta name="author" content="Batmunkh">
        <meta name="keyword" content="miniCMS v3 Content Management System">
        <link rel="shortcut icon" href="/assets/favicon.png">

        <title>Administration :: miniCMS v3</title>
        <?php
        /*         * *********** setting JS files ************ */
        //jquery duudah
        js_set_loadfile('/assets/jquery/jquery-1.9.1.js', 1);
//        js_set_loadfile('http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js', 2);
        js_set_loadfile('/assets/jquery-ui-1.10.3/ui/minified/jquery-ui.min.js', 2);
//        js_set_loadfile('/assets/flatlab/admin/js/jquery-1.8.3.min.js',1);
        //common js duudah.
        js_set_loadfile('/js/common.js', 3);

        //bootstrap v3 duudah
        js_set_loadfile('/assets/flatlab/admin/js/bootstrap.min.js', 4);

        /*         * *********** setting CSS files ************ */
        //Bootstrap core CSS
//        css_set_loadfile('/assets/bootstrap/3/css/bootstrap.min.css', 2);
        css_set_loadfile('/assets/flatlab/admin/css/bootstrap.min.css', 2);
        css_set_loadfile('/assets/flatlab/admin/css/bootstrap-reset.css', 3);

        //external css
//        css_set_loadfile('/assets/flatlab/admin/assets/jquery-ui/jquery-ui-1.10.1.custom.min.css', 4);
        css_set_loadfile('/assets/jquery-ui-1.10.3/themes/base/jquery.ui.base.css', 4);
        css_set_loadfile('/assets/flatlab/admin/assets/font-awesome/css/font-awesome.css', 5);

        /*         * *********** css,js file uudiig achaalah ************ */
        echo css_load();
        echo js_load();
        ?>
        <!-- Custom styles for this template -->
        <link href="/assets/flatlab/admin/css/style.css" rel="stylesheet">
        <link href="/assets/flatlab/admin/css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="/assets/flatlab/admin/js/html5shiv.js"></script>
          <script src="/assets/flatlab/admin/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <section id="container" class="">
            <!--header start-->
            <?php require_once("admin/_header.php"); ?>
            <!--header end-->
            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <?php require_once("admin/_menu_left.php"); ?>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper site-min-height">
                    <!-- page start-->
                    <?php load_template($template); ?>
                    <!-- page end-->
                </section>
            </section>
            <!--main content end-->
            <!--footer start-->
            <footer class="site-footer">
                <div class="text-center">
                    since 2005 &copy; miniCMS v3.
                    <a href="#" class="go-top">
                        <i class="fa fa-angle-up"></i>
                    </a>
                </div>
            </footer>
            <!--footer end-->
        </section>

        <script class="include" type="text/javascript" src="/assets/flatlab/admin/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="/assets/flatlab/admin/js/jquery.scrollTo.min.js"></script>
        <script src="/assets/flatlab/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
        <!--
        <script src="/assets/flatlab/admin/js/jquery.sparkline.js" type="text/javascript"></script>
        <script src="/assets/flatlab/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
        <script src="/assets/flatlab/admin/js/owl.carousel.js" ></script>
        <script src="/assets/flatlab/admin/js/jquery.customSelect.min.js" ></script>
        -->
        <script src="/assets/flatlab/admin/js/respond.min.js" ></script>

        <!--common script for all pages-->
        <script src="/assets/flatlab/admin/js/common-scripts.js"></script>

        <!--Form js file uud-->
        <!--this page plugins-->

        <!--
        <script type="text/javascript" src="/assets/flatlab/admin/assets/fuelux/js/spinner.min.js"></script>
        <script type="text/javascript" src="/assets/flatlab/admin/assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
        <script type="text/javascript" src="/assets/flatlab/admin/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
        <script type="text/javascript" src="/assets/flatlab/admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
        <script type="text/javascript" src="/assets/flatlab/admin/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="/assets/flatlab/admin/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
        <script type="text/javascript" src="/assets/flatlab/admin/assets/bootstrap-daterangepicker/moment.min.js"></script>
        <script type="text/javascript" src="/assets/flatlab/admin/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script type="text/javascript" src="/assets/flatlab/admin/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="/assets/flatlab/admin/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
        <script type="text/javascript" src="/assets/flatlab/admin/assets/jquery-multi-select/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="/assets/flatlab/admin/assets/jquery-multi-select/js/jquery.quicksearch.js"></script>
        -->

        <!--nemelt scriptuud -->
        <!--
        <script src="/assets/flatlab/admin/js/sparkline-chart.js"></script>
        <script src="/assets/flatlab/admin/js/easy-pie-chart.js"></script>
        <script src="/assets/flatlab/admin/js/count.js"></script>
        -->
    </body>
</html>
