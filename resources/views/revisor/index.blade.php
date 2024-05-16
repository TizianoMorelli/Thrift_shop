<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center ">
            <div class="col-12 d-flex justify-content-center">
                <h2 class="text-center title-page">
                    {{$announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
                </h2>
            </div>
        </div>
    </div>
    @if ($announcement_to_check)
    {{-- @dd($announcement_to_check->images) --}}
    <div class="container my-5">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-6 col-lg-4 my-4">
                <div class="card mb-3">
                    <img src=
                    "@if ($announcement_to_check->images->count())
                        {{ Storage::url($announcement_to_check->images->first()->path) }}
                    @else 
                        {{Storage::url('public/default-image.jpg')}}
                    @endif" 
                    class="card-img-top" alt="...">
                    <div class="card-body">
                      <h4 class="card-title">{{$announcement_to_check->title}}</h4>
                      <h6 class="card-text">{{$announcement_to_check->subtitle}}</h6>
                      <p class="card-text">{{$announcement_to_check->body}}</p>
                      <p class="card-text"><small class="text-body-secondary">Last updated {{$announcement_to_check->updated_at->format('d/m/Y')}}</small></p>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-evenly">
                            <div class="col-6">
                                <form
                                action="{{route('revisor.accept_announcement', ['announcement'=>$announcement_to_check])}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success">
                                    Accetta
                                </button>
                                </form>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <form
                                action="{{route('revisor.reject_announcement', ['announcement'=>$announcement_to_check])}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success">
                                    Rifiuta
                                </button>
                                </form>
                            </div>
                        </div>
                    </div>
                  </div>
                  
            </div>    
        </div>
    </div>        
    @endif

    <div class="container box-revisione">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center">
                <a class="btn btn_standard text-center text-decoration-none" href="{{route('revisor.index')}}">VEDI REVISIONATI</a>
            </div>
        </div>
    </div>
</x-layout>