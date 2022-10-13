<div>


  
@if ($studentdv)

@include('livewire.detailview')

@else
<div class="row">
    <div class="col-sm">
      <div class="form-group">
<input type="text" class="form-control" wire:model.debounce="search" placeholder="Search Here">
      </div>
      <div wire:loading>Searching Student...</div>
    </div>
</div>
<br/>

 <table class="table">
        <thead>
            <tr>
             <th>#</th>  <th>FirstName</th>    <th>email</th>  <th>created @</th> <th>Updated @</th><th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $row)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{ $row->name }}</td>  
                <td>{{$row->email }}</td>  
                <td>{{$row->created_at}}</td>  
                <td>{{$row->updated_at}}</td>
                <td>
                  <button wire:click="studentview({{ $row->id }})" class="btn btn-primary" >View</button>     
                  <button wire:click="edit({{$row->id}})" class="btn btn-warning">Edit</button>    
                    <button class="btn btn-info" wire:click="delete({{ $row->id }})"  onclick="return confirm('Are you sure?')">Delete</button>   
                </td> 
            </tr>
            
            @endforeach
        </tbody>
    </table>
    {{ $student->links() }}
    @endif

</div>
