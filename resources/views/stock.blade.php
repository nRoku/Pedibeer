@extends('layout_mio.plantilla')

@section('cuerpo')

<form action="" method="post" enctype="multipart/form-data" target="_blank">
  <p>
    Sube un archivo:
    <input type="file" name="archivosubido">
    <br><br><br>
    <input type="submit" value="Subir">
  </p>
</form>

@endsection