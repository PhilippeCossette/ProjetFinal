@props(['nom' => '', 'image' => null, 'prix' => ''])
{{-- Carte de bouteille --}}
<div class='flex flex-col justify-between bg-card rounded-lg shadow-md hover:shadow-sm transition-all duration-300 overflow-hidden'>
    
    <picture class='w-full h-32 overflow-hidden bg-neutral-400 flex items-center justify-center'>
        @if ($image === null)
            <p>Aucune Image</p>
        @else
            <img src='{{ $image }}' alt='Image de la bouteille {{ $nom }}' class='w-full h-full object-cover hover:scale-105 transition-transform duration-300'/>
        @endif
    </picture>
    <div class='p-4 flex flex-col gap-2'>
        <span class='truncate font-semibold text-text-title text-md'>{{ $nom }}</span>
        <span class='text-text-muted'>{{ $prix }} $</span>
        <span class="flex justify-end"> 
            <x-primary-btn id="add-to-cellar-btn" rounded="lg" label="Ajouter" class="flex-1"/>
            <input type=number id="quantity" name="quantity" min="1" max="10" value="1" class="w-16 ml-2"/>
        </span>
    </div>
</div>