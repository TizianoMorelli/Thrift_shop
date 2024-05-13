<div class="container my-5">
    <div class="row d-flex">
        <div class="col-12">
            <h1 class="text-center">Tutti gli annunci</h1>
            {{-- <p>Vuoi inserire un annuncio? <a class="btn btn-primary" href="{{route('announcement.create')}}">Inserisci</a></p> --}}
        </div>
        @foreach ($announcements as $announcement)
            <x-card
            :$announcement
            />
        @endforeach
    </div>
</div>
