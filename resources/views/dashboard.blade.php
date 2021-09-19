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
      padding-top: 12px;
      padding-left: 10px;
      padding-right: 10px;
    }
    .mytab{
      margin-top: 17px;
      font-family: "Lucida Console", "Courier New", monospace;
      font-size: 17px;
    }
  </style>
@stop

@section('body')
  <center>
    <button type="button" class="btn btn-success mybtn" id="add">Add</button>
    <button type="button" class="btn btn-info mybtn" id="edit">Edit</button>
    <button type="button" class="btn btn-danger mybtn" id="delete">Delete</button>
  
    <table class="table mytab  table-striped table-dark ">
      <thead>
        <tr>
          <th >#</th>
          <th >P-Name</th>
          <th >Created at</th>
          <th >Updated at</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th>2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th>3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
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