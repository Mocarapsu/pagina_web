<!DOCTYPE html>

<html lang="es">
<head>
    <script src="{{ asset('js/modal.js') }}"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobix - Parquímetro Durango</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- BARRA DE NAVEGACIÓN -->
    <nav class="p-4 flex justify-between items-center">
        <div class="nav-brand">Mobix</div>
        <div class="space-x-4">
            <a href="#" class="nav-link text-white">Pago físico</a>
            <a href="#" class="nav-link text-white">Pago en línea</a>
            <a href="#" class="nav-link text-white">Busca un lugar</a>
            <!-- Botón de "Registrarse" -->
            <button class="nav-button border border-white text-white hover:bg-white hover:text-blue-700 border-20 rounded-lg" id="openRegisterModal">Registrarse</button>

            <button class="nav-button bg-blue-500 text-white hover:bg-blue-600 border-100 rounded-lg" id="openLoginModal">Iniciar</button>
        </div>
    </nav>
    <header class="relative min-h-screen flex flex-col justify-center items-center text-center text-white bg-cover bg-center" style="background-image: url('{{ asset('images/sin_titulo_1.png') }}');">
        
        
    <header class="header-background min-full-screen text-center py-20 bg-cover bg-center">
        <!--<img src="{{ asset('images/Sin título-1.png') }}" alt="fondo" class="header-background-image"> -->
        <h1 class="header-title">Parquímetro Durango</h1>
         <p class="header-description">Explora la ciudad y encuentra lugares para estacionarte en el centro de Durango.</p>
        <!--<img src="{{ asset('images/fondo.jpeg') }}" alt="Ahorra tiempo">
        
 <!-- SECCIÓN DE BENEFICIOS -->

            
<section class="container mx-auto my-10 px-10 mt-20">
    <div class="grid md:grid-cols-3 gap-8">
        <!-- TARJETA 1 -->
        <div class="benefit-card bg-white p-6 rounded-lg shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-3 hover:shadow-2xl">
            <img src="{{ asset('gift/soborno.gif') }}" alt="Ahorra tiempo">
            <h2 class="text-xl font-bold mt-4">Ahorra tiempo</h2>
            <p class="text-gray-600">Reduce el tiempo de búsqueda de estacionamiento.</p>
        </div>

        <!-- TARJETA 2 -->
        <div class="benefit-card bg-white p-6 rounded-lg shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-3 hover:shadow-2xl">
            <img src="{{ asset('gift/tiempo.gif') }}" alt="Ahorra dinero">
            <h2 class="text-xl font-bold mt-4">Ahorra dinero</h2>
            <p class="text-gray-600">Reduce el gasto de gasolina dando vueltas en búsqueda de estacionamiento.</p>
        </div>

        <!-- TARJETA 3 -->
        <div class="benefit-card bg-white p-6 rounded-lg shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-3 hover:shadow-2xl">
            <img src="{{ asset('gift/policia.gif') }}" alt="Evita infracciones" class="w-50 h-50">
            <h2 class="text-xl font-bold mt-4">Evita infracciones</h2>
            <p class="text-gray-600">Ten control del tiempo y lugar en el que te estacionas.</p>
        </div>
    </div>
</section>

        
            <!-- SECCIÓN DE SERVICIOS -->
<section class="w-full min-h-screen flex items-center justify-center bg-white mt-20">
    <div class="container mx-auto px-10 text-center">
        <h2 class="text-4xl font-bold mb-12 text-gray-800">Nuestros Servicios</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="p-10 bg-gray-50 shadow-lg rounded-lg transition-transform transform hover:scale-105 w-64 mx-auto h-96 flex flex-col justify-center">
                <img src="{{ asset('icons/pago_en_linea.png') }}" alt="Pago en línea" class="mx-auto mb-4 w-20 h-20">
                <h3 class="text-2xl font-semibold text-gray-800">Pago en línea</h3>
                <p class="text-lg text-gray-600">Realiza pagos en línea desde tu dispositivo, de manera rápida y segura.</p>
            </div>
            <div class="p-10 bg-gray-50 shadow-lg rounded-lg transition-transform transform hover:scale-105 w-64 mx-auto h-96 flex flex-col justify-center">
                <img src="{{ asset('icons/pago_fisico.png') }}" alt="Pago físico" class="mx-auto mb-4 w-20 h-20">
                <h3 class="text-2xl font-semibold text-gray-800">Pago físico</h3>
                <p class="text-lg text-gray-600">Encuentra el punto de pago más cercano y paga en efectivo.</p>
            </div>
            <div class="p-10 bg-gray-50 shadow-lg rounded-lg transition-transform transform hover:scale-105 w-64 mx-auto h-96 flex flex-col justify-center">
                <img src="{{ asset('icons/buscar_estacionamiento.png') }}" alt="Buscar estacionamiento" class="mx-auto mb-4 w-20 h-20">
                <h3 class="text-2xl font-semibold text-gray-800">Buscar estacionamiento</h3>
                <p class="text-lg text-gray-600">Utiliza tu ubicación en tiempo real para encontrar lugares disponibles.</p>
            </div>
        </div>
    </div>
</section>


    <!-- SECCIÓN DE FUNCIONAMIENTO -->
    <section class="container mx-auto my-10 px-10 text-center">
        <h2 class="text-4xl font-bold mb-6">¿Cómo funciona Mobix?</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="p-8 bg-white shadow-lg rounded-lg">
                <img src="{{ asset('images/registro.png') }}" alt="Registrarse" class="mx-auto mb-4 w-24 h-24">
                <h3 class="text-2xl font-semibold">Registrarse</h3>
            </div>
            <div class="p-8 bg-white shadow-lg rounded-lg">
                <img src="{{ asset('images/pago.png') }}" alt="Realizar pago" class="mx-auto mb-4 w-24 h-24">
                <h3 class="text-2xl font-semibold">Realizar pago</h3>
            </div>
            <div class="p-8 bg-white shadow-lg rounded-lg">
                <img src="{{ asset('images/estacionamiento.png') }}" alt="Estacionarse" class="mx-auto mb-4 w-24 h-24">
                <h3 class="text-2xl font-semibold">Estacionarse</h3>
            </div>
        </div>
    </section>
    </header>

    @include('components.register-modal')
    @include('components.login-modal')
    
    <script src="{{ asset('js/modal.js') }}"></script>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">


    <footer class="footer-background py-10 text-center text-black">
        <p>&copy; 2025 Mobix. Todos los derechos reservados.</p>
</body>
</html>