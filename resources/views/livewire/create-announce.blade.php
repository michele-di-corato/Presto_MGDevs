<form wire:submit.prevent="createAnnounce">
    
    <h1 id="annunci" class="text-center col-text display-6 p-2 pb-3">Crea Annuncio</h1>
    
    <div class="card card-pers p-3">
        <div class="mb-3">
            <input type="text" class="py-3 form-control @error('name') is-invalid @enderror" id="productName"
            placeholder="Prodotto" wire:model="name">
            @error('name')
            <div class="text-danger mt-1">
                <p>{{ $message }}</p>
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="number" step="0.01" class="py-3 form-control @error('price') is-invalid @enderror"
            id="productPrice" placeholder="Prezzo" wire:model="price">
            @error('price')
            <div class="text-danger mt-1">
                <p>{{ $message }}</p>
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <textarea class="py-3 form-control @error('description') is-invalid @enderror" id="productDescription" style="height: 100px" placeholder="Descrizione" wire:model="description"></textarea>
            @error('description')
            <div class="text-danger mt-1">
                <p>{{ $message }}</p>
            </div>
            @enderror
            
        </div>
        <div class="mb-3">
            <div class="form-group col-12">
                <select class="py-3 form-control @error('category_id') is-invalid @enderror" id="category" wire:model="category_id">
                    <option class="text-col" value="">Seleziona una categoria</option>
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
