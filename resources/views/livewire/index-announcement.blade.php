
<div>
    <div class="container mt-5">
        <div class="row">
            {{-- <div class="col-12"> --}}
            <div class="col-12 d-flex justify-content-center">
                {{-- <h1 class="text-center title-index title-page">Tutti gli annunci</h1> --}}
                <h1 class="text-center title-index title-page">Tutti gli annunci</h1>
                {{-- <p>Vuoi inserire un annuncio? <a class="btn btn-primary" href="{{route('announcement.create')}}">Inserisci</a></p> --}}
            </div>
        </div>
    </div>
    
    <div class="container-fluid my-5">
        <div class="row d-flex justify-content-evenly">
            @foreach ($announcements as $announcement)
                <x-card
                :$announcement
                />
            @endforeach
        </div>
    </div>
</div>
