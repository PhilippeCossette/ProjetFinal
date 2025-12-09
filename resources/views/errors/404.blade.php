@extends('layouts.app')

@section('title', 'Page introuvable')

@section('content')
<div class="min-h-screen flex flex-col justify-center items-center text-center px-4">

    {{-- Illutstration --}}
    <img 
        src="{{ asset('images/404.png') }}"
        alt="Page introuvable"
        class="w-40 opacity-90">

    {{-- Code + message --}}
    <h1 class="mt-6 text-4xl font-bold text-gray-800">
        Oups! Page introuvable
    </h1>

    <p class="mt-2 text-gray-600 max-w-md leading-relaxed">
        La page que vous tentez d’accéder est inexistante, a été déplacée
        ou n’est plus disponible. Désolé pour le désagrément.
    </p>

    {{-- Button --}}
    <x-primary-btn 
        label="Retour à l'accueil" 
        type="href" 
        :route=" 'bouteille.catalogue' " 
        class="mt-6" />

</div>
@endsection
