<div>


  


<div class="container" >

{{-- <a href="students/create" class="btn btn-success mb-2"  id="create-new-post">Add post</a> --}}
<tbody class="table-border-bottom-0">


{{ count($student )  }}
 
<table class="table">
    <thead>
        <tr>
           <th>FirstName</th>    <th>email</th>  <th>created @</th> <th>Updated @</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($student as $row)
        <tr>
  
            <td>{{ $row->name }}</td>  
            <td>{{$row->email }}</td>  
            <td>{{$row->created_at}}</td>  
            <td>{{$row->updated_at}}</td>
            <td>
                {{-- <a href="/students/{{ $row->id  }}/edit">edit</a>  /   <a>edit</a>  /   <a>edit</a>     --}}
            </td> 
        </tr>
       
        @endforeach
    </tbody>
</table>


{{-- {{ $student->links() }} --}}


</div>


</div>
