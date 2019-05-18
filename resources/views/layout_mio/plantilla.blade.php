<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<style>

	input[type=number]::-webkit-outer-spin-button,
	
	input[type=number]::-webkit-inner-spin-button {
	
	    -webkit-appearance: none;
	
	    margin: 0;
	
	}
	
	 
	
	input[type=number] {
	
	    -moz-appearance:textfield;
	
	}
	
	</style>

</head>
<body>

	<div>
		@yield("cabecera")

		<nav class="navbar navbar-light bg-light">
		  <a class="navbar-brand">Pedibeer</a>
		</nav>

	</div>



	<div style="margin-top: 2rem; width: 6rem; float: left; margin-left: 13px;">
		@yield("barraLateral")

		<ul class="nav flex-column">
		  <li class="nav-item">
		    <a class="nav-link active" href="/inicio">Inicio</a>
		  </li>
		  @if(Auth::user()->hasRole('user'))
		  <li class="nav-item">
		    <a class="nav-link" href="/pedir">Pedir</a>
		  </li>
		  @endif
		  @if(Auth::user()->hasRole('admin'))
		  <li class="nav-item">
		    <a class="nav-link" href="/historial">Historial</a>
		  </li>
		  @endif
		  @if(Auth::user()->hasRole('user'))
		  <li class="nav-item">
		    <a class="nav-link" href="/contacto">Contacto</a>
		  </li>
		  @endif
		  <li class="nav-item">
		    <a class="nav-link disabled" href="{{ url('/logout') }}">Salir</a>
		  </li>
		</ul>

	</div>

<!-----------------------------------------CUERPO PAGINA---------------------------------->

	@yield("cuerpo")

<!-----------------------------------------CARDS CON BOOTSTRAP---------------------------------->

	
	@yield("stockDisponible")
	
	
	
<!------------------------------------PIE DE PAGINA-------------------------->
	<div style="">
		@yield("piePagina")

	</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script type="text/javascript" src="js/metodosDisAum.js"></script>
</body>
</html>