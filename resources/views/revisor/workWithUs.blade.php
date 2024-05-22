<x-layout>
    <div class="container-fluid h-100 mt-3">
        <div class="row mx-auto h-50">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center mb-5">
                <img class="my-5" src="{{ Storage::url('public/logo/logo.png') }}" alt="">
                <h1 class="text-center">{{ __('about.title') }}</h1>
                <x-display-message />

            </div>
            <div class="row d-flex justify-content-around ">
                <div class="col-12 col-md-6 col-lg-4 px-3">
                    <p class="fs-5">
                        {{ __('about.desc1') }}
                    </p>

                    <p class="fs-5">
                        {{ __('about.desc2') }}
                    </p>

                    <p class="fs-5">
                        {{ __('about.desc3') }}
                    </p>
                </div>

                <div
                    class="col-12 col-md-6 col-lg-4 text-center d-flex flex-column justify-content-center align-items-center p-5">
                    @guest
                        <p class="fs-5">

                            <a class="text-decoration-none active"
                                href="{{ route('register') }}">{{ __('about.register') }}</a>
                            {{ __('about.linktxt') }}
                        </p>
                    @endguest


                    @auth
                        <div>
                            <p class="fs-5">
                                {{ __('about.formtitle') }}
                            </p>
                            <form class="text-white form" action="{{ route('revisor.become') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">{{ __('about.username') }}</label>
                                    <input name="name" type="text" class="form-control input_focused" id="name"
                                        value="{{ Auth::user()->name }}">
                                    @error('name')
                                        <div class="text-danger fw-bold "> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input name="email" type="email" class="form-control input_focused" id="email"
                                        value="{{ Auth::user()->email }}">
                                    <div class="text-danger fw-bold ">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">{{ __('about.msg') }}</label>
                                    <input name="message" type="text" class="form-control input_focused" id="message"
                                        cols="30" rows="5">
                                    {{-- </textarea> --}}
                                    <div class="text-danger fw-bold ">
                                        @error('message')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn_standard" type="submit">{{ __('about.send') }}</button>

                                </div>
                            </form>
                        </div>
                    @endauth

                </div>


            </div>
            <div class="col-12 col-md-8 col-lg-10 mt-5 mx-auto d-flex flex-column" id="about">
                <h2 class="text-center mb-5 fw-bolder text-uppercase">{{ __('about.abouttitle') }}</h2>

                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p class="fs-5">
                            {{ __('about.about1') }}
                        </p>
                        <p class="fs-5">
                            {{ __('about.about2') }}
                        </p>
                        <p class="fs-5">
                            {{ __('about.about3') }}
                        </p>
                        <p class="fs-5">
                            {{ __('about.about4') }}
                        </p>
                        <p class="fs-5">
                            {{ __('about.about5') }}
                        </p>
                    </div>
                    <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
                        <img src="https:\\picsum.photos/400/600" alt="">
                    </div>
                </div>

            </div>


        </div>
    </div>

</x-layout>
