<x-layout>
    <div class="container my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12 text-center mb-3">
                <h1>{{$announcement->title}}</h1>
            </div>
            <div class="col-12 col-md-6 ">
                <x-carousel />
            </div>

            <div class="col-12 col-md-6 ">
                <h6>{{$announcement->price}}</h6>
                <h6>{{$announcement->subtitle}}</h6>
                <h6>{{$announcement->body}}</h6>
            </div>

        </div>
    </div>
    
</x-layout>