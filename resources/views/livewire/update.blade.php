<div>


<h4>Update Form</h4>

    <input type="hidden" wire:model="selected_id">
    <div class="form-group mb-3">
        <label for="categoryName">Name:</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Name" wire:model="name">
        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group mb-3">
        <label for="categoryDescription">Description:</label>
        <input type="email"class="form-control @error('email') is-invalid @enderror" id="email" wire:model="email" placeholder="Enteremail">
        @error('email') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="d-grid gap-2">



        <button type="submit" wire:click="update()" class="btn btn-primary">Update</button>
        <button type="submit" wire:click="cancel()" class="btn btn-danger">Cancel</button>
    </div>


</div>

          
        
        


      
 


  