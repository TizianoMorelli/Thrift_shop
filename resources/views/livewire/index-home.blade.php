<div>
    <x-display-message/>
    <x-display-error/>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="title-page">{{__('title.newAnnouncements')}}</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid my-5">
        <div class="row d-flex justify-content-center p-5">
            @foreach ( $announcements as $announcement )
                <x-card :announcement=$announcement>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        Nuovo
                      </span>
                </x-card>
            @endforeach
        </div>
    </div>
</div>
