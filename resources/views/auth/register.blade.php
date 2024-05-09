<x-layout>
    <x-display-error/>
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <form
                class="bg-secondary rounded-3 p-3 text-white"
                method="POST"
                action="{{route('register')}}"
                >
                @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome utente</label>
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>