<form wire:submit.prevent="createAnnounce">
    
    <h1 id="annunci" class="text-center col-text display-6 p-2 pb-3">Crea Annuncio</h1>
    <div class="card card-pers p-3">
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="productName"
            placeholder="Prodotto" wire:model="name">
            <label for="productName" class="form-label">Prodotto</label>
            @error('name')
            <div class="text-danger mt-1">
                <p>{{ $message }}</p>
            </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="number"step="0.01" class="form-control @error('price') is-invalid @enderror"
            id="productPrice" placeholder="Prezzo" wire:model="price">
            <label for="productPrice" class="form-label">Prezzo</label>
            @error('price')
            <div class="text-danger mt-1">
                <p>{{ $message }}</p>
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="productDescription"></label>
            <textarea class="form-control @error('description') is-invalid @enderror"id="productDescription" style="height: 100px" placeholder="Descrizione"
            wire:model="description"></textarea>
            @error('description')
            <div class="text-danger mt-1">
                <p>{{ $message }}</p>
            </div>
            @enderror
            
        </div>
        <div class="mb-3">
            <div class="form-group col-12">
                <label for="category"></label>
                <select class="form-control @error('category_id') is-invalid @enderror" id="category" wire:model="category_id">
                    <option value="">Seleziona una categoria:</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('category_id')
            <div class="text-danger mt-1">
                <p>{{ $message }}</p>
            </div>
            @enderror
        </div>
        
        <div class="d-flex justify-content-center align-items-center">
            <button type="submit" id="btn-create" class="btn btn-create fs-5">Invia</button>
            <span class="span-icon"><i class="mx-3 bi-arrow bi bi-arrow-left-square"></i></span>
        </div>
        
    </div>
    
</form>
