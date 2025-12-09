@extends('layouts.app')

@section('title', 'Accès refusé')

@section('content')
<div class="min-h-screen flex flex-col justify-center items-center text-center px-4">

    <img src="{{ asset('images/403.png') }}"
         alt="Accès refusé" class="w-40 opacity-90">

    <h1 class="mt-6 text-4xl font-bold text-gray-800">
        Accès refusé
    </h1>

    <p class="mt-2 text-gray-600 max-w-md leading-relaxed">
        Vous n'avez pas la permission d'accéder à cette ressource.
    </p>

    <x-primary-btn label="Retour à l'accueil" type="href" :route="'bouteille.catalogue'" class="mt-6" />
</div>
@endsection
