<?php

namespace App\Http\Livewire;

use App\Models\Students;
use Livewire\Component;

class Regform extends Component
{
    public string $name = '';
    public string $email = '';


    protected $rules = [
        'name' => 'required|max:20|min:3',
        'email' => 'required|email|unique:students,email',
    ];

    public function render()
    {
        return view('livewire.regform');
    }

    public function submit(){

        $this->validate();
        $userdata = new Students();
        $userdata->name = $this->name;
        $userdata->email = $this->email;
     
       $userdata->save();
      session()->flash('message','User created');
 

        $this->name = '';
        $this->email  = '';

    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }
}


