<x-layout>

    <h1 class="text-center fw-bold my-5">Effettua l'accesso per inserire un annuncio</h1>

    <x-display-error />
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <h1 class="mb-3">Accedi a presto.it</h1>
                <form class="bg-secondary rounded-3 p-3 text-white" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Indirizzo Email</label>
                        <input type="email" name="email" class="form-control" id="email"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Accedi</button>
                        <p class="pt-2">
                          Non sei registrato? 
                          <a href="{{route('register')}}"> Registati</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
