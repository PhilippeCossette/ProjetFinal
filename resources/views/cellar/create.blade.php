@extends('layouts.app')
@section('title', 'Créer un cellier')

{{-- Formulaire d'ajout d'un nouveau cellier --}}
@section('content')
<section class="p-4 pt-2" aria-label="Ajout d'un nouveau cellier">
    {{-- Insertion du composant d'en-tête de page --}}
    <x-page-header title="Créer un cellier" />

    {{-- Affichage des erreurs de validation --}}
    @if ($errors->any())
    <div class="bg-red-100 text-red-700 p-3 rounded text-sm mb-4">
        @foreach ($errors->all() as $error)
        <p>• {{ $error }}</p>
        @endforeach
    </div>
    @endif

    <div class="mt-6">
        <form
            action="{{ route('cellar.store') }}"
            method="POST"
            class="flex flex-col gap-4"
            aria-label="Formulaire de création de cellier">
            @csrf
            <x-input label="Nom du cellier" name="nom" type="text" maxlength="20" placeholder="Entrez le nom du cellier" value="{{ old('nom', $cellier->nom ?? '') }}" />
            <x-primary-btn label="Ajouter le cellier" type="submit" />
        </form>
    </div>
</section>
@endsection