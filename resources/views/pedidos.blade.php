@extends("layout_mio.plantilla")

@section("cuerpo")

<center>
	<table class="table table-responsive table-striped card" style="width: 1070px;">
	        <tr class="card-tittle" style="background: lightblue; height: 4rem;">
	            <th>Estilo</th>
	            <th>Litros</th>
	            <th>Precio</th>
	            <th hidden>Marca</th>
	            <th>Fecha y hora</th>
	        </tr>
	    <?php 
		
		use App\Pedido;

		$cerveceriaMarca = auth()->user()->name;

	    $pedidos=Pedido::where('cerveceria', $cerveceriaMarca)
	    ->orderBy('id','desc')
	    ->take(10)
	    ->get();
	
	  	foreach ($pedidos as $pedido) {
	?>
	        <tr>
	            <td><?php echo $pedido->estilo . "<br>"; ?></td>
	            <td><?php echo $pedido->litros . "<br>"; ?></td>
	            <td><?php echo $pedido->precio . "<br>"; ?></td>
	            <td hidden><?php echo $pedido->cerveceria . "<br>"; ?></td>
	            <td><?php echo $pedido->created_at . "<br>"; ?></td>
	        </tr>
	       
	<?php } ?>
	</table>
</center>
@endsection