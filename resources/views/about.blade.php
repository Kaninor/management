@extends('layout')

@section('header')
<title>About</title>
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

  p {
    font-size: 16px;
  }

  dfn {
    color: #007bff;
  }
</style>
@stop

@section('body')
<center>
  <h1>About Page</h1><br>
</center>
<h4>Description:</h4>
<p>
  This is a store management system that helps you to manage your store.<br>
  e.g it save your products with some properties in Database.<br>
  and when you reload your page it's not gonna lose any data.<br>
  Our Database is <dfn><a href="https://www.mysql.com" target="_blank">MYSQL</a></dfn> it means that every single data is storing in <dfn><a href="https://www.mysql.com" target="_blank">MYSQL</a></dfn> Database.<br>
  in the product table you will have your products and with their own properties and some actions.<br>
  actions are increament, decreament, edit, delete and the top the web app there is a button for adding new products.<br>
  when you add a product into Database it's gonna behave like this: if it exists it's gonna add it the existing data, but if it doesn't<br>
  exist it's gonna make one.
  and at the end there is a search box at the top of the web app near the add button, you can use it by giving any property you want<br>
  e.g p_name it's gonna search the products with the name in the search box.<br>
</p>

<br>
<h4>Technologies:</h4>
<p>
  HTML5, CSS, PHP, Laravel, JavaScript, JQuery, Node JS (npm), Bootstrap, MYSQL
</p>
<br>
<h5>
  Author: Dariush Rouhifard<br>
  Github: <a href="https://github.com/Kaninor" target="_blank">Click here</a><br>
</h5>
<p>
  you can check my other repositories in my github page and enjoy it :)<br>
</p>
@stop