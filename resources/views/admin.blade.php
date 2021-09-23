@extends('layout2')

@section('header')
<title>Admins</title>
<link rel="icon" href="https://banner2.cleanpng.com/20190730/ryw/kisspng-icon-design-admin-settings-male-icon-free-download-png-and-5d4039eace2968.0055730815644902188444.jpg">
<link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css">
<style>
    body {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    li {
        font-size: 18px;
    }

    ul {
        font-size: 16px;
        line-height: 9px;
    }
</style>
@stop

@section('body')
@foreach ($admins as $admin)
<li>{{ $admin->id }}</li>
<ul>{{ $admin->firstName }}</ul>
<ul>{{ $admin->lastName }}</ul>
<ul>{{ $admin->age }}</ul>
<br>
@endforeach
@stop