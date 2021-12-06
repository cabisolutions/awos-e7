@extends('layouts.app', ['activePage' => 'categorias', 'titlePage' => __('Categorias')])

@section('title', 'Categorias')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{ _('Listado') }}</h4>
                            <p class="card-category"> {{ __('Gestiona los registros') }}</p>
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
                            <div class="row">
                                <div class="col-12 text-right">
                                    {{-- Buton del modal --}}
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#nuevaCategoriaModal">
                                        <i class="material-icons">add</i>
                                    </button>
                                    {{-- Modal --}}
                                    <div class="modal fade" id="nuevaCategoriaModal" tabindex="-1"
                                        aria-labelledby="nuevaCategoriaModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="nuevaCategoriaModalLabel">Ingresa
                                                        Categoria </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label=""></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('categorias.store') }}" method="POST">
                                                        {{-- generar el token para el envio de dato csrf --}}
                                                        {{ csrf_field() }}
                                                        <div class="modal-body">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="nombre">Categoria</span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Estampado" aria-label="nombre"
                                                                    aria-describedby="nombre" id="inputNuevaCategoria"
                                                                    name="nombre">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancelar</button>
                                                            <input type="submit" class="btn btn-primary" value="Guardar">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="actualizarCategoriaModal" tabindex="-1"
                                        aria-labelledby="actualizarCategoriaModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="actualizarCategoriaModalLabel">Ingresa
                                                        Categoria </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label=""></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('categorias.store') }}" method="POST">
                                                    <span class="input-group-text" id="nombre">Categoria</span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Estampado" aria-label="nombre"
                                                                    aria-describedby="nombre" id="actualizarCategoria"
                                                                    name="nombre">
                                                            </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancelar</button>
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light" form="actualizarCategoriaFormulario">Actualizar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                {{-- <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">{{ __('Add user') }}</a> --}}
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover mx-auto w-auto">
                                    <thead class="text-primary">
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th class="text-right">Acciones</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($categorias as $categoria)
                                            <tr>
                                                <td>{{ $categoria->id }}</td>
                                                <td>{{ $categoria->nombre }}</td>
                                                <td class="text-right">
                                                    <a type="button"
                                                    class="btn btn-warning btn-link m-0 p-2 dropdown-toggle waves-effect waves-light" href="{{ route('categorias.edit', $categoria) }}">
                                                    <i class="material-icons">edit</i>
                                                    </a>
                                                    <form action="{{ route('categorias.destroy', $categoria) }}"
                                                        method="post" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button" class="btn btn-danger btn-link m-0 p-2"
                                                            data-original-title="" title=""
                                                            onclick="confirm('Confirma para eliminar este registro') ? this.parentElement.submit() : ''">
                                                            <i class="material-icons">delete</i>
                                                            <div class="ripple-container"></div>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$categorias->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const myModal = document.getElementById('nuevaCategoriaModal')
        const myInput = document.getElementById('inputNuevaCategoria')
        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })
    </script>
@endsection