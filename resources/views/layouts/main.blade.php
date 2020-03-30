<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Inventory</title>

	<link href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>

	<nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
		<div class="container">
		    <a class="navbar-brand mb-0 h1" href="/">Inventory</a>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			    <div class="navbar-nav ml-auto">
			      <a class="nav-item nav-link" href="#">Login</a>
			      <a class="nav-item nav-link" href="#">Register</a>
			    </div>
		    </div>
		</div>
	</nav>

	<div>
		@yield('content')
	</div>

	<footer class="bg-dark text-center text-light py-3">Copyright &copy; Musavi Ardabilly Taufik 2020</footer>

</body>
</html>