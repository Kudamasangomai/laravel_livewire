<div>

 
     <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            
            <div class="caption">
              <h3>   {{ $name }} </h3>
              <p> {{ $email }}</p>
              <p>
                <button wire:click="edit({{$selected_id}})" class="btn btn-warning">Edit</button>
                <button type="submit" wire:click="cancel()" class="btn btn-danger">Cancel</button>

            </p>
            </div>
          </div>
        </div>
      </div>

 

    
     

</div>
