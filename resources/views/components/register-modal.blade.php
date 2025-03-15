<div id="registerModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-55 z-50 hidden">
    <div class="bg-white rounded-lg shadow-xl p-8 w-full max-w-md relative">
        <!-- Botón de cierre -->
        <span class="modal-close absolute top-4 right-4 text-2xl cursor-pointer" onclick="closeRegisterModal()">&times;</span>

        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-2">Mobix</h2>
        <h3 class="text-lg text-center text-gray-600 mb-6">Regístrate</h3>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-4 text-left">
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black" placeholder="Ingrese su nombre" required>
            </div>

            <div class="mb-4 text-left">
                <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black" placeholder="Ingrese su correo" required>
            </div>

            <div class="mb-4 text-left">
                <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black" placeholder="Ingrese su contraseña" required>
            </div>

            <div class="flex items-center mb-6 text-left">
                <input type="checkbox" id="terms" required class="mr-2">
                <label for="terms" class="text-sm text-gray-600">
                    Acepto los <a href="#" class="text-blue-500 hover:underline">términos</a>, <a href="#" class="text-blue-500 hover:underline">condiciones</a> y <a href="#" class="text-blue-500 hover:underline">política de privacidad</a>.
                </label>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Registrarse</button>
        </form>

        <div class="my-6 text-center text-gray-600">O regístrate con</div>

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
            ¿Ya tienes una cuenta? <a href="#" onclick="closeRegisterModal(); openLoginModal();" class="text-blue-500 hover:underline">Inicia sesión</a>
        </p>
    </div>
</div>


