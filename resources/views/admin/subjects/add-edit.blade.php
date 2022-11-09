@extends('layouts.template')

@section('title','Gestion de Asignaturas')

@section('content')
	<div class="row">
		<div class="col-md-12 header-title">
			<h2>Gestion de Asignaturas</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card card-blue">
				<div class="card-body">
					<h3>Registrar Datos de la Asignaturas</h3>
					<div class="row">
						<div class="col-md-12">
							<div class="row form-block">
								<div class="col-md-4">
									<label for="">ID de la Asignatura:</label>
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control" />
								</div>
							</div>
							<div class="row form-block">
								<div class="col-md-4">
									<label for="">Tipo:</label>
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control" />
								</div>
							</div>
							<div class="row form-block">
								<div class="col-md-4">
									<label for="">Nombre Asignatura:</label>
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control" />
								</div>
							</div>
							<div class="row form-block">
								<div class="col-md-4">
									<label for="">Estado:</label>
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control" />
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<button class="btn btn-success">Registrar</button>
							<a href="{{ route('subjects.index') }}" class="btn btn-danger">Cancelar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop