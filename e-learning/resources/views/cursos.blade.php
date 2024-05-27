@extends('layouts.user')
 
@section('title', 'Cursos')
 
@section('contents')

<main class="bg-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h2 class="text-3xl font-bold mb-8">Nuestros Cursos</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
            <!-- Card 1 -->
            <div class="bg-white shadow-xl rounded-lg overflow-hidden relative">
                <img src="curso1.jpg" alt="Matemáticas" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-4">Curso de Matemáticas</h3>
                    <p class="text-gray-700 mb-6">Aprende los conceptos fundamentales de matemáticas y mejora tu habilidad para resolver problemas.</p>
                    <div class="flex items-center justify-center mb-4">
                        <p class="text-2xl font-semibold text-blue-500">$99</p>
                    </div>
                    @if (Auth::check())
                        <button class="bg-blue-500 text-white px-6 py-3 rounded-md text-lg font-semibold hover:bg-blue-600">Inscribirse</button>
                    @else
                        <a href="{{ route('login') }}" class="bg-blue-500 text-white px-6 py-3 rounded-md text-lg font-semibold hover:bg-blue-600">Iniciar Sesión</a>
                    @endif
                </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-white shadow-xl rounded-lg overflow-hidden relative">
                <img src="curso2.jpg" alt="Ciencias" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-4">Curso de Ciencias</h3>
                    <p class="text-gray-700 mb-6">Explora los principios básicos de la ciencia y realiza experimentos prácticos para entender el mundo que te rodea.</p>
                    <div class="flex items-center justify-center mb-4">
                        <p class="text-2xl font-semibold text-blue-500">$79</p>
                    </div>
                    @if (Auth::check())
                        <button class="bg-blue-500 text-white px-6 py-3 rounded-md text-lg font-semibold hover:bg-blue-600">Inscribirse</button>
                    @else
                        <a href="{{ route('login') }}" class="bg-blue-500 text-white px-6 py-3 rounded-md text-lg font-semibold hover:bg-blue-600">Iniciar Sesión</a>
                    @endif
                </div>
            </div>
            <!-- Card 3 -->
            <div class="bg-white shadow-xl rounded-lg overflow-hidden relative">
                <img src="curso3.jpg" alt="Historia" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-4">Curso de Historia</h3>
                    <p class="text-gray-700 mb-6">Descubre los eventos más importantes de la historia mundial y comprende cómo han moldeado el presente.</p>
                    <div class="flex items-center justify-center mb-4">
                        <p class="text-2xl font-semibold text-blue-500">$89</p>
                    </div>
                    @if (Auth::check())
                        <button class="bg-blue-500 text-white px-6 py-3 rounded-md text-lg font-semibold hover:bg-blue-600">Inscribirse</button>
                    @else
                        <a href="{{ route('login') }}" class="bg-blue-500 text-white px-6 py-3 rounded-md text-lg font-semibold hover:bg-blue-600">Iniciar Sesión</a>
                    @endif
                </div>
            </div>
            <!-- Card 4 -->
            <div class="bg-white shadow-xl rounded-lg overflow-hidden relative">
                <img src="curso4.jpg" alt="Idiomas" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-4">Curso de Idiomas</h3>
                    <p class="text-gray-700 mb-6">Aprende un nuevo idioma de manera efectiva y comunícate con confianza en situaciones cotidianas y profesionales.</p>
                    <div class="flex items-center justify-center mb-4">
                        <p class="text-2xl font-semibold text-blue-500">$69</p>
                    </div>
                    @if (Auth::check())
                        <button class="bg-blue-500 text-white px-6 py-3 rounded-md text-lg font-semibold hover:bg-blue-600">Inscribirse</button>
                    @else
                        <a href="{{ route('login') }}" class="bg-blue-500 text-white px-6 py-3 rounded-md text-lg font-semibold hover:bg-blue-600">Iniciar Sesión</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</main>



@endsection