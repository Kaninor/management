@extends('layout')

@section('header')
<title>Reports</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Righteous&family=Signika+Negative:wght@600;700&display=swap');

  h1 {
    margin-top: 5px;
    font-family: 'Dancing Script', cursive;
    font-family: 'Righteous', cursive;
    font-family: 'Signika Negative', sans-serif;
  }

  .my-container {
    padding-left: 6px;
  }

  .mytab {
    margin-top: 17px;
    font-family: 'Dancing Script', cursive;
    font-family: 'Righteous', cursive;
    font-family: 'Signika Negative', sans-serif;
    font-size: 18px;
  }

  .mybtn2 {
    margin-right: 10px;
    width: 50px;
    height: 48px;
    font-size: 24px;
  }

  .btncol {
    background-color: rgb(166, 129, 33);
    border-color: rgb(166, 129, 33);
  }

  .tabbtn2 {
    width: 62px;
    height: 31px;
    font-size: 15px;
  }
</style>
@stop

@section('body')
<center>
  <h1 style="margin-bottom: 10px;">Reports</h1>
  <table class="table mytab table-striped table-dark">
    <thead>
      <tr>
        <th style="font-size: 18px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sort-numeric-down" viewBox="0 0 16 16">
            <path d="M12.438 1.668V7H11.39V2.684h-.051l-1.211.859v-.969l1.262-.906h1.046z" />
            <path fill-rule="evenodd" d="M11.36 14.098c-1.137 0-1.708-.657-1.762-1.278h1.004c.058.223.343.45.773.45.824 0 1.164-.829 1.133-1.856h-.059c-.148.39-.57.742-1.261.742-.91 0-1.72-.613-1.72-1.758 0-1.148.848-1.835 1.973-1.835 1.09 0 2.063.636 2.063 2.687 0 1.867-.723 2.848-2.145 2.848zm.062-2.735c.504 0 .933-.336.933-.972 0-.633-.398-1.008-.94-1.008-.52 0-.927.375-.927 1 0 .64.418.98.934.98z" />
            <path d="M4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z" />
          </svg>
        </th>
        <th>Solds</th>
        <th>Boughts</th>
        <th>Sale</th>
        <th>buy</th>
        <th>Profit</th>
        <th>Loss</th>
        <th>Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php $j = 0; ?>
      @for ($i = 0; $i < 10; $i++) <tr>
        <th><?= ++$j; ?></th>
        <td>{{ 5 * $j }}</td>
        <td>{{ 3 * $j }}</td>
        <td>{{17 * $j }}</td>
        <td>{{ 13.5 * $j }}</td>
        <td>{{ 56 * $j }}%</td>
        <td>{{ -12 * $j }}%</td>
        <td>2021-9-29 15:00:00</td>
        <td>
          <button class="print  btn btn-teal btn-rounded btn-sm m-0 btn-success tabbtn2">Print</button>
          <button class="view   btn btn-teal btn-rounded btn-sm m-0 btn-success tabbtn2">View</button>
          <button class="delete btn btn-teal btn-rounded btn-sm m-0 btn-success tabbtn2">Delete</button>
        </td>
        </tr>
        @endfor
    </tbody>
  </table>
</center>
@stop

@section('icon')
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16" style="margin-top: 13px;">
  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
</svg>
@stop

@section('scripts')
<script>
  $(".print").on("click", function() {
    let currentRow = $(this).closest("tr");
    let row = currentRow.find("th:eq(0)").text();

    window.location.href = "/print?row=" + row;
  });

  $(".view").on("click", function() {
    window.location.href = "/view";
  });

  $(".delete").on("click", function() {
    window.location.href = "/deletereport";
  });
</script>
@stop