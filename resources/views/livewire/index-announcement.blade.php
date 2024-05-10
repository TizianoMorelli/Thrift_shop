<div class="container my-5">
    <div class="row d-flex">
        @foreach ( $announcements as $announcement )
        <div class="col-12 col-md-6">
            {{-- @dd($announcements) --}}
                <div class="card my-5">
                    <img src="{{Storage::url(($announcement->img))}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $announcement->title }}</h5>
                        <p class="card-text">{{ $announcement->price }}€</p>
                    <a href="" class="card-text text-dark link-underline-light">{{ucfirst($announcement->category->name)}}</a>
                    <p class="card-text">Creato da: {{$announcement->user->name}}</p>
                    <a href="#" class="btn btn-primary">Dettaglio</a>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>
