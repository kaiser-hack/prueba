<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <title>Crear</title>
</head>
<body>

@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

    <br>
    
<form action="{{ route('store') }}" method="POST" >
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input name="name" type="text" class="form-control"  placeholder="Ingrese su Nombre">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Apellido</label>
    <input name="apellido" type="text" class="form-control"  placeholder="Ingrese su Apellido">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input name="email" type="email" class="form-control"  placeholder="Ingrese su Email">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Fecha de Nacimiento</label>
    <input   name="fecha" type="date" class="form-control"  placeholder="Ingrese su Fecha de Nacimiento">
  </div>
<br>

  <button  class="btn btn-primary">Enviar</button>
</form>



</body>
</html>