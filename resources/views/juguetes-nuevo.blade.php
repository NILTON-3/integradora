@extends('layouts.integradora')

@section('contenido')

<h2>Registrar nuevo juguete</h2>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/juguetes/nuevo" method="POST" novalidate>

    @csrf

    <p>
        <label for="nombre">Nombre del juguete:</label>
        <input type="text" id="nombre" name="nombre">
    </p>

    <p>
        <label for="precio">Precio en Bs:</label>
        <input type="number" id="precio" name="precio">
    </p>

    <button type="submit">Registrar juguete</button>

</form>

<p>
    <a href="/juguetes">Volver a la lista</a>
</p>

@endsection