<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	<div>
		@yield("cabecera")

		<nav class="navbar navbar-light bg-light">
		  <a class="navbar-brand">Pedibeer</a>
		  <form class="form-inline">
		    <input class="form-control mr-sm-2" type="search" placeholder="Algo..." aria-label="Search">
		    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Enviar</button>
		  </form>
		</nav>

	</div>



	<div style="margin-top: 2rem; width: 6rem; float: left;">
		@yield("barraLateral")

		<ul class="nav flex-column">
		  <li class="nav-item">
		    <a class="nav-link active" href="/inicio">Inicio</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="/pedir">Pedir</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#">Historial</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#">Contacto</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link disabled" href="#">Salir</a>
		  </li>
		</ul>

	</div>

<!-----------------------------------------CARDS CON BOOTSTRAP---------------------------------->

	
	@yield("stockDisponible")
	
	<form action="" method="" style="margin-left: 190px;">
		<div class="card" style="width: 14rem; height: 25rem; float: left; margin: 20px;">
		  <img class="card-img-top" style="height: 14rem;" src="/ipa.jpg" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">IPA</h5>
		    Litros: 50
		    <br>
		    <p style="">Precio: $5000</p>
		    <button type="button" class="btn btn-outline-success">+</button>
			<button type="button" class="btn btn-outline-danger">-</button>
		  </div>
		</div>
		
		<div class="card" style="width: 14rem; height: 25rem; float: left; margin: 20px;">
		  <img class="card-img-top" style="height: 14rem;" src="/belgian.jpg" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Belgian Dubbel</h5>
		    Litros: 50
		    <br>
		    <p style="">Precio: $5000</p>
		    <button type="button" class="btn btn-outline-success">+</button>
			<button type="button" class="btn btn-outline-danger">-</button>
		  </div>
		</div>


		<div class="card" style="width: 14rem; height: 25rem; float: left; margin: 20px;">
		  <img class="card-img-top" style="height: 14rem;" src="/irish.png" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Irish Red Ale</h5>
		    Litros: 50
		    <br>
		    <p style="">Precio: $5000</p>
		    <button type="button" class="btn btn-outline-success">+</button>
			<button type="button" class="btn btn-outline-danger">-</button>
		  </div>
		</div>
		
		<div class="card" style="width: 14rem; height: 25rem; float: left; margin: 20px;">
		  <img class="card-img-top" style="height: 14rem;" src="/stout.jpg" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Cream Sout</h5>
		    Litros: 50
		    <br>
		    <p style="">Precio: $5000</p>
		    <button type="button" class="btn btn-outline-success">+</button>
			<button type="button" class="btn btn-outline-danger">-</button>
		  </div>
		</div>

		<div class="card" style="width: 14rem; height: 25rem; float: left; margin: 20px;">
		  <img class="card-img-top" style="height: 14rem;" src="/ipa.jpg" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">IPA</h5>
		    Litros: 50
		    <br>
		    <p style="">Precio: $5000</p>
		    <button type="button" class="btn btn-outline-success">+</button>
			<button type="button" class="btn btn-outline-danger">-</button>
		  </div>
		</div>
		
		<div class="card" style="width: 14rem; height: 25rem; float: left; margin: 20px;">
		  <img class="card-img-top" style="height: 14rem;" src="/belgian.jpg" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Belgian Dubbel</h5>
		    Litros: 50
		    <br>
		    <p style="">Precio: $5000</p>
		    <button type="button" class="btn btn-outline-success">+</button>
			<button type="button" class="btn btn-outline-danger">-</button>
		  </div>
		</div>
		
		<div class="card" style="width: 14rem; height: 25rem; float: left; margin: 20px;">
		  <img class="card-img-top" style="height: 14rem;" src="/stout.jpg" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Cream Sout</h5>
		    Litros: 50
		    <br>
		    <p style="">Precio: $5000</p>
		    <button type="button" class="btn btn-outline-success">+</button>
			<button type="button" class="btn btn-outline-danger">-</button>
		  </div>
		</div>
		
		<div class="card" style="width: 14rem; height: 25rem; float: left; margin: 20px;">
		  <img class="card-img-top" style="height: 14rem;" src="/irish.png" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Irish Red Ale</h5>
		    Litros: 50
		    <br>
		    <p style="">Precio: $5000</p>
		    <button type="button" class="btn btn-outline-success">+</button>
			<button type="button" class="btn btn-outline-danger">-</button>
		  </div>
		</div>
	</form>
	
<!------------------------------------PIE DE PAGINA-------------------------->
	<div style="">
		@yield("piePagina")

	</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>