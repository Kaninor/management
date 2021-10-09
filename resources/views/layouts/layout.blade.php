<!DOCTYPE html>
<html id="html" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{ url('icon.ico') }}">
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

    .mynavlink-add {
      margin-left: 1050px;
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
          <a class="nav-link mynavlink-dashboard" href="/dashboard">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mynavlink-settings" href="/settings">Settings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mynavlink-reports" href="/reports">Reporsts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mynavlink-about" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mynavlink-add" id="add-link" href="/dashboard/add" style="cursor: pointer; margin-bottom: -4px; margin-top: 1px">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z" />
            </svg>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="report" style="cursor: pointer; margin-bottom: -4px; margin-top: 2px; margin-left: 3px">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
            </svg>
          </a>
        </li>
        <!-- -->
        <li class="nav-item">
          <a class="nav-link" id="reload-btn" style="cursor: pointer; margin-bottom: -4px; margin-top: 1.5px; margin-left: 3px">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save2-fill" viewBox="0 0 16 16">
              <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v6h-2a.5.5 0 0 0-.354.854l2.5 2.5a.5.5 0 0 0 .708 0l2.5-2.5A.5.5 0 0 0 10.5 7.5h-2v-6z" />
            </svg>
          </a>
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
      if (event.which == 49 && event.altKey) {
        window.location.href = "/";
      } else if (event.which == 50 && event.altKey) {
        window.location.href = "/settings";
      } else if (event.which == 51 && event.altKey) {
        window.location.href = "/reports";
      } else if (event.which == 52 && event.altKey) {
        window.location.href = "/about";
      }
    });

    if (window.location.href != "http://127.0.0.1:8000/dashboard") {
      document.getElementById('report').style.display = "none";
      document.getElementById('add-link').style.display = "none";
      document.getElementById('reload-btn').style.display = "none";
    }
  </script>
</body>

</html>