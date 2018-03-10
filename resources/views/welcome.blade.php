@extends('master')

@section('contenido')
   <font color="black" face="Lithos Pro">
			<div class="container">
			<center>
				<font color="Cyan" face="Lithos Pro"><h1>Buscador de personas</h1></font>
					  <form action="{{url('formulario')}}" method="POST">
					  	{{csrf_field()}}
							
					  	<img src="imagen/datos1.png" width=35%>
							<br>
					  	<label for="buscador"><H2>Condiciones: </H2></label><br>
					    <H4><select class="custom-select my-1 mr-sm-2" class="border border-warning" name="buscador">
					      <option>Nombres</option>
					      <option>Apellidos</option>
					      <option>Edad</option>
					      <option>Pais</option>
					      <option>Profesion</option>
					    </select>	
							</H4>
					  	<br><br>
					  	<H2><input type="text" name="datoBusqueda" class="border border-warning" class="rounded">
							<br><br><button type="submit" class="btn btn-warning btn-lg">Send</button></H2>
					  </form>
						</center>
			</div>
			</font>

@stop

