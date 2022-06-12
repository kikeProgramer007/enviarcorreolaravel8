@extends('layouts/template')
@section('titulo', 'Contactanos')

@section('contenido')
    <h1>Catalogo de producto</h1>
    <h1>Dejanos un mensaje</h1>

    <form action="{{route('contactaanos.store')}}" method="POST">
    @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name" id="">
        </label>
        <br>

        @error('name')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label>
            Correo:
            <br>
            <input type="email" name="correo" id="">
        </label>
        <br>

        @error('correo')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label>
            Mensaje:
            <br>
            <textarea type="text" name="mensaje" rows="4"></textarea>
        </label>
        <br>

        @error('mensaje')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <button type ="submit">Enviar Mensaje</button>

    </form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif
@endsection