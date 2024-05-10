<div class="container my-5">
    <div class="row d-flex">
        <div class="col-12 col-md-6">
            {{-- @dd($announcements) --}}
            @foreach ( $announcements as $announcement )
                <div class="card my-5">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $announcement->title }}</h5>
                    <p class="card-text">{{$announcement->category->name}}</p>
                    <p class="card-text">Creato da: {{$announcement->user->name}}</p>
                    <p class="card-text">{{ $announcement->subtitle }}</p>
                    <p class="card-text">{{ $announcement->body }}</p>
                    <p class="card-text">{{ $announcement->price }}€</p>
                    <a href="#" class="btn btn-primary">Dettaglio</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
