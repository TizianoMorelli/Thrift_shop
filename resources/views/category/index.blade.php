<x-layout>
    
    <div class="container my-5 box-category">
        <div class="row d-flex">
            @forelse ($category->announcements as $announcement)
            <x-card
            :$announcement
            />
            @empty
            <div class="container ">
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-center mt-5">Non ci sono annunci per questa categoria!</h4>
                    </div>
               
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        
                        @auth
                        <a href="{{route('announcement.create')}}" class="btn btn-category mt-4">Crea Annuncio</a>
                        @endauth
                    </div>
                </div>
            </div>
            
            {{-- da sistemare assolutamente il frontend  --}}
            
            
            @endforelse
            
        </div>
    </div>
    
</x-layout>