<x-layout>

 <div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center fw-bold mt-5 ">Effettua l'accesso per inserire un annuncio</h1>
        </div>
    </div>
 </div>

    <x-display-error />

    <div class="container box-auth my-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="my-5 text-center">Accedi a THRIFT SHOP</h1>
                <form class=" rounded-3 p-3 text-dark" method="POST" action="{{ route('login') }}">
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
