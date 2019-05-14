@extends('layout_mio.plantilla')

@section('cuerpo')

<center>
	<table class="table table-responsive table-striped" style="width: 1070px;">
	    <thead>
	        <tr>
	            <th>Estilo</th>
	            <th>Litros</th>
	            <th>Precio</th>
	            <th>Fecha y hora</th>
	        </tr>
	    </thead>
	    <?php 
	
	    $pedidos=DB::select('SELECT * FROM pedidos');
	
	  	foreach ($pedidos as $pedido) {
	?>
	    <tbody>
	        <tr>
	            <td><?php echo $pedido->estilo . "<br>"; ?></td>
	            <td><?php echo $pedido->litros . "<br>"; ?></td>
	            <td><?php echo $pedido->precio . "<br>"; ?></td>
	            <td ><?php echo $pedido->created_at . "<br>"; ?></td>
	        </tr>
	    </tbody>
	<?php } ?>
	</table>
</center>

@endsection