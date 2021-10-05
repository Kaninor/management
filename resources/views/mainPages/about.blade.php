@extends('layouts.layout')

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

  .mynavlink-about {
    border-bottom: 3px solid white;
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
  HTML 5, CSS 3, PHP 8.0.6, Laravel 8, JavaScript, JQuery 3.5.1, Ajax, Node JS (npm), Bootstrap 4, MYSQL
</p>
<br>
<h5>
  Author: Dariush Rouhifard<br>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
  </svg> : <a href="https://github.com/Kaninor" target="_blank">Click here</a><br>
</h5>
<p>
  you can check my other repositories in my github page and enjoy it 😜<br>
</p>
@stop

@section('icon')
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16" style="margin-top: 12px; margin-right: 5px">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
</svg>
@stop