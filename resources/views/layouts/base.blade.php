<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('titulo', 'JH7 SRL') | Telecomunicaciones</title>

    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>

<body>

    <!-- ENCABEZADO -->
    <header class="cabecera">
        <div class="contenedor barra">

            <!-- LOGOTIPO DE JH7 SRL -->
            <a href="/" class="identidad">
                <img
                    src="{{ asset('img/logo-jh7.png') }}"
                    alt="Logotipo de JH7 SRL"
                    class="logo-empresa"
                    width="150"
                    style="width:150px; max-width:150px; height:auto; display:block;"
                >
            </a>

            <!-- MENÚ DE NAVEGACIÓN -->
            <nav aria-label="Navegación principal">
                <a href="/">Inicio</a>
                <a href="/servicios">Servicios</a>
                <a href="/contacto">Contacto</a>
                <a href="/panel">Panel</a>
            </nav>

        </div>
    </header>

    <!-- CONTENIDO DE CADA PÁGINA -->
    <main>
        @yield('contenido')
    </main>

    <!-- PIE DE PÁGINA -->
    <footer>
        <div class="contenedor pie">

            <div>
                <strong>JH7 SRL</strong>
                <p>Conectamos personas, acercamos soluciones.</p>
            </div>

            <span>
                © {{ date('Y') }} JH7 SRL ·
            </span>

        </div>
    </footer>

</body>
</html>