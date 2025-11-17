<form method="POST" action="" class="flex flex-col gap-4 {{ $attributes->get('class') }}" id="{{ $attributes->get('id') }}">
    @csrf

    <x-input 
        label="Nom d'utilisateur"
        name="username"
        type="text"
        placeholder="Entrez votre nom d'utilisateur"
        required
    />

    <x-input 
        label="Adresse courriel"
        name="email"
        type="email"
        placeholder="Entrez votre adresse courriel"
        required
    />

    <x-input 
        label="Mot de passe"
        name="password"
        type="password"
        placeholder="Entrez votre mot de passe"
        required
    />

    <x-input 
        label="Confirmez le mot de passe"
        name="password_confirmation"
        type="password"
        placeholder="Confirmez votre mot de passe"
        required
    />

    <button type="submit" class="mt-4 bg-primary text-white py-2 px-4 rounded">
        S'inscrire
    </button>
</form>
