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
			    <div class="navbar-nav ml-auto">
			      <a class="nav-item nav-link" href="/login">Login</a>
			      <a class="nav-item nav-link" href="/register">Register</a>
			    </div>
		    </div>
		</div>
	</nav>

	<div id="content" class="fixed-left">
        <div class="wrapper bg-darks">
	    <!-- Sidebar -->
	    <nav id="sidebar">
	        <!-- <div class="sidebar-header">
	            <h4>Campus Inventory</h4>
	        </div> -->	        
	        <div class="h5 mb-2">
	        	Core
	        </div>
	        <div class="h6 text-light ml-2"><a href="#"></a>
	        	Dashboard
	        </div>
	        <div class="h6 ml-2">
	        	<a href="/fakultas" class="text-light text-decoration-none">Fakultas</a>
	        </div>
	        <div class="h6 ml-2 mb-3">
	        	<a href="/jurusan" class=" text-light text-decoration-none">Jurusan</a>
	        </div>
	        <div class="h5 mb-2">
	        	Additionnal
	        </div>
	        <div class="h6 text-light ml-2 mb-3"><a href="#"></a>
	        	Report
	        </div>
	    </nav>

		</div>
    </div>

	<div class="sidecontent">
		@yield('content')
	</div>

	<footer class="bg-dark text-center text-light py-3 sidecontent">Copyright &copy; Musavi Ardabilly Taufik 2020</footer>

  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js') }}"></script>
  <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js') }}"></script>
</body>

</html>