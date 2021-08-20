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
    <title>index</title>
</head>
<body>

@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif
    
 <center> <h1 >Welcome </h1>  
 <br> 
 


 <a  class='btn btn-success' href=" {{ route('create') }} ">+ Agregar Usuario </a>
 <hr>
<div class= "container"  >
<div class=" row">
    <br> <br>


<table class="table col-10">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Fecha Nacimiento</th>
      <th scope="col">Email</th>
      <th scope="col">Acciones</th>

    </tr>
  </thead>
  @foreach ($user as $item)
  <tbody>
      <th> {{$item->id}} </th>
      <td> {{$item->name}}</td>
      <td> {{$item->last_name}}</td>
      <td>{{$item->fecha_nacimiento}}</td>
      <td>{{$item->email}}</td>

      <td> <a  class='btn btn-primary' href="  {{ route('edit', $item->id ) }} ">Editar  </a>
      <form method="POST" action="{{  route('destroy', $item->id )  }}">
      @csrf
      @method('DELETE')
      <button class='btn btn-danger' type="submit">Eliminar</button>
    </form></td>



    </tr>
  </tbody>
  @endforeach
</table>

</body>
</div>
</div>
</html>