<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tasks</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<meta name="_token" content="{{ csrf_token() }}" />
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Tasks</a>
    </div>
    <div class="nav navbar-nav navbar-right">
        <li><a href="#">Home</a></li>
        <li><a href="#">Tasks</a></li>
    </div>
  </div>
</nav>

@yield('content')

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="{{ asset('js/custom.js') }}"></script>



</body>
</html>