@extends('layout')

@section('header')
<title>{{ $user->firstName." ".$user->lastName }}</title>
<link rel="icon" href='<i class="icon-dashboard"></i>'>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Righteous&family=Signika+Negative:wght@600;700&display=swap');

  .mybtn {
    margin-right: 10px;
    width: 100px;
    height: 48px;
    font-size: 20px;
  }

  .my-reload {
    margin-right: 10px;
    width: 50px;
    height: 48px;
    font-size: 28px;
  }

  .tabbtn {
    width: 32px;
    height: 33px;
    font-size: 17px;
  }

  .tabbtn2 {
    width: 70px;
    height: 33px;
    font-size: 15px;
  }

  .my-container {
    padding-top: 12px;
    padding-left: 10px;
    padding-right: 10px;
  }

  .mytab {
    margin-top: 17px;
    font-family: 'Dancing Script', cursive;
    font-family: 'Righteous', cursive;
    font-family: 'Signika Negative', sans-serif;
    font-size: 18px;
  }
</style>
@stop

@section('body')
<div class="input-group">
  <button type="button" class="btn btn-success mybtn" id="add">Add</button>
  <button type="button" title="This button is used to reload the page, but use it when you click on `+` or `-` action!" class="btn btn-primary my-reload" id="reload-btn">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
      <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
    </svg>
  </button>
</div>
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
    <?php $i = 0; ?>
    <tbody>
      @foreach ($products as $product)
      <tr>
        <th id="row_num"><?= ++$i; ?></th>
        <td>{{ $product->p_name }}</td>
        <td>{{ $product->price }}$</td>
        <td>{{ $product->num_o_p }}</td>
        <td>{{ $product->created_at }}</td>
        <td>{{ $product->updated_at ? $product->updated_at : "-----------------------"}}</td>
        <td class="row-id">{{ $product->id }}</td>
        <td>
          <button type="button" class="btn btn-teal btn-rounded btn-sm m-0 btn-success tabbtn">+</button>
          <button type="button" class="btn btn-teal btn-rounded btn-sm m-0 btn-warning tabbtn">-</button>
          <button type="button" class="btn btn-teal btn-rounded btn-sm m-0 btn-info tabbtn2" onclick="edit_btn_click()">Edit</button>
          <button type="button" class="btn btn-teal btn-rounded btn-sm m-0 btn-danger tabbtn2" onclick="delete_btn_click()">Delete</button>
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
  const reload_btn = document.getElementById('reload-btn');
  const row_num = document.getElementById('row_num');

  add_btn.addEventListener('click', () => {
    window.location.href = "/add";
  });

  reload_btn.addEventListener('click', () => {
    window.location.href = "/";
  });

  function edit_btn_click() {
    let this_id = prompt('id : ', "");
    if (this_id == null) {
      window.location.href = "/";
    } else if (this_id != "") {
      let encoded_id = btoa(btoa(btoa(this_id)));
      window.location.href = "/edit?id=" + encoded_id;
    }
  }

  function delete_btn_click() {
    let this_id = prompt('id : ');
    if (this_id != null) {
      let encoded_id = btoa(btoa(btoa(this_id)));
      window.location.href = "/delete?id=" + encoded_id;
    }
  }
</script>
@stop