<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{elixir('css/app.css')}}">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script>window.laravel = {csrfToken: '{{csrf_token()}}'} </script>
</head>
<body>
    <div id="app">
        <car></car>
    </div>
     <!-- Scripts -->
    <script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{elixir('/js/app.js')}}"></script>
</body>
</html>