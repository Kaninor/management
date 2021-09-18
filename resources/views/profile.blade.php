@extends('layout')

@section('header')
  <title>{{ $user->firstName." ".$user->lastName }}</title>
  <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css">
  <style>
    body{
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      background-color: white;
    }
  </style>
@stop

@section('body')
  <footer>Logged in as : <br> {{ $user->email }}</footer>
@stop