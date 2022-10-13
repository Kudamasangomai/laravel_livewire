<div>

 

 
    <h4>Registration Form</h4>
    <form wire:submit.prevent="submit">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="form-group">
              <label class="col-sm-2 control-label"> Name</label>
          <input type="text" class="form-control" wire:model.debounce="name">
          @error('name') <span class="error"><strong>{{ $message }}</strong></span> @enderror
          </div>
  
        </div>
        <div class="col-sm">
          <div class="form-group">
              <label class="col-sm-2 control-label">Email</label>
          <input type="email" class="form-control" wire:model.debounce="email">
          @error('email') <span class="error"><strong>{{ $message }}</strong></span> @enderror
          </div>
        </div>
      
      </div>
      <button type="submit" class="btn btn-info">Save Contact</button>
    </form>
    </div>