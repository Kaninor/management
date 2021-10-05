@extends('layouts.layout')

@section('header')
<title>{{ $isEdit ? "Edit" : "Add" }}</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Righteous&family=Signika+Negative:wght@600;700&display=swap');

  h1 {
    font-family: 'Dancing Script', cursive;
    font-family: 'Righteous', cursive;
    font-family: 'Signika Negative', sans-serif;
  }

  .my-container {
    padding-left: 10px;
  }

  .my-input {
    width: 500px;
    color: black;
  }

  .my-sub {
    width: 100px;
    height: 42px;
  }
</style>
@stop

@section('body')
<center>
  <h1>{{ $isEdit ? "Edit" : "Add" }}</h1>
</center>

<form method="post" action="{{ $isEdit ? '/api/dashboard/editproduct' : '/api/dashboard/addproduct' }}">
  <input type="hidden" name="id" value="{{$isEdit ? $query->id : ''}}">
  <div class="form-group">
    <label for="adminemail">Admin email :</label>
    <input type="email" class="form-control my-input" id="adminemail" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
    <small id="emailHelp" class="form-text text-muted">Enter the owner's email for this product.</small>
  </div>
  <div class="form-group">
    <label for="adminpassword">Admin password :</label>
    <input type="password" class="form-control my-input" id="adminpassword" aria-describedby="passHelp" placeholder="Enter password" name="password" required>
    <small id="passHelp" class="form-text text-muted">Enter the owner's password for this product.</small>
  </div>
  <div class="form-group">
    <label for="productname">Product Name :</label>
    <input type="text" class="form-control my-input" id="productname" placeholder="Product Name" name="p_name" value="{{$isEdit ? $query->p_name : ''}}" required>
  </div>
  <div class="form-group">
    <label for="price">Price :</label>
    <input type="number" minlength="0" step=0.01 class="form-control my-input" id="price" placeholder="Price" name="p_price" value="{{$isEdit ? $query->price : ''}}" required>
  </div>
  <div class="form-group">
    <label for="number">Number :</label>
    <input type="number" minlength="0" class="form-control my-input" id="number" placeholder="Number" name="p_num" value="{{$isEdit ? $query->num_o_p : ''}}" required>
  </div>
  <input type="submit" class="btn btn-primary my-sub" name="sub" id="sub">
</form>
@stop

@section('icon')
@if ($isEdit)
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-down" viewBox="0 0 16 16" style="margin-top: 13.5px;">
  <path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z" />
  <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z" />
</svg>
@else
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up" viewBox="0 0 16 16" style="margin-top: 11px;">
  <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z" />
  <path fill-rule="evenodd" d="M7.646.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 1.707V10.5a.5.5 0 0 1-1 0V1.707L5.354 3.854a.5.5 0 1 1-.708-.708l3-3z" />
</svg>
@endif
@stop

@section('scripts')
<script>
  const price = document.getElementById("price");
  const number = document.getElementById("number");

  var invalidChars = [
    "-",
    "+",
    "e",
  ];

  price.addEventListener("input", function() {
    this.value = this.value.replace(/[e\+\-]/gi, "");
  });

  price.addEventListener("keydown", function(e) {
    if (invalidChars.includes(e.key)) {
      e.preventDefault();
    }
  });

  number.addEventListener("input", function() {
    this.value = this.value.replace(/[e\+\-]/gi, "");
  });

  number.addEventListener("keydown", function(e) {
    if (invalidChars.includes(e.key)) {
      e.preventDefault();
    }
  });
</script>
@stop