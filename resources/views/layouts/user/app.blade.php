<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('layouts.user.header')

    @section('content')
    @show

    @include('layouts.user.footer')