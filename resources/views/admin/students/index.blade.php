@extends('layouts.template')

@section('title','Estudiantes')

@section('content')
	<div class="row">
		<div class="col-md-12 header-title">
			<h2>Registro de Estudiantes</h2>
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
				<li><input type="radio" name="type_search" checked value="dni">Codigo Estudiante</li>
				<li><input type="radio" name="type_search" value="name">Nombre Estudiante</li>
			</ul>
		</div>
		<div class="col-md-6 zone-logo">
			<img src="{{ asset('img/estudiantes.png') }}" alt="">
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			<a href="{{ route('students.create') }}" class="btn btn-gris">Agregar</a>
			<table class="table">
				<thead>
					<th>Num Doc Estudiante</th>
					<th>Tipo Doc</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Edad</th>
					<th>Fecha Nac</th>
					<th>Direccion</th>
					<th>Telefono</th>
					<th>Jornada</th>
					<th>Email</th>
					<th>Genero</th>
					<th>Nombre Acu</th>
					<th>Telefono Acu</th>
					<th>Estado</th>
					<th>Acciones</th>
				</thead>
				<tbody>
					<tr>
						<td>19455541</td>
						<td>CC</td>
						<td>Carlos</td>
						<td>Vargas</td>
						<td>32</td>
						<td>09/01/1991</td>
						<td>Araure</td>
						<td>04245093801</td>
						<td>Tarde</td>
						<td>wmcarosv@gmail.com</td>
						<td>M</td>
						<td>Emily Chirinos</td>
						<td>04160984343</td>
						<td>Activo</td>
						<td>
							<a href="{{ route('students.edit',1) }}" class="btn btn-orange">Modificar</a>
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