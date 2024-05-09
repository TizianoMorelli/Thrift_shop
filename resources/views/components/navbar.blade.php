<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">Presto the last commit</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('announcement.index')}}">Annunci</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">register</a>
          </li>              
          @endguest
          @auth
          <li class="nav-item">
            
            <form
            action="{{route('logout')}}"
            method="POST" 
            >
            @csrf
            <button class="nav-link text-danger" type="submit">logout</button>

            </form>
          </li>              
          @endauth

        </ul>
      </div>
    </div>
  </nav>