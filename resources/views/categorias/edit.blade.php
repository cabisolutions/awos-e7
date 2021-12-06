@extends('layouts.app', ['activePage' => 'categorias', 'titlePage' => __('Categorias')])

@section('title', 'Categorias')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div>
                <div>
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{ _('Editar categoría') }}</h4>
                        </div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <i class="material-icons">close</i>
                                            </button>
                                            <span>{{ session('status') }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <form action="{{ route('categorias.update', $categoria) }}" method="POST">
                                @csrf
                                @method('PUT')
                            <span class="input-group-text" id="nombre">Categoria</span>
                                <input type="text" class="form-control" placeholder="Estampado" aria-label="nombre"
                                    aria-describedby="nombre" id="actualizarCategoria" name="nombre"
                                    value="{{ $categoria->nombre }}">
                                    <a type="button" class="btn btn-secondary" href="{{ url()->previous() }}">Volver atrás</a>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Actualizar</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
