<div>

    @if (session()->has('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif

    @if($updateform)


    
    @include('livewire.update')
   
   
       
    @else
              @include('livewire.form')

      @endif
       
</div>
 <br/>
  
@include('livewire.studentslist')   

    
</div>
<style>
    .error
    {
        color: red;
    }
</style>