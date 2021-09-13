<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @yield('header')
    <style>
      body{
          background-color: rgb(0, 40, 55);
          color: white;
          padding-left: 10px;
          padding-top: 10px;
      }
      a{
        font-size: 20px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      }
    </style>     
  </head>
  <body>
    @yield('body')
    @yield('scripts')
  </body>
</html>