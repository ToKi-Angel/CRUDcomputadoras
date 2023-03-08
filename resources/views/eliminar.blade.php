@extends('layouts/main')
@section('contenido')

    <div class="container">
        <div class="row">
            <div class="col">
                <a href="/" class="btn btn-info mt-5 mb-5">Regresar</a>
                <h2>El dato a eliminar es:</h2>
                <ul>
                    <li>El nombre es: {{ $items->nombre }} </li>
                    <li>El nombre es: {{ $items->marca }} </li>
                    <li>El nombre es: {{ $items->modelo }} </li>
                    <li>El nombre es: {{ $items->ram }} </li>
                    <li>El nombre es: {{ $items->procesador }} </li>
                    <li>El nombre es: {{ $items->discoDuro }} </li>
                    <li>El nombre es: {{ $items->descripcion }} </li>
                    <li>El nombre es: {{ $items->imagen }} </li>
                </ul>
                <form action="{{ route('destroy', $items->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mt-3">
                        Eliminar Definitivamente!
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
