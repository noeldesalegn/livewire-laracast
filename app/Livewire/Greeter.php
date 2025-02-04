<?php

namespace App\Livewire;

use Livewire\Component;

class Greeter extends Component
{
    public $name = '';
    public $greeting = '';

    public $greetingMessage = '';

public function changeGreeting() {
    $this->reset('greetingMessage');
    $this->validate([
        'name' => 'required|min:2',
    ]);
    $this->greetingMessage = "{$this->greeting} , {$this->name}";
//    or use  concatenation like this
//    $this->greetingMessage = $this->greeting . ' , ' . $this->name;
}
    public function render()
    {
        return view('livewire.greeter');
    }
}
