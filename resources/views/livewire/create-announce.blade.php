<form class="form-create m-lg-5 p-4 p-lg-5" wire:submit.prevent="createAnnounce">
    <h2 class="title-form text-center">Crea Annuncio</h1>
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="productName"
                placeholder="Prodotto" wire:model="name">
            <label for="productName" class="form-label">Prodotto</label>
            @error('name')
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="number"step="0.01" class="form-control @error('price') is-invalid @enderror"
                id="productPrice" placeholder="Prezzo" wire:model="price">
            <label for="productPrice" class="form-label">Prezzo</label>
            @error('price')
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="productDescription">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror"id="productDescription" style="height: 100px"
                wire:model="description"></textarea>

            @error('description')
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
            @enderror

        </div>
        <div class="row justify-content-around">
            @foreach ($categories as $category)
                <div class="form-check checkbox-create col-12 col-md-6 col-lg-6">
                    <input class="form-check-input mx-3" type="radio" value="{{ $category->id }}"
                        wire:model="category_id" id="{{ $category->id }}">
                    <label class="form-check-label" for="{{ $category->id }}">
                        {{ $category->name }}
                    </label>
                </div>
            @endforeach
            @error('category_id')
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
            @enderror
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-create mt-3 fs-5">Invia</button>
            <span class="span-icon"><i class="mt-3 mx-3 bi-arrow bi bi-arrow-left-square"></i></span>
        </div>
</form>
