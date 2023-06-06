<div class="container-fluid mt-5">

    <form wire:submit.prevent="createAnnounce">
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
        @foreach($categories as $category)
        <div class="form-check">
            <input class="form-check-input" type="radio" value="{{$category->id}}" wire:model="category_id" id="{{$category->id}}">
            <label class="form-check-label" for="{{$category->id}}">
              {{$category->name}}
            </label>
          </div>
          @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>