@extends('layout')

@section('header')
  <title>{{ $user->firstName." ".$user->lastName }}</title>
  <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css">
  <style>
    body{
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      background-color: white;
    }
    .container{
      padding-top: 70px;
    }
    .mybtn{
      margin-right: 15px;
      width: 170px;
      height: 60px;
      font-size: 30px;
    }
  </style>
@stop

@section('body')
  <center>
    <div class="container">
      <button type="button" class="btn btn-success mybtn" id="add">Add</button>
      <button type="button" class="btn btn-info mybtn" id="edit">Edit</button>
      <button type="button" class="btn btn-danger mybtn" id="delete">Delete</button>
    </div>
  </center>
@stop

@section('scripts')
  <script>
    const add_btn = document.getElementById('add');
    const edit_btn = document.getElementById('edit');
    const delete_btn = document.getElementById('delete');

    add_btn.addEventListener('click', () => {
      window.location.href = "/add";
    });

    edit_btn.addEventListener('click', () => {
      window.location.href = "/edit";
    });

    delete_btn.addEventListener('click', () => {
      window.location.href = "/delete";
    });
  </script>
@stop