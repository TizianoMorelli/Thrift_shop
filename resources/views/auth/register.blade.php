<x-layout>
    <x-display-error/>

    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-12 d-flex justify-content-center">
          <h1 class="mb-3">Registrati a THRIFT SHOP</h1>
        </div>
      </div>
    </div>

    <div class="container box-auth my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
             
                <form
                class=" rounded-3 p-3 form"
                method="POST"
                action="{{route('register')}}"
                >
                @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">Indirizzo Email</label>
                      <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Utente</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
                      </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                      </div>
                      <div class="d-flex justify-content-between">
                          <button type="submit" class="btn btn-primary">Registati</button>
                        <p class="pt-2">
                          Sei già registrato? 
                          <a href="{{route('login')}}"> Accedi</a>
                        </p>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</x-layout>