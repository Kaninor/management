@extends('layout')

@section('header')
  <title>About</title>
  <style>
    .my-container{
      padding-left: 5px;
    }
    p{
      font-size: 18px;
    }
  </style>
@stop

@section('body')
  <center>
    <h1>About Page</h1><br>
  </center>
  <h3>
    Description:<br><br>
    <p>
      This is a store management system that helps you to manage your store.<br>
      e.g it save your products with some properties in Database.<br>
      and when you reload your page it's not gonna lose any data.<br>
      Our Database is MYSQL it means that every single data is storing in MYSQL Database.<br>
      in the product table you will have your products and with their own properties and some actions.<br>
      actions are increament, decreament, edit, delete and the top the web app there is a button for adding new products.<br>
      when you add a product into Database it's gonna behave like this: if it exists it's gonna add it the existing data, but if it doesn't<br>
      exist it's gonna make one.
      and at the end there is a search box at the top of the web app near the add button, you can use it by giving any property you want<br>
      e.g p_name it's gonna search the products with the name in the search box.<br>
      <br>
      Author: Dariush Rouhifard<br>
      Github: <a href="https://github.com/Kaninor" target="_blank">Click here</a><br>
      <br>
      you can check my other repositories in my github page and enjoy it :)<br>
    </p>
  </h3>
@stop