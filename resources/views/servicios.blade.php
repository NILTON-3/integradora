@extends('layouts.base')

@section('titulo', 'Servicios')

@section('contenido')

<!-- ENCABEZADO DE SERVICIOS -->
<section class="titulo-pagina">
    <div class="contenedor">

        <span class="etiqueta">NUESTROS SERVICIOS</span>

        <h1>Servicios de JH7 SRL</h1>

        <p>
            Conectamos personas, acercamos soluciones.
        </p>

    </div>
</section>

<!-- LISTA DE SERVICIOS -->
<section class="contenedor seccion">

    <h2>Nuestros servicios</h2>

    <p>
        Brindamos soluciones para la instalación,
        mantenimiento y ampliación de redes
        de telecomunicaciones.
    </p>

    <div class="servicios-grid">

        <div class="servicio-tarjeta">
            <h3>Fibra óptica última milla</h3>
            <p>
                Instalación de conexiones de fibra
                óptica de última milla.
            </p>
        </div>

        <div class="servicio-tarjeta">
            <h3>Radio bases</h3>
            <p>
                Servicios relacionados con
                infraestructura de radio bases.
            </p>
        </div>

        <div class="servicio-tarjeta">
            <h3>Radio Enlaces</h3>
            <p>
                Servicios de instalación y
                mantenimiento de radio enlaces.
            </p>
        </div>

        <div class="servicio-tarjeta">
            <h3>Mantenimiento y ampliaciones FTTH</h3>
            <p>
                Mantenimiento y ampliación
                de redes de fibra óptica FTTH.
            </p>
        </div>

    </div>

    <a href="/contacto" class="boton">
        Solicitar un servicio
    </a>

    <a href="/">
        Volver al inicio
    </a>

</section>

@endsection