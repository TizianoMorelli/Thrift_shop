{{-- A good traveler has no fixed plans and is not intent upon arriving. --}}



{{-- <div class="container-fluid py-5 rounded my-5"> --}}
<div class="container-fluid rounded mt-5">
    <div class="row justify-content-center ">
        {{-- <div class="col-12 col-md-6"> --}}
        <div class="col-12 d-flex justify-content-center">
            <h1 class="text-center mb-2 title-page">{{__('title.createAnnouncements')}}</h1>
        </div>

        <div class="col-12 col-md-6 my-5">
            <form class="shadow p-5 rounded-3 text-white form" wire:submit="store">
                <div class="mb-3">
                    <label for="title" class="form-label">{{__('form.title')}}</label>
                    <input wire:model.blur ="title" type="text" class="form-control input_focused" id="title">
                    @error('title')
                        <div class="text-danger fw-bold "> {{ $message }} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="subtitle" class="form-label">{{__('form.subtitle')}}</label>
                    <input wire:model="subtitle" type="text" class="form-control input_focused" id="subtitle">
                    <div class="text-danger fw-bold ">
                        @error('subtitle')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">{{__('form.body')}}</label>
                    <textarea wire:model="body" class="form-control input_focused" id="body" cols="30" rows="10"></textarea>
                    <div class="text-danger fw-bold ">
                        @error('body')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
<<<<<<< HEAD
                    <select required wire:model="category" class="form-select input_focused"
                        aria-label="Default select example">
                        <option value="" selected>Categoria</option>
=======
                    <select required wire:model="category" class="form-select input_focused" aria-label="Default select example">
                        <option value="" selected>{{__('form.category')}}</option>
>>>>>>> refs/remotes/origin/main
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ ucfirst($category->name) }}</option>
                        @endforeach
                    </select>
                    <div class="text-danger fw-bold ">
                        @error('category')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
<<<<<<< HEAD
                    <input name="images"
                        class="form-control form-control-sm input_focused @error('temporary_images.*') is-invalid @enderror"
                        type="file" multiple wire:model="temporary_images">
                    <div class="text-danger fw-bold ">
                        @error('temporary_images.*')
                            {{ $message }}
                        @enderror
                    </div>
=======

                    <label for="formFileSm" class="form-label ">{{__('form.img')}}</label>
                    <input class="form-control form-control-sm input_focused" id="formFileSm" type="file" wire:model="img">
>>>>>>> refs/remotes/origin/main
                </div>
                @if (!empty($images))
                    <div class="row">
                        <div class="col-12">
                            <p>Anteprima immagini caricate</p>
                            <div class="row py-4 d-flex flex-column ">
                                @foreach ($images as $key => $image)
                                    <div class="col my-3 h-100">
                                        {{-- <div  style="height:500px; background-image: url({{ $image->temporaryUrl() }})"></div> --}}
                                        <div class="position-relative">
                                            <img src="{{ $image->temporaryUrl() }}" alt="Immagine caricata" width="300px" >
                                            <button wire:click="removeImage({{ $key }})" class="rounded_circle position-absolute" type="button"><i class="bi bi-x fs-1"></i></button>
                                        </div>


                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                <div class="mb-3">
                    <label for="price" class="form-label input_focused">{{__('form.price')}}</label>
                    <input wire:model="price" type="text" class="form-control" id="price">
                    <div class="text-danger fw-bold ">
                        @error('price')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn">{{__('form.create')}}</button>
            </form>
            <x-display-message />
        </div>




    </div>
</div>
