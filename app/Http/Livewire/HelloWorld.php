<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Reginald';
    public $loud = false;
    public $greeting = 'Hello';
    public $languages = ['Javascript'];

    public function resetName ($name = 'Chico') {
        $this->name = $name;
    }

    public function mount()
    {
        return view('livewire.hello-world');
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
