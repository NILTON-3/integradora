@extends('layouts.base')
@section('titulo','Panel')
@section('contenido')
<section class="contenedor seccion"><div class="panel-cabecera"><div><span class="etiqueta naranja">ADMINISTRACIÓN</span><h1>Solicitudes recibidas</h1><p>Esta sección requiere iniciar sesión.</p></div>
<form method="POST" action="/logout">@csrf<button class="boton secundario-oscuro" type="submit">Cerrar sesión</button></form></div>
<div class="tabla-contenedor"><table><thead><tr><th>Fecha</th><th>Nombre</th><th>Correo</th><th>Teléfono</th><th>Servicio</th><th>Mensaje</th></tr></thead><tbody>
@forelse($solicitudes as $solicitud)<tr><td>{{ $solicitud->created_at->format('d/m/Y') }}</td><td>{{ $solicitud->nombre }}</td><td>{{ $solicitud->correo }}</td><td>{{ $solicitud->telefono ?: '—' }}</td><td>{{ $solicitud->servicio }}</td><td>{{ $solicitud->mensaje }}</td></tr>
@empty<tr><td colspan="6">Todavía no hay solicitudes registradas.</td></tr>@endforelse
</tbody></table></div></section>
@endsection
