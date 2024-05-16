<x-layout>
    {{-- @dd($announcements) --}}
    @if (session('message'))
    <div class="alert rounded-3  alert-success">
        {{ session('message') }}
    </div>
    @endif

    @if (session('error'))
    <div class="alert rounded-3  alert-danger">
        {{ session('error') }}
    </div>
    @endif


    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                @if ($announcement_to_check)
                <h1 class="text-center">Ecco gli annunci da revisionare</h1>
                @else
                <h1 class="text-center">Non ci sono annunci da revisionare</h1>
                @endif
            </div>
        </div>
    </div>
    @if($announcement_to_check)
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Data creazione</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-bottom">
                            @foreach ($announcement_to_check as $announcement)
                                <tr class="border-bottom">
                                    <th>{{$announcement->id}}</th>
                                    <td>{{$announcement->title}}</td>
                                    <td>{{$announcement->price}}</td>
                                    <td>{{$announcement->updated_at}}</td>
                                    <td>
                                        <form action="{{route('revisor.accept_announcement', ['announcement'=>$announcement])}}" method="POST">
                                            @csrf
                                            @method("PATCH")
                                            <button class="btn btn-success d-block mx-auto" type="submit"><i class="bi bi-check2"></i></button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{route('revisor.reject_announcement', ['announcement'=>$announcement])}}" method="POST">
                                            @csrf
                                            @method("PATCH")
                                            <button class="btn btn-danger d-block mx-auto" type="submit"><i class="bi bi-x-lg"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-12">
                @if ($announcements_to_revise)
                <h1 class="text-center">Ecco gli annunci revisionati</h1>
                @else
                <h1 class="text-center">Non ci sono annunci revisionati</h1>
                @endif
            </div>
        </div>
    </div>
    @if($announcements_to_revise)
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Data creazione</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($announcements_to_revise as $announcement)
                        <tr class="border-bottom">
                            <th>{{$announcement->id}}</th>
                            <td>{{$announcement->title}}</td>
                            <td>{{$announcement->price}}</td>
                            <td>{{$announcement->updated_at}}</td>
                            <td>
                                <a href="{{route('announcement.show', ['announcement' => $announcement->id])}}" class="btn bottone_annuncio3 d-block mx-auto"><i class="bi bi-eye"></i></a>
                            </td>
                            <td>
                                <form action="{{route('revisor.revise', ['announcement'=>$announcement])}}" method="POST">
                                    @csrf
                                    @method("PATCH")
                                    <button class="btn btn-warning" type="submit">Annulla revisione</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif


</x-layout>