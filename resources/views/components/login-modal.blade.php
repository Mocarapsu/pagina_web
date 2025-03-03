<!-- Modal de Inicio de Sesión -->
<div id="loginModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-55 z-50 hidden">
    <div class="bg-white rounded-lg shadow-xl p-8 w-full max-w-md relative">
        <!-- Botón de cierre -->
        <span class="modal-close absolute top-4 right-4 text-2xl cursor-pointer" onclick="closeLoginModal()">&times;</span>

        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-2">Mobix</h2>
        <h3 class="text-lg text-center text-gray-600 mb-6">Iniciar Sesión</h3>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4 text-left">
                <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ingrese su correo" required>
            </div>

            <div class="mb-4 text-left">
                <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ingrese su contraseña" required>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Iniciar Sesión</button>
        </form>

        <div class="my-6 text-center text-gray-600">O ingresa con</div>

        <div class="flex justify-center gap-4">
    <a href="{{ url('/auth/facebook') }}" class="flex items-center justify-start gap-2 px-4 py-2 border border-gray-300 rounded-lg hover:bg-blue-100">
        <img src="https://cdn-icons-png.flaticon.com/512/124/124010.png" alt="Facebook" width="20">
        <span class="text-sm text-gray-700">Facebook</span>
    </a>
    <a href="{{ url('/auth/google') }}" class="flex items-center justify-start gap-2 px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100">
        <img src="https://cdn-icons-png.flaticon.com/512/300/300221.png" alt="Google" width="20">
        <span class="text-sm text-gray-700">Google</span>
    </a>
</div>

        <p class="mt-6 text-center text-sm text-gray-600">
            ¿No tienes una cuenta? <a href="#" onclick="closeLoginModal(); openRegisterModal();" class="text-blue-500 hover:underline">Regístrate</a>
        </p>
    </div>
</div>
