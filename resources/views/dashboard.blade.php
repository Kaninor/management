@extends('layout')

@section('header')
<title>{{ $user->firstName." ".$user->lastName }}</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- link rel="icon" href='<i class="icon-dashboard"></i>' -->
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
        <th><?= ++$i; ?></th>
        <td>{{ $product->p_name }}</td>
        <td>{{ $product->price }}$</td>
        <td>{{ $product->num_o_p }}</td>
        <td>{{ $product->created_at }}</td>
        <td>{{ $product->updated_at ? $product->updated_at : "-----------------------"}}</td>
        <td class="row-id">{{ $product->id }}</td>
        <td>
          <button type="button" class="btn btn-teal btn-rounded btn-sm m-0 btn-success tabbtn increament">+</button>
          <button type="button" class="btn btn-teal btn-rounded btn-sm m-0 btn-warning tabbtn decreament">-</button>
          <button type="button" class="btn btn-teal btn-rounded btn-sm m-0 btn-info tabbtn2 edit">Edit</button>
          <button type="button" class="btn btn-teal btn-rounded btn-sm m-0 btn-danger tabbtn2 delete">Delete</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</center>
@stop

@section('icon')
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-top: 12px;">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
</svg>
@stop

@section('scripts')
<script>
  const add_btn = document.querySelector('#add');
  const reload_btn = document.getElementById('reload-btn');

  let ids = [];
  let numbers = [];

  add_btn.addEventListener('click', () => {
    window.location.href = "/add";
  });

  reload_btn.addEventListener('click', () => {
    if (ids.length === 0 && numbers.length === 0) {
      window.location.href = "/";
    } else {
      for (let i = 0; i < ids.length; i++) {
        window.location.href = "/update?id=" + ids[i] + "&num=" + numbers[i];
      }
    }
  });

  $(".edit").on('click', function() {
    let currentRow = $(this).closest("tr");
    let id = currentRow.find("td:eq(5)").text();
    let encoded_id = btoa(btoa(btoa(id)));
    window.location.href = "/edit?id=" + encoded_id;
  });


  $(".delete").on('click', function() {
    let currentRow = $(this).closest("tr");
    let id = currentRow.find("td:eq(5)").text();
    let row_num = currentRow.find("th:eq(0)").text();
    let encoded_id = btoa(btoa(btoa(id)));
    if (confirm("Are you sure you wanna delete row " + row_num))
      window.location.href = "/delete?id=" + encoded_id;
  });

  ///////////////////////////////////////////////////////////////

  $(".increament").on('click', function() {
    let currentRow = $(this).closest("tr");
    let id = currentRow.find("td:eq(5)").text();
    let p_num = currentRow.find("td:eq(2)");
    let p_num_int = parseInt(p_num.text());

    p_num.text(p_num_int + 1);
    if (!ids.includes(id)) {
      ids.push(id);
      numbers.push(p_num_int + 1);
    } else if (ids.includes(id)) {
      let index = ids.indexOf(id);
      ids.splice(index, 1);
      numbers.splice(index, 1);
      ids.push(id);
      numbers.push(p_num_int + 1);
    }
  });

  $(".decreament").on('click', function() {
    let currentRow = $(this).closest("tr");
    let id = currentRow.find("td:eq(5)").text();
    let p_num = currentRow.find("td:eq(2)");
    let p_num_int = parseInt(p_num.text());

    if (p_num_int - 1 >= 0) {
      p_num.text(p_num_int - 1);
    }

    let finalNum = p_num_int - 1 >= 0 ? p_num_int - 1 : 0;

    if (!ids.includes(id)) {
      ids.push(id);
      numbers.push(finalNum);
    } else if (ids.includes(id)) {
      let index = ids.indexOf(id);
      ids.splice(index, 1);
      numbers.splice(index, 1);
      ids.push(id);
      numbers.push(finalNum);
    }
  });
</script>
@stop