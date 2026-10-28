@extends('layouts.integradora')

@section('contenido')

<h2>Lista de juguetes</h2>

<p>
    Bienvenidos a Jugueteria El Trompo.
    Tenemos juguetes para todos los niños
    a precios accesibles.
</p>

<p>Hay {{ count($juguetes) }} juguetes en el estante.</p>

<ul>
    @foreach ($juguetes as $juguete)
        <li>
            {{ $juguete->nombre }}
            - Bs {{ $juguete->precio }}
        </li>
    @endforeach
</ul>

<p>Estante atendido por Nilton Mamani Cauna</p>

<a href="/juguetes/nuevo">Registrar nuevo juguete</a>

@endsection