<form class="form-create p-5" wire:submit.prevent="editAnnounce">

    <h1 id="annunci" class="text-center col-text display-6 p-2 pb-3">Modifica Annuncio</h1>
    <div class="card card-pers p-3">
        <div class="mb-3">
            <label for="productName" class="form-label">Prodotto</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="productName"
                wire:model="name">
            @error('name')
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="productPrice" class="form-label">Prezzo</label>
            <input type="number"step="0.01" class="form-control @error('price') is-invalid @enderror"
                id="productPrice" wire:model="price">
            @error('price')
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="productDescription" class="form-label">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="productDescription"
                wire:model="description"></textarea>
            @error('description')
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <div class="form-group col-12">
                <label for="category">Categoria:</label>
                <select class="form-control @error('category_id') is-invalid @enderror" id="category"
                    wire:model="category_id">
                    <option value="">Seleziona...</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-floating mb-3">
            <label for="temporary_images" class="custom-file-upload">
                Seleziona file
            </label>
            <input type="file" multiple
                class="custom-file-input py-3 form-control @error('temporary_images.*') is-invalid @enderror"
                id="temporary_images" wire:model="temporary_images">
            @error('temporary_images.*')
                <div class="text-danger mt-1">
                    <p>{{ $message }}</p>
                </div>
            @enderror
        </div>
        @if (!empty($images))
            <div class="row my-5">
                <div class="col-12">
                    <p>Anteprima Immagini:</p>
                    <div class="row">
                        @foreach ($old_images as $key => $image)
                            <div class="col d-flex flex-column my-3">
                                <div class="img-preview mx-auto rounded mb-3"
                                    style="background-image: url({{ $image->getUrl(300, 300) }});">
                                </div>
                                <button type="button" class="btn bth-outline-danger mx-auto"
                                    wire:click="removeImage({{ $key }})">
                                    Cancella
                                </button>
                            </div>
                        @endforeach
                        @foreach ($images as $key => $image)
                            <div class="col d-flex flex-column my-3">
                                <div class="img-preview mx-auto rounded mb-3"
                                    style="background-image: url({{ $image->temporaryUrl() }});">
                                </div>
                                <button type="button" class="btn bth-outline-danger mx-auto"
                                    wire:click="removeImage({{ $key }})">
                                    Cancella
                                </button>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        @endif
        <div class="d-flex justify-content-center align-items-center mt-3">
            <button type="submit" id="btn-edit" class="btn btn-edit fs-5">Modifica</button>
            <span class="span-icon"><i class="ms-5 bi-arrow bi bi-arrow-left-square"></i></span>
        </div>
    </div>

</form>
