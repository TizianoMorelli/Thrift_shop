<x-layout>

    <div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <h1 class="text-center title-index title-page">Search Annunci</h1>
                </div>
            </div>
        </div>

        <div class="container-fluid my-5">
            <div class="row d-flex justify-content-evenly">
                {{-- @dd($announcements) --}}
                @forelse ($announcements as $announcement)
                    <x-card :$announcement />
                @empty
                    <div class="container ">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="text-center mt-5">Non ci sono annunci per questa ricerca!</h4>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>


</x-layout>
