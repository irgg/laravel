<!DOCTYPE html>
<html>
<head>
	<title>HamzaProjrct - @yield('title')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="bg-info">
	@section('navbar')
		<nav class="navbar navbar-expand-sm bg-dark">
			<ul class="navbar-nav">
				<li class="nav-item"> <a class="nav-link" href="http://127.0.0.1:8000"> Home </a> </li>
				<li class="nav-item"> <a class="nav-link" href="http://127.0.0.1:8000/tempelate"> Tempelate </a> </li>
				<li class="nav-item"> <a class="nav-link" href="http://127.0.0.1:8000/About"> About </a> </li>
				<li class="nav-item"> <a class="nav-link" href="http://127.0.0.1:8000/Layout"> Layout </a> </li>
			</ul>
		</nav>
</body>
</html>