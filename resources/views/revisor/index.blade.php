<x-layout>
    <div class="container m-5">
        <div class="row justify-content-center ">
            <div class="col-12 d-flex justify-content-center">
                <h2 class="text-center">
                    {{$announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
                </h2>
            </div>
        </div>
    </div>
    @if ($announcement_to_check)
    {{-- @dd($announcement_to_check) --}}
    <div class="container my-5">
        <div class="row justify-content-center ">
            <div class="col-5 ">
                <div class="card mb-3">
                    <img src="{{Storage::url($announcement_to_check->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h4 class="card-title">{{$announcement_to_check->title}}</h4>
                      <h6 class="card-text">{{$announcement_to_check->subtitle}}</h6>
                      <p class="card-text">{{$announcement_to_check->body}}</p>
                      <p class="card-text"><small class="text-body-secondary">Last updated {{$announcement_to_check->updated_at->format('d/m/Y')}}</small></p>
                    </div>
                    <div class="card-body">
                        <div class="row">
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
                            <div class="col-6">
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
</x-layout>