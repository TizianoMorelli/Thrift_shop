

<div class="col-12 col-md-6 col-lg-4 col-xl-3 col-xxl-2 mx-xxl-2 my-4">
    {{-- @dd($announcements) --}}
    <div class="card card_announcement position-relative ">
        {{$slot}}
        <a class="img_card" href="{{route('announcement.show', compact('announcement'))}}">
            <img src=
            "@if ($announcement->images->count())
                {{ Storage::url($announcement->images->first()->path) }}
            @else 
                {{Storage::url('public/default-image.jpg')}}
            @endif" 
            class="card-img-top object-fit-cover" 
            alt="{{$announcement->title}}" min-height="200px">
        </a>
        <div class=" card-body d-flex flex-column ">
            <a class="card_category mb-2" href="{{route('category.index', $announcement->category)}}"
                class="card-text">{{ ucfirst($announcement->category->name) }}</a>
            <a class="title_card" href="{{route('announcement.show', compact('announcement'))}}">
                <h5 class="card-title">{{ $announcement->title }}</h5>
            </a>
            <p class="card-text">{{ $announcement->price }} €</p>
            {{-- <p class="card-text">Creato da: {{ $announcement->user->name }}</p> --}}
           
        </div>
    </div>
</div>