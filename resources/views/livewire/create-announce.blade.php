<div class="container-fluid form-create">
    <form class="p-5" wire:submit.prevent="createAnnounce">
        <div class="row">
            <h2 class="title-form text-center">Crea Annuncio</h1>
        </div>
        <div class="mb-3">
            <label for="productName" class="form-label">Prodotto</label>
            <input type="text" class="form-control" id="productName" wire:model="name">
        </div>
        <div class="mb-3">
            <label for="productPrice" class="form-label">Prezzo</label>
            <input type="number"step="0.01" class="form-control" id="productPrice" wire:model="price">
        </div>
        <div class="mb-3">
            <label for="productDescription" class="form-label">Descrizione</label>
            <textarea class="form-control" id="productDescription" wire:model="description"></textarea>
        </div>
        <div class="row justify-content-around">
            @foreach ($categories as $category)
                <div class="form-check checkbox-create col-5 col-md-6">
                    <input class="form-check-input mx-3" type="radio" value="{{ $category->id }}"
                        wire:model="category_id" id="{{ $category->id }}">
                    <label class="form-check-label" for="{{ $category->id }}">
                        {{ $category->name }}
                    </label>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-outline-dark btn-create mt-3 fs-5">Submit</button>
            <span class="span-icon"><i class="mt-3 mx-3 bi-arrow bi bi-arrow-left-square"></i></span>
        </div>
    </form>
</div>
