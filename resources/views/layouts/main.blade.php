<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Inventory</title>

	<link href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

	<link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700&display=swap') }}" rel="stylesheet">

	<script src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"></script>
	<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js') }}"></script>
	<script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js') }}"></script>
</head>
<body>

	<nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
		    <a class="navbar-brand mb-0 h1" href="/">Inventory</a>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    @if (Auth::guest()) 
			    <div class="navbar-nav ml-auto">
			      <a class="nav-item nav-link" href="/login">Login</a>
			      <a class="nav-item nav-link" href="/register">Register</a>
			    </div>
			@else
				<div class="navbar-nav dropdown ml-auto">
					<a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			            <span>
			                {{ auth()->user()->username }}
			            </span>
		            </a>
		            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		              	<a class="dropdown-item" href="/logout">Log Out</a>
		            </div>
				</div>
			@endif
		    </div>
		</div>
	</nav>

	@extends( Auth::guest() ? 'layouts.nosidebar' : 'layouts.sidebar' )

	<div class="sidecontent">
		@yield('content')
	</div>

	<footer class="bg-dark text-center text-light py-3 sidecontent">Copyright &copy; Musavi Ardabilly Taufik 2020</footer>

  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js') }}"></script>
  <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js') }}"></script>
</body>

</html>