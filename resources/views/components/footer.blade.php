<div class="container-fluid px-0">
    <footer class="py-5 ">
      <div class="row m-0">
        <div class="col-6 col-md-2 mb-3 px-5">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
            <li class="nav-item mb-2">
              <a 
              {{-- href="{{route('revisor.become')}}"  --}}
              href="{{route('workWithUs')}}"
              class="nav-link p-0 text-body-secondary">Lavora con noi</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
            <li class="nav-item mb-2"><a href="{{route('workWithUs')}}#about" class="nav-link p-0 text-body-secondary">About</a></li>
          </ul>
        </div>
  
        <div class="col-6 col-md-2 mb-3">
          <h5>Categories</h5>
          <ul class="nav flex-column">
            @foreach ($categories as $category)
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">{{ucfirst($category->name)}} ({{ $category->announcements->count() }})</a></li>
            @endforeach
          </ul>
        </div>
  
        <div class="col-md-5 offset-md-1 mb-3 pe-5">
          <form>
            <h5>Subscribe to our newsletter</h5>
            <p>Monthly digest of what's new and exciting from us.</p>
            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input id="newsletter1" type="text" class="form-control input_focused" placeholder="Email address" spellcheck="false" data-ms-editor="true">
              <button class="btn btn_standard" type="button">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
  
      <div class="flex-sm-row mt-3 px-5">
        <p>© 2024 THRIFT SHOP, Inc. All rights reserved.</p>
      </div>

  

    </footer>
  </div>
