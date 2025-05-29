<?php

namespace App\Livewire;

use App\Models\Booking;
use App\Models\YogaClass;
use Livewire\Component;

class ClassBooking extends Component
{
    public $classId, $name, $email, $phone, $comments;
    
    protected $rules = [
        'name' => 'required|min:3|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|max:20',
        'comments' => 'nullable|max:500',
    ];
    
    protected $messages = [
        'name.required' => 'Пожалуйста, укажите ваше имя.',
        'email.required' => 'Пожалуйста, укажите ваш email.',
        'phone.required' => 'Пожалуйста, укажите ваш телефон.',
    ];

    public function mount($classId)
    {
        $this->classId = $classId;
    }

    public function bookClass()
    {
        $this->validate();
        
        $yogaClass = YogaClass::findOrFail($this->classId);
        
        Booking::create([
            'yoga_class_id' => $this->classId,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'comments' => $this->comments,
        ]);
        
        $this->reset(['name', 'email', 'phone', 'comments']);
    }

    public function render()
    {
        $yogaClass = YogaClass::with('trainer')->findOrFail($this->classId);
        
        return view('livewire.class-booking', [
            'yogaClass' => $yogaClass,
        ]);
    }
}