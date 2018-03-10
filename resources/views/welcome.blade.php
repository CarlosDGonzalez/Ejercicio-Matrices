@extends('master')

@section('contenido')
   <font color="black" face="Lithos Pro">
			<br><br>
			<div class="container">
			  
			  	<blockquote>
			    <div class="col"><h1>Buscador de personas</h1>
			    </blockquote>
			    	
					  <form action="{{url('formulario')}}" method="POST">
					  	{{csrf_field()}}
					  	
					  	<label for="buscador">Condiciones: </label><br>
					    <select class="custom-select my-1 mr-sm-2" class="border border-warning" name="buscador">
					      <option>Nombres</option>
					      <option>Apellidos</option>
					      <option>Edad</option>
					      <option>Pais</option>
					      <option>Profesion</option>
					    </select>	
					  	<br><br>
					  	<input type="text" name="datoBusqueda" class="border border-warning" class="rounded">
					  	<br><br><button type="submit" class="btn btn-danger">Send</button>
					  </form>
			</div>
			</font>

@stop

