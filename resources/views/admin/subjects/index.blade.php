@extends('layouts.template')

@section('title','Asignaturas')

@section('content')
	<div class="row">
		<div class="col-md-12 header-title">
			<h2>Registro de Asignaturas</h2>
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
				<li><input type="radio" name="type_search" checked value="dni">Id de la Asignatura</li>
				<li><input type="radio" name="type_search" value="name">Nombre de la Asignatura</li>
			</ul>
		</div>
		<div class="col-md-6 zone-logo">
			<img src="{{ asset('img/asignaturas.png') }}" alt="">
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			<a href="{{ route('subjects.create') }}" class="btn btn-gris">Agregar</a>
			<table class="table">
				<thead>
					<th>ID Asignatura</th>
					<th>Tipo</th>
					<th>Nombre</th>
					<th>Estado</th>
					<th>Acciones</th>
				</thead>
				<tbody>
					<tr>
						<td>Asig 001</td>
						<td>Principal</td>
						<td>Matematicas</td>
						<td>Activo</td>
						<td>
							<a href="{{ route('subjects.edit',1) }}" class="btn btn-orange">Modificar</a>
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