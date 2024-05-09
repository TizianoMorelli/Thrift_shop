{{-- A good traveler has no fixed plans and is not intent upon arriving. --}}



<div class="container my-5 ">
    <div class="row justify-content-center ">
        <div class="col-12 col-md-6">



            <form class="shadow p-5 rounded-3 bg-secondary" wire:submit="store">

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo Articolo</label>
                    <input wire:model.blur ="title" type="text" class="form-control" id="title">
                    @error('title')
                        <div class="text-danger fw-bold "> {{ $message }} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="subtitle" class="form-label">Sottotitolo Articolo</label>
                    <input wire:model="subtitle" type="text" class="form-control" id="subtitle">
                    <div class="text-danger fw-bold ">
                        @error('subtitle')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Corpo Articolo</label>
                    <textarea wire:model="body" class="form-control" id="body" cols="30" rows="10"></textarea>
                    <div class="text-danger fw-bold ">
                        @error('body')
                            {{ $message }}
                        @enderror
                    </div>
                </div>


                <div>
                    <label for="category">Categoria:</label>
                    <select wire:model="category">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category') <span class="error">{{ $message }}</span> @enderror
                </div>


                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo Articolo</label>
                    <input wire:model="price" type="text" class="form-control" id="price">
                    <div class="text-danger fw-bold ">
                        @error('price')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-warning">Crea Articolo</button>
            </form>
            <x-display-message />
        </div>
    </div>
</div>
