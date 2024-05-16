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
                    <select required wire:model="category" class="form-select input_focused" aria-label="Default select example">
                        <option value="" selected>{{__('form.category')}}</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                        {{-- @if ($category = 0)
                            <p>Non va bene</p>
                        @endif --}}
                    </select>
                    <div class="text-danger fw-bold ">
                        @error('category')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">

                    <label for="formFileSm" class="form-label ">{{__('form.img')}}</label>
                    <input class="form-control form-control-sm input_focused" id="formFileSm" type="file" wire:model="img">
                </div>

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
