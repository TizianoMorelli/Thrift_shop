<x-layout>

    <x-display-message/>
    <x-display-error/>


    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                @if ($announcement_to_check)
                <h1 class="text-center title-page mb-5">Ecco gli annunci da revisionare</h1>
                @else
                <h1 class="text-center title-page mb-5">Non ci sono annunci da revisionare</h1>
                @endif
            </div>
        </div>
    </div>
    @if($announcement_to_check)
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead class="table_revisor">
                        <tr class="table_revisor">
                            <th scope="col" class="table_revisor p-3">#</th>
                            <th scope="col" class="table_revisor p-3">Titolo</th>
                            <th scope="col" class="table_revisor p-3">Prezzo</th>
                            <th scope="col" class="table_revisor p-3">Creazione</th>
                            <th class="table_revisor p-3" scope="col">Dettaglio</th>
                        </tr>
                    </thead>
                    <tbody class="table_revisor">
                        <tr class="border-bottom table_revisor">
                            @foreach ($announcement_to_check as $announcement)
                                <tr class="border-bottom table_revisor">
                                    <th class="p-3 table_revisor">{{$announcement->id}}</th>
                                    <td class="p-3 table_revisor">{{$announcement->title}}</td>
                                    <td class="p-3 table_revisor">€ {{$announcement->price}}</td>
                                    <td class="p-3 table_revisor">{{$announcement->updated_at}}</td>
                                    <td class="p-3 table_revisor">
                                        <a href="{{route('announcement.show', ['announcement' => $announcement->id])}}" class="btn d-block mx-auto"><i class="bi bi-eye"></i></a>
                                    </td>
                                    <td class="p-3 table_revisor">
                                        <form action="{{route('revisor.accept_announcement', ['announcement'=>$announcement])}}" method="POST">
                                            @csrf
                                            @method("PATCH")
                                            <button class="btn btn-success d-block mx-auto" type="submit"><i class="bi bi-check2"></i></button>
                                        </form>
                                    </td>
                                    <td class="p-3 table_revisor">
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
                <h1 class="text-center title-page mb-5">Ecco gli annunci revisionati</h1>
                @else
                <h1 class="text-center title-page mb-5">Non ci sono annunci revisionati</h1>
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
                            <th class="table_revisor p-3" scope="col">#</th>
                            <th class="table_revisor p-3" scope="col">Titolo</th>
                            <th class="table_revisor p-3" scope="col">Prezzo</th>
                            <th class="table_revisor p-3" scope="col">Creazione</th>
                            <th class="table_revisor p-3" scope="col">Dettaglio</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @foreach ($announcements_to_revise as $announcement)
                        @if ($announcement->is_accepted == 1)
                        <tr class="border-bottom table-success">
                            @else 
                        <tr class="border-bottom table-danger">
                        @endif
                            <th class="p-3">{{$announcement->id}}</th>
                            <td class="p-3">{{$announcement->title}}</td>
                            <td class="p-3">€ {{$announcement->price}}</td>
                            <td class="p-3">{{$announcement->updated_at}}
                            </td>    
                            <td class="p-3">
                                <a href="{{route('announcement.show', ['announcement' => $announcement->id])}}" class="btn ms-2"><i class="bi bi-eye"></i></a>
                            </td>
                            <td class="p-3">
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



