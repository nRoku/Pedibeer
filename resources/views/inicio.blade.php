@extends("layout_mio.plantilla")

@section("cabecera")

@endsection

@section("stockDisponible")

 <form class="form-inline" method="post" action="" style="margin-top: 15px; margin-left: 650px; margin-bottom: 15px;">
    $<input class="form-control mr-sm-2" type="number" id="id_contador" value=0 style="width: 150px;">
    <input class="form-control mr-sm-2" type="number" id="id_contador_litros" value=0 style="width: 150px; margin-left: 1px; float: left;">Lts.
    <input class="form-control mr-sm-2" type="text" id="id_estilos" hidden style="width: 150px; margin-left: 1px; float: left;">

    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" onclick="mostrarEstilos()" style="margin-left: 25px;">Enviar</button>
    <button class="btn btn-info my-2 my-sm-0" type="submit" style="margin-left: 5px;">Imprimir</button>
</form>

<div style="margin-left: 190px;">
		<div class="card" style="width: 14rem; height: 23rem; float: left; margin: 20px;">
		  <img class="card-img-top" style="height: 12rem;" src="/ipa.jpg" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">IPA</h5>
		    Litros: 50
		    <br>
		    <p style="">Precio: $5200</p>
		    <button type="button" class="btn btn-outline-success" onclick="aumentarContador('IPA',50,5200.00)">+</button>
			<button type="button" class="btn btn-outline-danger" onclick="disminuirContador('IPA',50,5200.00)">-</button>
			<input class="form-control mr-sm-2" type="number" id="id_contador1" value=0 style="width: 70px; float: right;">
		  </div>
		</div>
		
		<div class="card" style="width: 14rem; height: 23rem; float: left; margin: 20px;">
		  <img class="card-img-top" style="height: 12rem;" src="/belgian.jpg" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Belgian Dubbel</h5>
		    Litros: 50
		    <br>
		    <p style="">Precio: $4700</p>
		    <button type="button" class="btn btn-outline-success" onclick="aumentarContador('Belgian Dubbel',50,4700.00)">+</button>
			<button type="button" class="btn btn-outline-danger" onclick="disminuirContador('Belgian Dubbel',50,4700.00)">-</button>
			<input class="form-control mr-sm-2" type="number" id="id_contador2" value=0 style="width: 70px; float: right;">
		  </div>
		</div>


		<div class="card" style="width: 14rem; height: 23rem; float: left; margin: 20px;">
		  <img class="card-img-top" style="height: 12rem;" src="/irish.png" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Irish Red Ale</h5>
		    Litros: 50
		    <br>
		    <p style="">Precio: $4500</p>
		    <button type="button" class="btn btn-outline-success" onclick="aumentarContador('Irish Red Ale',50,4500.00)">+</button>
			<button type="button" class="btn btn-outline-danger" onclick="disminuirContador('Irish Red Ale',50,4500.00)">-</button>
			<input class="form-control mr-sm-2" type="number" id="id_contador3" value=0 style="width: 70px; float: right;">
		  </div>
		</div>
		
		<div class="card" style="width: 14rem; height: 23rem; float: left; margin: 20px;">
		  <img class="card-img-top" style="height: 12rem;" src="/stout.jpg" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Cream Sout</h5>
		    Litros: 50
		    <br>
		    <p style="">Precio: $4800</p>
		    <button type="button" class="btn btn-outline-success" onclick="aumentarContador('Cream Stout',50,4800.00)">+</button>
			<button type="button" class="btn btn-outline-danger" onclick="disminuirContador('Cream Stout',50,4800.00)">-</button>
			<input class="form-control mr-sm-2" type="number" id="id_contador4" value=0 style="width: 70px; float: right;">
		  </div>
		</div>

		<div class="card" style="width: 14rem; height: 23rem; float: left; margin: 20px;">
		  <img class="card-img-top" style="height: 12rem;" src="/ipa.jpg" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">IPA Cuyana</h5>
		    Litros: 50
		    <br>
		    <p style="">Precio: $5100</p>
		    <button type="button" class="btn btn-outline-success" onclick="aumentarContador('IPA Cuyana',50,5100.00)">+</button>
			<button type="button" class="btn btn-outline-danger" onclick="disminuirContador('IPA Cuyana',50,5100.00)">-</button>
			<input class="form-control mr-sm-2" type="number" id="id_contador5" value=0 style="width: 70px; float: right;">
		  </div>
		</div>
		
		<div class="card" style="width: 14rem; height: 23rem; float: left; margin: 20px;">
		  <img class="card-img-top" style="height: 12rem;" src="/belgian.jpg" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">IPA Diablo</h5>
		    Litros: 50
		    <br>
		    <p style="">Precio: $5500</p>
		    <button type="button" class="btn btn-outline-success" onclick="aumentarContador('IPA Diablo',50,5500.00)">+</button>
			<button type="button" class="btn btn-outline-danger" onclick="disminuirContador('IPA Diablo',50,5500.00)">-</button>
			<input class="form-control mr-sm-2" type="number" id="id_contador6" value=0 style="width: 70px; float: right;">
		  </div>
		</div>
		
		<div class="card" style="width: 14rem; height: 23rem; float: left; margin: 20px;">
		  <img class="card-img-top" style="height: 12rem;" src="/stout.jpg" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Porter</h5>
		    Litros: 50
		    <br>
		    <p style="">Precio: $4200</p>
		    <button type="button" class="btn btn-outline-success" onclick="aumentarContador('Porter',50,4200.00)">+</button>
			<button type="button" class="btn btn-outline-danger" onclick="disminuirContador('Porter',50,4200.00)">-</button>
			<input class="form-control mr-sm-2" type="number" id="id_contador7" value=0 style="width: 70px; float: right;">
		  </div>
		</div>
		
		<div class="card" style="width: 14rem; height: 23rem; float: left; margin: 20px;">
		  <img class="card-img-top" style="height: 12rem;" src="/irish.png" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Wee Heavy</h5>
		    Litros: 50
		    <br>
		    <p style="">Precio: $4500</p>
		    <button type="button" class="btn btn-outline-success" onclick="aumentarContador('Wee Heavy',50,4500.00)">+</button>
			<button type="button" class="btn btn-outline-danger" onclick="disminuirContador('Wee Heavy',50,4500.00)">-</button>
			<input class="form-control mr-sm-2" type="number" id="id_contador8" value=0 style="width: 70px; float: right;">
		  </div>
		</div>
</div>

@endsection