@extends('layout')

@section('header')
  <title>{{ $user->firstName." ".$user->lastName }}</title>
  <style>
    .mybtn{
      margin-right: 20px;
      width: 100px;
      height: 48px;
      font-size: 20px;
    }
    .tabbtn{
      width: 30px;
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
  <button type="button" class="btn btn-success mybtn" id="add">Add</button>
  <center>
    <table class="table mytab  table-striped table-dark ">
      <thead>
        <tr>
          <th>#</th>
          <th>P-Name</th>
          <th>Price</th>
          <th>Num-O-P</th>
          <th>Created at</th>
          <th>Updated at</th>
          <th>P-Id</th>
          <th>Actions</th>
        </tr>
      </thead>
      <?php $i = 1; ?>
      <tbody>
        @foreach ($products as $product)
          <tr>
            <th><?= $i++; ?></th>
            <td>{{ $product->p_name }}</td>
            <td>{{ $product->price }}$</td>
            <td>{{ $product->num_o_p }}</td>
            <td>{{ $product->created_at }}</td>
            <td>{{ $product->updated_at ? $product->updated_at : "----------"}}</td>
            <td>{{ $product->id }}</td>
            <td>
                <button type="button" class="btn btn-teal btn-rounded btn-sm m-0 btn-success tabbtn">+</button>
                <button type="button" class="btn btn-teal btn-rounded btn-sm m-0 btn-warning tabbtn">-</button>
                <button type="button" class="btn btn-teal btn-rounded btn-sm m-0 btn-info" onclick="edit_btn_click()">Edit</button>
                <button type="button" class="btn btn-teal btn-rounded btn-sm m-0 btn-danger" onclick="delete_btn_click()">Delete</button>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </center>
@stop

@section('scripts')
  <script>
    const add_btn = document.querySelector('#add');

    add_btn.addEventListener('click', () => {
      window.location.href = "/add";
    });

    function edit_btn_click () {
      window.location.href = "/edit";
    }

    function delete_btn_click(){
      window.location.href = "/delete";
    }
  </script>
@stop