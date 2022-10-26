<?php

namespace App\Http\Livewire;

use App\Models\Students;
use Livewire\Component;



class Regform extends Component
{
  
    public $studs;
    public $selected_id;
    public $search;
    public string $name = '';
    public string $email = '';

    public $updateform = false;
    public $studentdv = false;
    public $regform = false;
  


    public function mount()
    {
        $this->studentlist();
    }


    protected $rules = [
        'name' => 'required|max:20|min:3|alpha',
        'email' => 'required|email|unique:students,email',
    ];

    public function render()
    {
    
        $this->regform = true ;
        $student = Students::paginate(5);
        return view('livewire.regform',compact('student',$student));
       
    }

    public function submit(){

       $this->validate();


       $userdata = new Students();
       $userdata->name = $this->name;
       $userdata->email = $this->email;     
       $userdata->save();
       $this->studentlist(); 
       session()->flash('message','Student Succesfully created');
       $this->reset();
        

    }


    public function delete($id)
    {
        $student = Students::where('id', $id);
        $student->delete();
        session()->flash('message','Student Succesfully Deleted');
        $this->studentlist(); 
    }

    public function edit($id){
        $student = Students::findOrFail($id);
        $this->selected_id = $id;
        $this->name = $student->name;
        $this->email = $student->email;    
        $this->updateform = true;
    }

    public function studentview($id)
    {
        $student = Students::find($id);
        $this->name = $student->name;
        $this->email = $student->email;
        $this->studentdv  = true;
        $this->updateform = false;
        $this->regform = false;
    }

    public function update(){
        $this->validate([
            'selected_id' => 'required|numeric',
            'name' => 'required',
            'email' => 'required'
        ]);
        
        if ($this->selected_id) {
            $record = Students::find($this->selected_id);
            $record->update([
                'name' => $this->name,
                'email' => $this->email
            ]);
            $this->reset();
            session()->flash('message','Student Succesfully Updated');
    }    
    }


    public function cancel()
    {
        $this->updateform = false;
        $this->reset();
    }


    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function studentlist(){
        $this->studs = Students::orderBy('created_at', 'DESC')->get();
    }
}


