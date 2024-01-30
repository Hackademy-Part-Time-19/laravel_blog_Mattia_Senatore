<x-layout>
    <div class="container">
        <div class="row">
            @foreach ($articoli as $chiave => $articolo)
                <x-card nome="{{ $articolo['title'] }}" 
                titolo="{{ $articolo['category'] }}"
                descrizione="{{ $articolo['description'] }}">
                    <a href="{{ route('ArtCompleto', ['id' => $chiave]) }}">Articolo Completo</a>
                </x-card>
            @endforeach
        </div>
    </div>
</x-layout>
