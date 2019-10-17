<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <meta name="author" content="CMS">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="asset/img/favicon.png">

    <!--google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
    <!--style sheets-->
    <link href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendor/lobicard/css/lobicard.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <link href="{{ asset('admin/assets/vendor/themify-icons/css/themify-icons.css')}}" rel="stylesheet">
    <!--data table stylesheet-->
    <link href="{{ asset('admin/assets/vendor/data-tables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendor/data-tables/select.dataTables.min.css')}}" rel="stylesheet">
    <!--sweetalert stylesheet-->
    <link href="{{ asset('admin/assets/css/sweetalert2.min.css')}}" rel="stylesheet">
    <!--custom css-->
    <link href="{{ asset('admin/assets/css/main.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/custom.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/dropify.css')}}" rel="stylesheet">
</head>
@section('headSection')

@show
