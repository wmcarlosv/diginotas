@extends('layouts.template')

@section('title','Gestion de Docentes')

@section('content')
	<div class="row">
		<div class="col-md-12 header-title">
			<h2>Gestion de Docentes</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card card-blue">
				<div class="card-body">
					<h3>Registrar Datos del Docente</h3>
					<div class="row">
						<div class="col-md-7">
							<div class="row form-block">
								<div class="col-md-4">
									<label for="">Num Doc Docente:</label>
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control" />
								</div>
							</div>
							<div class="row form-block">
								<div class="col-md-4">
									<label for="">Tipo Doc:</label>
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control" />
								</div>
							</div>
							<div class="row form-block">
								<div class="col-md-4">
									<label for="">Nombre:</label>
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control" />
								</div>
							</div>
							<div class="row form-block">
								<div class="col-md-4">
									<label for="">Apellido:</label>
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control" />
								</div>
							</div>
							<div class="row form-block">
								<div class="col-md-4">
									<label for="">Direccion:</label>
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control" />
								</div>
							</div>
							<div class="row form-block">
								<div class="col-md-4">
									<label for="">Telefono:</label>
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control" />
								</div>
							</div>
							<div class="row form-block">
								<div class="col-md-4">
									<label for="">Direccion de Grupo:</label>
								</div>
								<div class="col-md-8">
									<select class="form-control">
										<option value="">Grupos</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="">Foto:</label>
										<br />
										<br />
										<div style="background: url('{{ asset("img/empty-profile.jpeg") }}'); background-size:cover; height: 200px; width: 200px;"></div>
										<br />
										<input type="file" />
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<button class="btn btn-success">Registrar</button>
							<a href="{{ route('professors.index') }}" class="btn btn-danger">Cancelar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop