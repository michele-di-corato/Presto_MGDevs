<form class="form-create p-5" wire:submit.prevent="editAnnounce">

    <h1 id="annunci" class="text-center col-text display-6 p-2 pb-3"> {{ __('ui.edit-announce-title') }}</h1>
    <div class="card card-pers p-3">
        <div class="mb-3">
            <label for="productName" class="form-label"> {{ __('ui.edit-name-placehold') }}</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="productName"
                wire:model="name">
            @error('name')
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="productPrice" class="form-label"> {{ __('ui.edit-price-placehold') }}</label>
            <input type="number"step="0.01" class="form-control @error('price') is-invalid @enderror"
                id="productPrice" wire:model="price">
            @error('price')
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="productDescription" class="form-label"> {{ __('ui.edit-description-placehold') }}</label>
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
                <label for="category"> {{ __('ui.edit-category-placehold') }}</label>
                <select class="form-control @error('category_id') is-invalid @enderror" id="category"
                    wire:model="category_id">
                    <option value="">Seleziona...</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ __('ui.category-' . $category->id) }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-floating mb-3">
            <label for="temporary_images" class="custom-file-upload">
                {{ __('ui.add-image-btn') }}
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
        <div class="row my-5">
            <div class="col-12">
                <p> {{ __('ui.img-preview') }}</p>
                <div class="row">
                    @foreach ($old_images as $image)
                        <div class="col d-flex flex-column my-3">
                            <div class="img-preview mx-auto rounded mb-3"
                                style="background-image: url({{ $image->getUrl(300, 300) }});">
                            </div>
                            <button type="button" class="btn bth-outline-danger mx-auto"
                                wire:click="deleteImage({{ $image->id }})">
                                {{ __('ui.img-delete') }}
                            </button>
                        </div>
                    @endforeach
                    @if (!empty($images))
                        @foreach ($images as $key => $image)
                            <div class="col d-flex flex-column my-3">
                                <div class="img-preview mx-auto rounded mb-3"
                                    style="background-image: url({{ $image->temporaryUrl() }});">
                                </div>
                                <button type="button" class="btn bth-outline-danger mx-auto"
                                    wire:click="removeImage({{ $key }})">
                                    {{ __('ui.btn-delete') }}
                                </button>
                            </div>
                        @endforeach

                </div>
            </div>
        </div>
        @endif
        <div class="d-flex justify-content-center align-items-center mt-3">
            <button type="submit" id="btn-edit" class="btn btn-edit fs-5"> {{ __('ui.btn-modify') }}</button>
            <span class="span-icon"><i class="ms-5 bi-arrow bi bi-arrow-left-square"></i></span>
        </div>
    </div>

</form>
