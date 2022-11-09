@extends('layouts.template')

@section('title','Docentes')

@section('content')
	<div class="row">
		<div class="col-md-12 header-title">
			<h2>Registro de Docentes</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="input-group" id="search-box">
				<input type="text" class="form-control" placeholder="buscar">
				<div class="input-group-append">
				  <button class="btn">
	    				<i class="fas fa-search"></i>
	    			</button>
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<ul class="search-type">
				<li><input type="radio" name="type_search" checked value="dni">Documento Docente</li>
				<li><input type="radio" name="type_search" value="name">Nombre Docente</li>
			</ul>
		</div>
		<div class="col-md-6 zone-logo">
			<img src="{{ asset('img/docentes.jpg') }}" alt="">
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			<a href="{{ route('professors.create') }}" class="btn btn-gris">Agregar</a>
			<table class="table">
				<thead>
					<th>Documento Docente</th>
					<th>Tipo Doc</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Direccion</th>
					<th>Telefono</th>
					<th>Direccion de Grupo</th>
					<th>Acciones</th>
				</thead>
				<tbody>
					<tr>
						<td>19455541</td>
						<td>CC</td>
						<td>Carlos</td>
						<td>Vargas</td>
						<td>Araure</td>
						<td>04245093801</td>
						<td>7-2</td>
						<td>
							<a href="{{ route('professors.edit',1) }}" class="btn btn-orange">Modificar</a>
							<a href="#" class="btn btn-danger">Cambiar Estado</a>
						</td>
					</tr> 
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center">
			<a href="{{ route('home') }}" class="btn btn-orange"><i class="fas fa-home"></i> Volver</a>
		</div>
	</div>
@stop