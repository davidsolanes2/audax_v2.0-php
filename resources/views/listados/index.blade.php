@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-8">
            <div class="card">
                <div class="card-header"> Listado de Clientes/Contrato </div>

                <div class="card-body">
                   <ul>
	
						@foreach($cliente as $clientes)
							<li>{{$clientes->nombre}}, {{$clientes->tipo_contrato}}</li>
						@endforeach

					</ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
