@extends('layouts.base')

@section('titulo', 'Inicio')

@section('contenido')

<section class="titulo-pagina">
    <div class="contenedor">
        <span class="etiqueta">BIENVENIDOS</span>

        <h1>JH7 S.R.L.</h1>

        <h2>Conectamos personas, acercamos soluciones</h2>

        <p>
            Somos una empresa dedicada a brindar
            servicios de telecomunicaciones.
        </p>

        <a href="/servicios" class="boton">
            Ver nuestros servicios
        </a>
    </div>
</section>

<section class="contenedor seccion">

    <h2>Nuestros servicios</h2>

    <p>
        En JH7 SRL ofrecemos soluciones
        para redes de telecomunicaciones.
    </p>

    <div class="servicios-grid">

        <div class="servicio-tarjeta">
            <h3>Fibra óptica última milla</h3>
            <p>Instalación de conexiones de fibra óptica.</p>
        </div>

        <div class="servicio-tarjeta">
            <h3>Radio bases</h3>
            <p>Servicios relacionados con infraestructura de radio bases.</p>
        </div>

        <div class="servicio-tarjeta">
            <h3>Radioenlaces</h3>
            <p>Instalación y mantenimiento de radio enlaces.</p>
        </div>

        <div class="servicio-tarjeta">
            <h3>Mantenimiento y ampliaciones FTTH</h3>
            <p>Mantenimiento y ampliación de redes de fibra óptica.</p>
        </div>

    </div>

    <a href="/contacto" class="boton">
        Solicitar un servicio
    </a>

</section>

@endsection