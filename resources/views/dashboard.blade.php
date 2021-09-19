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
          <th>#</th>
          <th>P-Name</th>
          <th>Price</th>
          <th>Created at</th>
          <th>Updated at</th>
          <th>P-Id</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>1</th>
          <td>Shampoo</td>
          <td>5$</td>
          <td>14/9/2020</td>
          <td>----------</td>
          <td>1</td>
        </tr>
        <tr>
          <th>2</th>
          <td>Soap</td>
          <td>3.99$</td>
          <td>13/9/2020</td>
          <td>----------</td>
          <td>3</td>
        </tr>
        <tr>
          <th>3</th>
          <td>Chips</td>
          <td>0.99$</td>
          <td>12/9/2020</td>
          <td>13/9/2020</td>
          <td>10</td>
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