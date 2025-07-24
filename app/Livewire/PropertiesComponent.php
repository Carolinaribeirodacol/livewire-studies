<?php

namespace App\Livewire;

use Livewire\Component;

class PropertiesComponent extends Component
{
    public string $value1 = "Property 1";

    public function mount()
    {
        //
    }

    public function render()
    {
        return view('livewire.properties-component');
    }
}
