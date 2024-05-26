<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>E-learning - @yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="logo.png">

</head>
<body>
    <div>
        <nav class="bg-gradient-to-r from-gray-900 via-gray-800 to-black py-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between">
                    <!-- Logo and Main Navigation -->
                    <div class="flex items-center">
                        <div class="flex-shrink-0 text-white mr-6">
                            <a href="/" class="text-white text-3xl font-bold flex items-center">
                                <img src="logo.png" alt="E-learning Logo" class="mr-2 h-20">
                                E-learning
                            </a>
                        </div>
                        <!-- Dropdown Menus -->
                        <div class="flex space-x-4 relative">
                            <!-- Dropdown 1 -->
                            <div class="relative">
                                <button class="text-gray-300 hover:bg-gray-600 hover:text-white px-4 py-3 rounded-md text-base font-medium" onclick="toggleDropdown(0)">Inicio <i class="bi bi-caret-down-fill"></i></button>
                                <div class="absolute z-10 -ml-4 mt-3 transform w-48 py-2 bg-white rounded-md shadow-lg hidden" id="dropdownContent0">
                                    <!-- Dropdown Content -->
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><i class="fas fa-home"></i> - Home</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><i class="fas fa-book"></i> - Cursos</a>
                                </div>
                            </div>
                            <!-- Dropdown 2 -->
                            <div class="relative">
                                <button class="text-gray-300 hover:bg-gray-600 hover:text-white px-4 py-3 rounded-md text-base font-medium" onclick="toggleDropdown(1)">Cursos <i class="bi bi-caret-down-fill"></i></button>
                                <div class="absolute z-10 -ml-4 mt-3 transform w-48 py-2 bg-white rounded-md shadow-lg hidden" id="dropdownContent1">
                                    <!-- Dropdown Content -->
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><i class="fas fa-calculator"></i> - Matemáticas</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><i class="fas fa-flask"></i> - Ciencias</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><i class="fas fa-history"></i> - Historia</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><i class="fas fa-language"></i> - Idiomas</a>
                                </div>
                            </div>
                            <!-- Dropdown 3 -->
                            <div class="relative">
                                <button class="text-gray-300 hover:bg-gray-600 hover:text-white px-4 py-3 rounded-md text-base font-medium" onclick="toggleDropdown(2)">Ayuda <i class="bi bi-caret-down-fill"></i></button>
                                <div class="absolute z-10 -ml-4 mt-3 transform w-48 py-2 bg-white rounded-md shadow-lg hidden" id="dropdownContent2">
                                    <!-- Dropdown Content -->
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><i class="fas fa-hands-helping"></i> - Soporte</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><i class="fas fa-question-circle"></i> - FAQs</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><i class="fas fa-envelope"></i> - Contacto</a>
                                </div>
                            </div>
                            <!-- Campo de búsqueda -->
                            <div class="relative">
                                <input type="text" class="text-gray-800 placeholder-gray-400 px-4 py-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 w-64" placeholder="Buscar...">
                                <button class="absolute right-0 top-0 bottom-0 px-4 py-3 bg-gray-700 text-white rounded-r-md"><i class="fas fa-search"></i></button>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Secondary Navigation and Additional Elements -->
                    <div class="hidden md:flex items-center space-x-4">
                        <!-- Authentication Links -->
                        <div class="ml-4 flex items-center">
                            <a href="/login" class="font-semibold text-white px-4 py-3 rounded-md text-base font-medium bg-blue-600 hover:bg-blue-700 active:bg-blue-800"><i class="fas fa-sign-in-alt"></i> Log in</a>
                            <a href="/register" class="ml-4 font-semibold text-white px-4 py-3 rounded-md text-base font-medium bg-green-600 hover:bg-green-700 active:bg-green-800"><i class="fas fa-user-plus"></i> Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <script>
            // Función para cerrar todos los dropdowns abiertos
            function closeDropdowns() {
                var dropdowns = document.querySelectorAll('.dropdown-content');
                dropdowns.forEach(function(item) {
                    item.classList.add('hidden');
                });
            }
        
            // Función para alternar la visibilidad de un dropdown
            function toggleDropdown(index) {
                var dropdownContent = document.getElementById('dropdownContent' + index);
                dropdownContent.classList.toggle('hidden');
                
                // Ocultar los otros dropdowns
                var dropdowns = document.querySelectorAll('.dropdown-content');
                dropdowns.forEach(function(item, i) {
                    if (i != index) {
                        item.classList.add('hidden');
                    }
                });
            }
        </script>
                
        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <div><div>@yield('contents')</div></div>
            </div>
        </main>
    </div>
</body>
<br>
<footer class="bg-gradient-to-r from-gray-900 via-gray-800 to-black text-white py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <h2 class="text-lg font-bold mb-2">E-learning</h2>
                <p class="text-sm">En E-learning, creemos en proporcionar educación de alta calidad accesible desde cualquier parte del mundo. ¡Únete a nuestros cursos y comienza a aprender hoy mismo!</p>
            </div>
            <div>
                <h2 class="text-lg font-bold mb-2">Información de Contacto</h2>
                <p class="text-sm"><i class="fas fa-map-marker-alt"></i> 123 Calle Principal, Ciudad, País</p>
                <p class="text-sm"><i class="fas fa-phone"></i> +1 123-456-7890</p>
                <p class="text-sm"><i class="fas fa-envelope"></i> soporte@elearning.com</p>
            </div>
            <div>
                <h2 class="text-lg font-bold mb-2">Síguenos</h2>
                <ul class="flex justify-center space-x-4">
                    <li><a href="#" class="text-blue-500 hover:text-blue-600"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="#" class="text-blue-500 hover:text-blue-600"><i class="bi bi-instagram"></i></a></li>
                    <li><a href="#" class="text-blue-500 hover:text-blue-600"><i class="bi bi-twitter"></i></a></li>
                </ul>
            </div>
        </div>
        <hr class="mt-4 mb-2 border-gray-600">
        <p class="text-sm">&copy; 2024 E-learning. Todos los derechos reservados.</p>
    </div>
</footer>

</html>
