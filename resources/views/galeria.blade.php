@extends("layout_mio.plantilla")

@section("cabecera")
@endsection



@section("cuerpo")

	@if(count($alumnos))

		<table width="50%" border="1";>
			@foreach($alumnos as $persona)

				<tr>
					<td>
						{{$persona}}
					</td>
				</tr>

			@endforeach
		</table>
		@else
			{{"Sin alumnos"}}

	@endif

@endsection



@section("piePagina")

@endsection