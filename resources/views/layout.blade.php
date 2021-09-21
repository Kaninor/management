<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css">
  @yield('header')
  <style>
    body {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      background-color: white;
      background-color: rgb(27, 32, 45);
      color: white;
    }

    a {
      font-size: 18px;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
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
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" style="margin-top: 13px;">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
          </svg>
        </li>
        <li class="nav-item ">
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
</body>

</html>