<div>
    <x-display-message/>
    <x-display-error/>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="title-page">Ultimi Annunci</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid my-5">
        <div class="row d-flex justify-content-center p-5">
            @foreach ( $announcements as $announcement )
                <x-card :announcement=$announcement></x-card>
            @endforeach
        </div>
    </div>
</div>
