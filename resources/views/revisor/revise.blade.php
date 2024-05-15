<x-layout>
    <div class="container m-5">
        <div class="row justify-content-center ">
            <div class="col-12 d-flex justify-content-center">
                <h2 class="text-center">
                    {{$announcements_to_revise ? 'Ecco gli annunci già revisionati' : 'Non ci sono annunci revisionati'}}
                </h2>
            </div>
        </div>
    </div>
    @if ($announcements_to_revise)
    
    {{-- @dd($announcements_to_revise) --}}
    
    <div class="container my-5">
        <div class="row justify-content-center ">
            @foreach ($announcements_to_revise as $announcement )
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card mb-3">
                    <img src="{{Storage::url($announcement->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">{{$announcement->title}}</h4>
                        <h6 class="card-text">{{$announcement->subtitle}}</h6>
                        <p class="card-text">{{$announcement->body}}</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated {{$announcement->updated_at->format('d/m/Y')}}</small></p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        <div class="col-6">
                            <form
                            action="{{route('revisor.revise', ['announcement'=>$announcement])}}" method="POST">
                            @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success">
                                    Revisiona
                                </button>
                             </form>
                        </div>
                </div>
            </div>
        </div>
        
    </div> 
    @endforeach   
</div>
</div>        
@endif
</x-layout>