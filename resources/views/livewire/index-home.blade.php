<div>
    <x-display-message/>
    <x-display-error/>
    <div class="container my-5">
        <div class="row d-flex">
            @foreach ( $announcements as $announcement )
                <x-card :announcement=$announcement></x-card>
            @endforeach
        </div>
    </div>
</div>
