<div>



  
     
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
                    
                         

                        @if($confirming===$row->id)
                    <button wire:click="kill({{ $row->id }})"
                        class="btn btn-danger">Yes Delete?</button>

                        <button  wire:click="dontdelete()"  class="btn btn-success">Dont Delete</button>
                         @else
                         <button wire:click="studentview({{$row->id}})" class="btn btn-primary" >View</button> 

                 <button wire:click="edit({{$row->id}})" class="btn btn-warning">Edit</button> 
                    <button wire:click="confirmDelete({{ $row->id }})"
                        class="btn btn-info">Delete</button>
                @endif
                    </td> 
                </tr>
                
                @endforeach
            </tbody>
        </table>
        {{ $student->links() }}
</div>