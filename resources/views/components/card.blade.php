<div class="col-12 col-md-3">
    {{-- @dd($announcements) --}}
    <div class="card my-5">
        <img src="{{ Storage::url($announcement->img) }}" class="card-img-top" alt="..." height="250px">
        <div class="card-body">
            <h5 class="card-title">{{ $announcement->title }}</h5>
            <p class="card-text">{{ $announcement->price }} €</p>
            <a href="{{route('category.index', $announcement->category)}}"
                class="card-text">{{ ucfirst($announcement->category->name) }}</a>
            <p class="card-text">Creato da: {{ $announcement->user->name }}</p>
            <a href="{{route('announcement.show', compact('announcement'))}}" class="btn btn-primary">Dettaglio</a>
        </div>
    </div>
</div>