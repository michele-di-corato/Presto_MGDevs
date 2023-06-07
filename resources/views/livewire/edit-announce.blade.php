<form class="form-create p-5" wire:submit.prevent="editAnnounce">
    <h2 class="title-form text-center">Modifica Annuncio</h1>
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
        <div class="row justify-content-around">
            @foreach ($categories as $category)
                <div class="form-check checkbox-create col-12 col-md-6">
                    <input class="form-check-input mx-3" type="radio" value="{{ $category->id }}"
                        wire:model="category_id" id="{{ $category->id }}">
                    <label class="form-check-label" for="{{ $category->id }}">
                        {{ $category->name }}
                    </label>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center align-items-center mt-3">
            <button type="submit" id="btn-edit" class="btn btn-edit fs-5">Modifica</button>
            <span class="span-icon"><i class="ms-5 bi-arrow bi bi-arrow-left-square"></i></span>
        </div>
</form>
