<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lake Rat Bar &amp; Grill - Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="/admin/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- page css files -->
    <link href="/admin/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/admin/assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="/admin/assets/css/fullcalendar.css" rel="stylesheet">
    <link href="/admin/assets/css/morris.css" rel="stylesheet">
    <link href="/admin/assets/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="/admin/assets/css/climacons-font.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/admin/assets/css/style.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
</head>

<body>
@include('admin.sections.header')

<div class="container-fluid content">
    <div class="row">

        @include('admin.sections.main-menu')

        <!-- start: Content -->
        <div class="col-md-10 col-sm-11 main ">
            @yield('main-section')


        </div>
        <!-- end: Content -->

    </div><!--/row-->

</div><!--/container-->


<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="clearfix"></div>

<!-- start: JavaScript-->
<!--[if !IE]>-->

<script src="/admin/assets/js/jquery-2.1.0.min.js"></script>

<!--<![endif]-->

<!--[if IE]>

<script src="/admin/assets/js/jquery-1.11.0.min.js"></script>

<![endif]-->

<!--[if !IE]>-->

<script type="text/javascript">
    window.jQuery || document.write("<script src='/admin/assets/js/jquery-2.1.0.min.js'>"+"<"+"/script>");
</script>

<!--<![endif]-->

<!--[if IE]>

<script type="text/javascript">
    window.jQuery || document.write("<script src='/admin/assets/js/jquery-1.11.0.min.js'>"+"<"+"/script>");
</script>

<![endif]-->
<script src="/admin/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/admin/assets/js/bootstrap.min.js"></script>


<!-- page scripts -->
<script src="/admin/assets/js/jquery-ui.min.js"></script>
<script src="/admin/assets/js/jquery.ui.touch-punch.min.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="/admin/assets/js/excanvas.min.js"></script><![endif]-->
<script src="/admin/assets/js/jquery.flot.min.js"></script>
<script src="/admin/assets/js/jquery.flot.pie.min.js"></script>
<script src="/admin/assets/js/jquery.flot.stack.min.js"></script>
<script src="/admin/assets/js/jquery.flot.resize.min.js"></script>
<script src="/admin/assets/js/jquery.flot.time.min.js"></script>
<script src="/admin/assets/js/jquery.flot.spline.min.js"></script>
<script src="/admin/assets/js/jquery.autosize.min.js"></script>
<script src="/admin/assets/js/jquery.placeholder.min.js"></script>
<script src="/admin/assets/js/moment.min.js"></script>
<script src="/admin/assets/js/daterangepicker.min.js"></script>
<script src="/admin/assets/js/jquery.easy-pie-chart.min.js"></script>
<script src="/admin/assets/js/jquery.dataTables.min.js"></script>
<script src="/admin/assets/js/dataTables.bootstrap.min.js"></script>
<script src="/admin/assets/js/raphael.min.js"></script>
<script src="/admin/assets/js/morris.min.js"></script>

<!-- theme scripts -->
<script src="/admin/assets/js/custom.min.js"></script>
<script src="/admin/assets/js/core.min.js"></script>

<!-- inline scripts related to this page -->
<script src="/admin/assets/js/pages/index.js"></script>

<!-- end: JavaScript-->

</body>
</html>