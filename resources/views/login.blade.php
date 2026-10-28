@extends('layouts.base')
@section('titulo','Acceso administrador')
@section('contenido')
<section class="contenedor seccion estrecho"><div class="formulario-tarjeta"><h1>Acceso del administrador</h1><p>Panel privado de JH7 SRL.</p>
@if(session('error'))<p class="aviso error">{{ session('error') }}</p>@endif
@if($errors->any())<p class="aviso error">Ingresa un correo válido y una contraseña.</p>@endif
<form action="/login" method="POST">@csrf
<label for="email">Correo electrónico</label><input type="email" id="email" name="email" required>
<label for="password">Contraseña</label><input type="password" id="password" name="password" required>
<button class="boton" type="submit">Ingresar</button>
</form></div></section>
@endsection
