<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('admin/dashbord/vendor')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('admin/dashbord/vendor')}}/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('admin/dashbord/dist/')}}/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('admin/dashbord/vendor')}}/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('admin/dashbord/vendor')}}/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

        @include('admin.include.head')
        <!-- /.navbar-top-links -->


      @include('admin.include.sidebar')
        <!-- /.navbar-static-side -->
        @yield('body')


    <!-- /#page-wrapper -->
    </nav>
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('admin/dashbord/vendor')}}/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('admin/dashbord/vendor')}}/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('admin/dashbord/vendor')}}/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="{{asset('admin/dashbord/vendor')}}/raphael/raphael.min.js"></script>
<script src="{{asset('admin/dashbord/vendor')}}/morrisjs/morris.min.js"></script>
<script src="{{asset('admin/dashbord/data/')}}/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="{{asset('admin/dashbord/dist/')}}/js/sb-admin-2.js"></script>



</body>

</html>
