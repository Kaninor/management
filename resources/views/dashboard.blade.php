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

  .mybtn2 {
    margin-right: 10px;
    width: 50px;
    height: 48px;
    font-size: 24px;
  }

  .mybtn3 {
    margin-right: 10px;
    width: 50px;
    height: 48px;
    font-size: 18.5px;
    background-color: darkgreen;
    border-color: darkgreen;
  }

  .btncol {
    background-color: rgb(166, 129, 33);
    border-color: rgb(166, 129, 33);
  }

  .my-reload {
    margin-right: 10px;
    width: 50px;
    height: 48px;
    font-size: 28px;
  }

  .tabbtn {
    width: 32px;
    height: 31px;
    font-size: 18px;
    padding-right: 10px;
    padding-left: 7px;
  }

  .tabbtn2 {
    width: 32px;
    height: 31px;
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

  .animation:hover {
    transform: skewX(3deg);
  }

  .animation2:hover {
    transform: skewX(-3deg);
  }

  .animation3:hover {
    transform: perspective(300px) rotateX(13deg);
  }
</style>
@stop

@section('body')
<div class="input-group">
  <button type="button" class="btn btn-success mybtn3 animation" id="add" title="Adding a new product">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z" />
    </svg>
  </button>
  <button type="button" class="btn btn-info mybtn2 btncol animation3" id="report" title="making a list of reports and you can see it in reports view">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
      <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
    </svg>
  </button>
  <button type="button" title="This button is used to reload the page, but use it when you click on `+` or `-` action!" class="btn btn-primary my-reload animation2" id="reload-btn">
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
        <th style="font-size: 18px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sort-numeric-down" viewBox="0 0 16 16">
            <path d="M12.438 1.668V7H11.39V2.684h-.051l-1.211.859v-.969l1.262-.906h1.046z" />
            <path fill-rule="evenodd" d="M11.36 14.098c-1.137 0-1.708-.657-1.762-1.278h1.004c.058.223.343.45.773.45.824 0 1.164-.829 1.133-1.856h-.059c-.148.39-.57.742-1.261.742-.91 0-1.72-.613-1.72-1.758 0-1.148.848-1.835 1.973-1.835 1.09 0 2.063.636 2.063 2.687 0 1.867-.723 2.848-2.145 2.848zm.062-2.735c.504 0 .933-.336.933-.972 0-.633-.398-1.008-.94-1.008-.52 0-.927.375-.927 1 0 .64.418.98.934.98z" />
            <path d="M4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z" />
          </svg>
        </th>
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
          <button type="button" class="btn btn-teal btn-rounded btn-sm m-0 btn-success tabbtn2 increament" title="increament the num-o-p of this row">+</button>
          <button type="button" class="btn btn-teal btn-rounded btn-sm m-0 btn-warning tabbtn2 decreament" title="decreament the num-o-p of this row">-</button>
          <button type="button" class="btn btn-teal btn-rounded btn-sm m-0 btn-info tabbtn edit" title="Edit this row">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
              <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z" />
            </svg>
          </button>
          <button type="button" class="btn btn-teal btn-rounded btn-sm m-0 btn-danger tabbtn delete" title="Delete this row">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
              <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
            </svg>
          </button>
          <button type="button" class="btn btn-teal btn-rounded btn-sm m-0 btn-primary tabbtn info" title="Raw info of this row">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
            </svg>
          </button>
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
  let ids = [];
  let numbers = [];

  $("#add").on('click', () => {
    window.location.href = "/add";
  });

  $("#report").on('click', () => {
    window.location.href = "/reports";
  });

  $("#reload-btn").on('click', () => {
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

  $(".info").on('click', function() {
    let currentRow = $(this).closest("tr");
    let id = currentRow.find("td:eq(5)").text();
    window.location.href = "/info?id=" + id;
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

      console.log(ids, numbers)

    } else if (ids.includes(id)) {
      let index = ids.indexOf(id);
      ids.splice(index, 1);
      numbers.splice(index, 1);
      ids.push(id);
      numbers.push(p_num_int + 1);

      console.log(ids, numbers)
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

      console.log(ids, numbers)
    } else if (ids.includes(id)) {
      let index = ids.indexOf(id);
      ids.splice(index, 1);
      numbers.splice(index, 1);
      ids.push(id);
      numbers.push(finalNum);

      console.log(ids, numbers)
    }
  });
</script>
@stop