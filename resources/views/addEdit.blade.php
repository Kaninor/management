@extends('layout')

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

<form method="get" action="{{ $isEdit ? '/editproduct' : '/add' }}">
  <input type="hidden" name="e" value="1">
  <input type="hidden" name="id" value="{{$isEdit ? $query->id : ''}}">
  <div class="form-group">
    <label for="adminemail">Admin email :</label>
    <input type="email" class="form-control my-input" id="adminemail" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">Enter the owner's email for this product.</small>
  </div>
  <div class="form-group">
    <label for="adminpassword">Admin password :</label>
    <input type="password" class="form-control my-input" id="adminpassword" aria-describedby="passHelp" placeholder="Enter password" name="password">
    <small id="passHelp" class="form-text text-muted">Enter the owner's password for this product.</small>
  </div>
  <div class="form-group">
    <label for="productname">Product Name :</label>
    <input type="text" class="form-control my-input" id="productname" placeholder="Product Name" name="p_name" value="{{$isEdit ? $query->p_name : ''}}">
  </div>
  <div class="form-group">
    <label for="price">Price :</label>
    <input type="number" step=0.01 class="form-control my-input" id="price" placeholder="Price" name="p_price" value="{{$isEdit ? $query->price : ''}}">
  </div>
  <div class="form-group">
    <label for="number">Number :</label>
    <input type="number" class="form-control my-input" id="number" placeholder="Number" name="p_num" value="{{$isEdit ? $query->num_o_p : ''}}">
  </div>
  <input type="submit" class="btn btn-primary my-sub" name="sub" id="sub">
</form>
@stop

@section('scripts')
<script>
  const price = document.getElementById("price");
  const number = document.getElementById("number");
  const sub = document.getElementById('sub');
  const id = document.getElementById('id');
  const email = document.getElementById('adminemail');
  const password = document.getElementById('adminpassword');
  const name = document.getElementById('productname');
  //const price = document.getElementById('price');
  const num = document.getElementById('number');

  sub.addEventListener('click', () => {
    //window.location.href = "/editproduct?id=" + $id + "&p_name=" + $query - > p_name + "&p_price=" + $query - > price + "&p_num=" + $query - > num_o_p
  });

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