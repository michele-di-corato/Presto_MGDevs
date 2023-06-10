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
                <select class="form-control @error('category_id') is-invalid @enderror" id="category" wire:model="category_id">
                    <option value="">Seleziona...</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center mt-3">
            <button type="submit" id="btn-edit" class="btn btn-edit fs-5">Modifica</button>
            <span class="span-icon"><i class="ms-5 bi-arrow bi bi-arrow-left-square"></i></span>
        </div>
    </div>

</form>
