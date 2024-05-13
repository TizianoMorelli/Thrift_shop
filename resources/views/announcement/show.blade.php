<x-layout>
    <div class="container box-show my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12 text-center my-5">
                <h1>{{$announcement->title}}</h1>
            </div>
            <div class="col-12 col-md-6 ">
                <x-carousel />
            </div>

            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center flex-column">
                <h4>{{$announcement->subtitle}}</h4>
                <h5>{{$announcement->price}} <span>€</span></h5>
                <p>{{$announcement->body}}</p>
            </div>

        </div>
    </div>

</x-layout>
