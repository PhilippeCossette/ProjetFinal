@extends('layouts.app')

@section('title', 'Session expirée')

@section('content')
<div class="min-h-screen flex flex-col justify-center items-center text-center px-4">

    <img src="{{ asset('images/419.png') }}"
         alt="Session expirée" class="w-40 opacity-90">

    <h1 class="mt-6 text-4xl font-bold text-gray-800">
        Session expirée
    </h1>

    <p class="mt-2 text-gray-600 max-w-md leading-relaxed">
        Votre session a expiré. Veuillez réessayer l'action demandée.
    </p>

    <x-primary-btn label="Recharger la page" type="href" :route="'bouteille.catalogue'" class="mt-6" />
</div>
@endsection
