<form wire:submit.prevent="createAnnounce">

    <h1 id="annunci" class="text-center col-text display-6 p-2 pb-3">{{ __('ui.add-announce-title') }}</h1>

    <div class="card card-pers card-elem px-3 pb-3">
        <div class="card card-bg p-3">


            <div class="mb-3">
                <input type="text" class="py-3 form-control @error('name') is-invalid @enderror" id="productName"
                    placeholder="{{ __('ui.add-product-placehold') }}" wire:model="name">
                @error('name')
                    <div class="text-danger mt-1">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="number" step="0.01" class="py-3 form-control @error('price') is-invalid @enderror"
                    id="productPrice" placeholder="{{ __('ui.add-price-placehold') }}" wire:model="price">
                @error('price')
                    <div class="text-danger mt-1">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <textarea class="py-3 form-control @error('description') is-invalid @enderror" id="productDescription"
                    style="height: 100px" placeholder="{{ __('ui.add-description-placehold') }}" wire:model="description"></textarea>
                @error('description')
                    <div class="text-danger mt-1">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <div class="form-group col-12">
                    <select class="py-3 form-control @error('category_id') is-invalid @enderror" id="category"
                        wire:model="category_id">
                        <option class="text-col" value="">{{ __('ui.add-category-placehold') }}</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ __('ui.category-' . $category->id) }}</option>
                        @endforeach
                    </select>
                </div>
                @error('category_id')
                    <div class="text-danger mt-1">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <label for="temporary_images" class="custom-file-upload text-center">
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

            @if (!empty($images))
                <div class="row">
                    <div class="col-12">
                        <p>{{ __('ui.img-preview') }}</p>
                        <div class="row">
                            @foreach ($images as $key => $image)
                                <div class="col d-flex flex-column my-3">
                                    <div class="img-preview mx-auto rounded mb-3"
                                        style="background-image: url({{ $image->temporaryUrl() }});">
                                    </div>
                                    <button type="button" class="btn btn-create mx-auto"
                                        wire:click="removeImage({{ $key }})">
                                        {{ __('ui.img-delete') }}
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            <div class="d-flex justify-content-center align-items-center pt-4">
                <button type="submit" id="btn-create"
                    class="btn btn-create fs-5">{{ __('ui.add-announce-btn') }}</button>
                <span class="span-icon"><i class="mx-3 bi-arrow bi bi-arrow-left-square"></i></span>
            </div>
            
        </div>

    </div>

</form>
