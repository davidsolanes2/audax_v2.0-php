@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-8">
            <div class="card">
                <div class="card-header"> Ficha de Clientes </div>

                <div class="card-body">
                    <form method="post" action="{{ route('cliente.save') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="" class="col-md-4 col-form-label text-md-right" style="margin-top: 1%;">Tipo Contrato</label>
  
                            <select name="tipo" id="input" class="form-control" style="margin-top: 1%; margin-left: 2%; width: 46%;">
                                <option value="">-- Seleccione Contrato --</option>
                                @foreach ($tipos_contrato as $tipo_contrato)
                                    <option value="{{ $tipo_contrato['id']}}">{{ $tipo_contrato['tipo'] }}</option>
                                @endforeach    
                            </select>

                        </div>
                 
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar cambios
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
