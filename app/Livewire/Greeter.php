<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate; // Add this import

class Greeter extends Component
{
    #[Validate('required|min:2')] // Attribute directly above the property
    public $name = '';

    public $greeting = '';
    public $greetingMessage = '';

    public function changeGreeting()
    {
        $this->reset('greetingMessage');
        $this->validate(); // Ensure this is uncommented
        $this->greetingMessage = "{$this->greeting} , {$this->name}";
    }

    public function render()
    {
        return view('livewire.greeter');
    }
}
