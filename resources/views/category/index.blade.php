<x-layout>
    
    <div class="container my-5">
        <div class="row d-flex">
            @forelse ($category->announcements as $announcement)
                <x-card
                :$announcement
                />
                @empty
                {{-- da sistemare assolutamente il frontend  --}}
                <h5>Non ci sono annunci per questa categoria</h5>
                @auth
                    <a href="{{route('announcement.create')}}" class="btn btn-primary">Crea Annuncio</a>
                @endauth
                
            @endforelse
            
        </div>
    </div>
</x-layout>