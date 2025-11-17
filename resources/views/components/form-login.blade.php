<form method="POST" action="" class="flex flex-col gap-4 {{ $attributes->get('class') }}" id="{{ $attributes->get('id') }}">
    @csrf
    <x-input 
        label="Adresse courriel" 
        name="email" 
        type="email" 
        placeholder="Entrez votre adresse courriel" 
    />

    <x-input 
        label="Mot de passe" 
        name="password" 
        type="password" 
        placeholder="Entrez votre mot de passe" 
    />

    <button 
        type="submit" 
        class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">
        Se connecter
    </button>
</form>