@extends('layouts.base')

@section('titulo', 'Contacto')

@section('contenido')

    <!-- ENCABEZADO DE CONTACTO -->
    <section class="titulo-pagina">
        <div class="contenedor">
            <h1>Contacto</h1>
            <p>Solicita información sobre nuestros servicios.</p>
        </div>
    </section>

    <!-- FORMULARIO DE CONTACTO -->
    <section class="seccion">
        <div class="contenedor estrecho">

            <div class="formulario-tarjeta">

                <h2>Solicita un servicio</h2>

                <p>
                    Completa el formulario y nos pondremos
                    en contacto contigo.
                </p>

                <!-- MENSAJE DE CONFIRMACIÓN -->
                @if (session('exito'))
                    <div class="aviso exito">
                        {{ session('exito') }}
                    </div>
                @endif

                <!-- ERRORES DE VALIDACIÓN -->
                @if ($errors->any())
                    <div class="aviso error">
                        <p>Revisa los siguientes errores:</p>

                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- ENVÍO DE DATOS A LARAVEL -->
                <form action="/contacto" method="POST">

                    @csrf

                    <!-- NOMBRE -->
                    <label for="nombre">
                        Nombre completo
                    </label>

                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        value="{{ old('nombre') }}"
                        required
                    >

                    <!-- CORREO -->
                    <label for="correo">
                        Correo electrónico
                    </label>

                    <input
                        type="email"
                        id="correo"
                        name="correo"
                        value="{{ old('correo') }}"
                        required
                    >

                    <!-- TELÉFONO -->
                    <label for="telefono">
                        Teléfono
                    </label>

                    <input
                        type="tel"
                        id="telefono"
                        name="telefono"
                        value="{{ old('telefono') }}"
                    >

                    <!-- SERVICIO -->
                    <label for="servicio">
                        Servicio solicitado
                    </label>

                    <select
                        id="servicio"
                        name="servicio"
                        required
                    >
                        <option value="">
                            Selecciona un servicio
                        </option>

                        <option value="Fibra óptica última milla"
                            @selected(old('servicio') == 'Fibra óptica última milla')>
                            Fibra óptica última milla
                        </option>

                        <option value="Radiobases"
                            @selected(old('servicio') == 'Radiobases')>
                            Radio bases
                        </option>

                        <option value="Radioenlaces"
                            @selected(old('servicio') == 'Radioenlaces')>
                            Radio enlaces
                        </option>

                        <option value="Mantenimiento y ampliaciones FTTH"
                            @selected(old('servicio') == 'Mantenimiento y ampliaciones FTTH')>
                            Mantenimiento y ampliaciones FTTH
                        </option>
                    </select>

                    <!-- MENSAJE -->
                    <label for="mensaje">
                        Mensaje
                    </label>

                    <textarea
                        id="mensaje"
                        name="mensaje"
                        rows="5"
                        required
                    >{{ old('mensaje') }}</textarea>

                    <!-- BOTÓN DE ENVÍO -->
                    <button type="submit" class="boton">
                        Enviar solicitud
                    </button>

                </form>

            </div>

        </div>
    </section>

@endsection
