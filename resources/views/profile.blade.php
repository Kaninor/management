@extends('layout')

@section('header')
  <title>{{ $user->firstName." ".$user->lastName }}</title>
  <style>
    .mybtn{
      margin-right: 20px;
      width: 170px;
      height: 60px;
      font-size: 30px;
    }
    .my-container{
      padding-top: 70px;
    }
  </style>
@stop

@section('body')
  <center>
    <button type="button" class="btn btn-success mybtn" id="add">Add</button>
    <button type="button" class="btn btn-info mybtn" id="edit">Edit</button>
    <button type="button" class="btn btn-danger mybtn" id="delete">Delete</button>
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