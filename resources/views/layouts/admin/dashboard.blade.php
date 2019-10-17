<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.admin.head')
</head>
<body class="app header-fixed left-sidebar-fixed right-sidebar-fixed right-sidebar-overlay right-sidebar-hidden">

    @include('layouts.admin.header')

    @include('layouts.admin.sidebar')

    @section('content')
    @show

    @include('layouts.admin.footer')
</body>
</html>