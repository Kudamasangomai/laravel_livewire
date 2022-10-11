<?php

namespace App\Http\Livewire;

use App\Models\Students;
use Livewire\Component;

class Studentslist extends Component
{
    protected $listeners = ['refreshComponent' => 'render'];  
  
    public function render()
    {
        $student = Students::all();
        return view('livewire.studentslist',compact('student',$student));
    }
}

 
 