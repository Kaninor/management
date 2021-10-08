@extends('layouts.layout')

@section('header')
<title>{{ $user->firstName." ".$user->lastName }}</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Righteous&family=Signika+Negative:wght@600;700&display=swap');

  h1 {
    font-family: 'Signika Negative', sans-serif;
  }

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

  .mynavlink-dashboard {
    border-bottom: 3px solid white;
  }
</style>
@stop

@section('body')
<center>
  <h1>Products</h1>
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
        <td>{{ $product->id }}</td>
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
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-top: 12px; margin-right: 5px">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
</svg>
@stop

@section('scripts')
<script>
  let ids = [];
  let numbers = [];

  $("#add").on('click', () => {
    window.location.href = "/dashboard/add";
  });

  $("#report").on('click', () => {
    let datas = {
      "solds": <?= $data[0] ?>,
      "boughts": <?= $data[1] ?>,
      "sale": <?= $data[2] ?>,
      "buy": <?= $data[3] ?>,
      "profit": <?= $data[4] ?>,
      "loss": <?= $data[5] ?>
    }

    $.ajax({
      type: "POST",
      url: "/api/report/add",
      data: datas,
      success: function() {
        window.location.href = "/reports";
      },
    });
  });

  $("#reload-btn").on('click', () => {
    if (ids.length === 0 && numbers.length === 0) {
      window.location.reload();
    } else {
      for (let i = 0; i < ids.length; i++) {
        let datas = {
          "id": ids[i],
          "num": numbers[i]
        }
        $.ajax({
          type: "POST",
          url: "/api/dashboard/update",
          data: datas,
          success: function() {
            window.location.reload();
          },
        });
      }
    }
  });

  $(".edit").on('click', function() {
    let currentRow = $(this).closest("tr");
    let id = currentRow.find("td:eq(5)").text();
    let encoded_id = btoa(btoa(btoa(id)));
    window.location.href = "/dashboard/edit?id=" + encoded_id;
  });


  $(".delete").on('click', function() {
    let currentRow = $(this).closest("tr");
    let id = currentRow.find("td:eq(5)").text();
    let row_num = currentRow.find("th:eq(0)").text();
    if (confirm("Are you sure you wanna delete row " + row_num)) {
      let postData = {
        "id": id
      }
      $.ajax({
        type: "POST",
        url: "/api/dashboard/delete",
        data: postData,
        success: function() {
          currentRow.remove();
        },
      });
    }
  });

  $(".info").on('click', function() {
    let currentRow = $(this).closest("tr");
    let id = currentRow.find("td:eq(5)").text();
    window.location.href = "/dashboard/info?id=" + id;
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

  $("html").bind('keypress', function(event) {
    if (event.which === 82 && event.shiftKey) {
      window.location.href = "/";
    }
  });
</script>
@stop