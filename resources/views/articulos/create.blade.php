@extends('layouts.app', ['activePage' => 'articulos', 'titlePage' => __('Articulo')])

@section('title', 'Articulos')

@section('content')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <div class="content p-5">
        <div class="row">
            <div class="col-8">
                <form method="post" action="{{ route('articulos.create') }}" name="form-articulo" class="form-horizontal">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Crear artículo</h4>
                            <!-- <p class="card-category">User information</p> -->
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <label for="title" class="col-sm-2 col-form-label pt-3">Título</label>
                                <div class="col-sm-7">
                                    <div class="form-group bmd-form-group is-filled">
                                        <input class="form-control" name="name" name="title" id="title" type="text"
                                            placeholder="Título" required aria-required="true">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <label for="category_id" class="col-sm-2 col-form-label">Categoría</label>
                                <div class="col-sm-7">
                                    <select class="form-select form-select-lg w-100 px-2 btn" name="categoria_id"
                                        id="categoria_id">
                                        <option selected value="">Selecciona</option>
                                        @foreach ($categorias as $categoria)
                                            <option value="{!! $categoria->id !!}">{{ $categoria->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <label for="img_id" class="col-sm-2 col-form-label">Imagen</label>
                                <div class="col-sm-7">
                                    <select class="form-group bmd-form-group" name="img_id" id="img_id">
                                        <option selected value="">Selecciona</option>
                                        @foreach ($imagenes as $imagen)
                                            <option value="{!! $imagen->id !!}">{{ $imagen->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                            <div class="mt-3">
                                <div id="editor">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore sapiente quibusdam
                                        rem doloremque? Dolorem culpa animi nobis. Deleniti nulla blanditiis voluptate rem
                                        tempora eaque distinctio, totam fuga. Perspiciatis, voluptates voluptate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-4">
                <div class="card">

                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Acciones</h4>
                        <!-- <p class="card-category">User information</p> -->
                    </div>
                    <div class="card-body">
                        <button type="submit" form="form-articulo" id="btn-publicar" class="btn btn-warning w-100">Publicar</button>
                        <div class="row">
                            <div class="col-xl-6">
                                <button type="button" id="btn-guardar" class="btn btn-secondary w-100">Solo guardar</button>
                            </div>
                            <div class="col-xl-6">
                                <button type="button" id="btn-guardar" class="btn btn-secondary w-100">Vista previa</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <!-- Initialize Quill editor -->
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
    </script>

@endsection
