<?php

namespace App\Livewire;

use App\Models\YogaClass;
use Livewire\Component;

class ClassList extends Component
{
    public function render()
    {
        $classes = YogaClass::all();

            
        return view('livewire.class-list', ['classes' => $classes,]);
    }
}