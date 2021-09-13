@extends('layout')

@section('header')
    <title>Home</title>
    <link rel="icon" href="https://cdn.iconscout.com/icon/free/png-256/house-home-building-infrastructure-real-estate-resident-emoj-symbol-1-30743.png">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css">
    <style>
        h1, h3{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
    </style>
@stop

@section('body')
    <h1>Welcome {{ $info['firstName'] }} {{ $info['lastName']}}</h1>
    <h3>Age: {{ $info['age'] }}</h3>
    <a href="/admin">Admins page</a><br>
    <a href="/dumpdata">Employees page</a>
@stop