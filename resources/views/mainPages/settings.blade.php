@extends('layouts.layout')

@section('header')
<title>Settings</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Righteous&family=Signika+Negative:wght@600;700&display=swap');

  h1 {
    font-family: 'Dancing Script', cursive;
    font-family: 'Righteous', cursive;
    font-family: 'Signika Negative', sans-serif;
  }

  .my-container {
    padding-left: 6px;
  }

  .mynavlink-settings {
    border-bottom: 3px solid white;
  }
</style>
@stop

@section('body')
<center>
  <h1>Settings</h1>
</center>
@stop

@section('icon')
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16" style="margin-top: 12px; margin-right: 5px">
  <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
</svg>
@stop

@section('scripts')
<script>
  $("#reload-btn").on('click', function() {
    window.location.reload();
  })
</script>
@stop