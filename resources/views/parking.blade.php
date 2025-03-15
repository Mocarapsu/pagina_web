@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-blue-950 to-blue-900">

    <!-- Header -->
    <header class="p-4 flex justify-between items-center">
        <h1 class="text-white text-2xl font-bold">Mobix</h1>
        <div class="flex items-center gap-4">
            <a href="#" class="px-4 py-2 bg-blue-800/60 text-white border border-blue-400/30 hover:bg-blue-700/70">
                My vehicles
            </a>
            <button class="p-0 h-10 w-10 rounded-full">
                <div class="h-10 w-10 bg-gray-300 rounded-full flex items-center justify-center text-white font-bold">
                    U
                </div>
            </button>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-md mx-auto pt-20 px-4">
        <div class="text-center mb-12">
            <h2 class="text-white text-4xl font-bold mb-4">Welcome to Mobix</h2>
            <p class="text-blue-100 mb-6">{{ Auth::user()->name }}</p>
        </div>

        <!-- Search Section -->
        <div class="relative mb-6">
            <input type="text" placeholder="Find a place..." class="bg-white/10 border-0 text-white placeholder:text-white/70 pl-4 pr-10 py-6 w-full" />
            <svg class="absolute right-3 top-1/2 -translate-y-1/2 text-white/70 h-5 w-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 19c4.4 0 8-3.6 8-8s-3.6-8-8-8-8 3.6-8 8 3.6 8 8 8zm0 2c5.5 0 10-4.5 10-10s-4.5-10-10-10-10 4.5-10 10 4.5 10 10 10zm3-10h-6v2h6v-2z" />
            </svg>
        </div>

        <!-- Quick Searches -->
        <div class="bg-white/5 border-0 rounded-lg p-4">
            <h3 class="text-white/90 text-sm mb-4">Búsquedas rápidas</h3>
            <button class="w-full justify-start bg-white/10 hover:bg-white/20 text-white border-0 px-4 py-2 mb-2">
                Dónde pagar
            </button>
            <button class="w-full justify-start bg-white/10 hover:bg-white/20 text-white border-0 px-4 py-2 mb-2">
                Estacionamiento cercano
            </button>
            <button class="w-full justify-start bg-white/10 hover:bg-white/20 text-white border-0 px-4 py-2">
                Estacionamiento para discapacitados
            </button>
        </div>
    </main>
</div>
