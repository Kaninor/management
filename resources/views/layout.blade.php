<!DOCTYPE html>
<html id="html" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @yield('header')
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Righteous&family=Signika+Negative:wght@600;700&display=swap');

    body {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      background-color: white;
      background-color: rgb(27, 32, 45);
      color: white;
    }

    a {
      font-size: 18px;
      font-family: 'Dancing Script', cursive;
      font-family: 'Righteous', cursive;
      font-family: 'Signika Negative', sans-serif;
    }

    .mynav {
      padding-left: 5px;
    }
  </style>
</head>

<body>
  <nav class="navbar-expand-lg navbar-dark bg-primary mynav">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          @yield('icon')
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dashboard">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/settings">Settings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/reports">Reporsts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="my-container">
    @yield('body')
  </div>
  @yield('scripts')

  <script>
    let html = document.getElementById("html");

    html.addEventListener("keydown", (event) => {
      if (event.which == 49 && event.shiftKey) {
        window.location.href = "/";
      } else if (event.which == 50 && event.shiftKey) {
        window.location.href = "/settings";
      } else if (event.which == 51 && event.shiftKey) {
        window.location.href = "/reports";
      } else if (event.which == 52 && event.shiftKey) {
        window.location.href = "/about";
      }
    });
  </script>
</body>

</html>