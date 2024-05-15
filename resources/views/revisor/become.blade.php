<x-layout>
    <x-display-error />

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="mb-3">Diventa un revisore su THRIFT SHOP</h1>
            </div>
        </div>
    </div>

    <div class="container box-auth my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">

                <form class=" p-3 form" method="POST" {{-- action="{{route('register')}}" --}}>
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Indirizzo Email</label>
                        <input type="email" name="email" class="form-control input_focused" id="email"
                            aria-describedby="emailHelp" placeholder="{{ Auth::user()->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Utente</label>
                        <input type="text" name="name" class="form-control input_focused" id="name"
                            aria-describedby="emailHelp" placeholder="{{ Auth::user()->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Messaggio</label>
                        <textarea cols="10" rows="10" class="form-control input_focused" id="message"
                            aria-describedby="emailHelp" ></textarea>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary btn_standard">Invia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
