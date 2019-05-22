@extends('layout_mio.plantilla')

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">Pedidos</a>
  <form class="form-inline" method="get">
    <input class="form-control mr-sm-2" type="search" placeholder="Búsqueda..." aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>

@section('cuerpo')
<center>
	<table class="table table-responsive table-striped card" align="center" style="width: 1070px;">
	    	<div class="card-tittle">
	    	    <tr class="card-tittle" style="background: lightblue; height: 4rem;">
	    	        <th>Estilo</th>
	    	        <th>Litros</th>
	    	        <th>Precio</th>
	    	        <th>Cerveceria</th>
	    	        <th>Fecha y hora</th>
	    	    </tr>
	    	</div>
	    <?php 
		
		use App\Pedido;

	    $pedidos=Pedido::orderBy('id', 'desc')->get();
	
	  	foreach ($pedidos as $pedido) {
	?>
	        <tr>
	            <td><?php echo $pedido->estilo . "<br>"; ?></td>
	            <td><?php echo $pedido->litros . "<br>"; ?></td>
	            <td><?php echo $pedido->precio . "<br>"; ?></td>
	            <td><?php echo $pedido->cerveceria . "<br>"; ?></td>
	            <td ><?php echo $pedido->created_at . "<br>"; ?></td>
	        </tr>
	       
	<?php } ?>
	</table>
</center>

@endsection