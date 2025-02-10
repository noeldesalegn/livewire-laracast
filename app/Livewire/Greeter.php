<?php

namespace App\Livewire;

use App\Models\Greeting;
use Livewire\Component;
use Livewire\Attributes\Validate; // Add this import

class Greeter extends Component
{
    #[Validate('required|min:2')] // Attribute directly above the property
    public $name = '';
    public $greeting = '';
    public $greetingMessage = '';
    public $greetings = [];
    public function changeGreeting()
    {
        $this->reset('greetingMessage');
        $this->validate(); // Ensure this is uncommented
        $this->greetingMessage = "{$this->greeting}  {$this->name}";
    }
    public function mount(){
        $this->greetings = Greeting::all();
//        if ($this->greetings->isNotEmpty()) {
//            $this->greeting = $this->greetings->first()->text; // Set default value
//        }
    }
//    public function updated($property , $value)
//    {
//        if($property === 'name'){
//            $this->name=strtoupper($value);
//        }
//    }
     public function updatedName($value)
    {
        $this->name=strtoupper($value);
    }
    public function render()
    {
        return view('livewire.greeter');
    }
}
