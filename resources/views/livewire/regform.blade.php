<div>
 
    <form wire:submit.prevent="submit">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
        @endif

        <div class="form-group">
            <label class="col-sm-2 control-label"> Name</label>
        <input type="text" class="form-control" wire:model.debounce="name">
        @error('name') <span class="error"><strong>{{ $message }}</strong></span> @enderror
        </div>

        

        <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
        <input type="email" class="form-control" wire:model.debounce="email">
        @error('email') <span class="error"><strong>{{ $message }}</strong></span> @enderror
        </div>
        <button type="submit">Save Contact</button>

    </form>
</div>
<style>
    .error
    {
        color: red;
    }
</style>