<div>
    <x-display-message/>
    <x-display-error/>
    <div class="container-fluid my-5">
        <div class="row d-flex justify-content-center p-5">
            @foreach ( $announcements as $announcement )
                <x-card :announcement=$announcement></x-card>
            @endforeach
        </div>
    </div>
</div>
