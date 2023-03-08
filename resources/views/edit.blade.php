@extends('layouts/main')

@section('contenido')
    <div class="container">
        <h1>Agregar nueva persona</h1>
        <a href="/" class="btn btn-info mt-5 mb-5">Regresar</a>
        <form method="POST" action="{{ route('update', $items->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $items->nombre }}">
            </div>

            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" name="marca" id="marca" class="form-control" value="{{ $items->marca }}">
            </div>

            <div class="form-group">
                <label for="modelo">Modelo</label>
                <input type="text" name="modelo" id="modelo" class="form-control" value="{{ $items->modelo }}">
            </div>

            <div class="form-group">
                <label for="ram">RAM</label>
                <input type="text" name="ram" id="ram" class="form-control" value="{{ $items->ram }}">
            </div>

            <div class="form-group">
                <label for="procesador">Procesador</label>
                <input type="text" name="procesador" id="procesador" class="form-control" value="{{ $items->procesador }}">
            </div>

            <div class="form-group">
                <label for="discoDuro">Disco Duro</label>
                <input type="text" name="discoDuro" id="discoDuro" class="form-control" value="{{ $items->discoDuro }}">
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input name="descripcion" id="descripcion" class="form-control" value="{{ $items->descripcion }}"></input>
            </div>

            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="text" name="imagen" id="imagen" class="form-control" value="{{ $items->imagen }}">
            </div>

            <button type="submit" class="btn btn-primary mt-4">Guardar</button>
        </form>
    </div>
@endsection
