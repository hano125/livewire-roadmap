<?php

namespace App\Livewire;

use Livewire\Component;

class TestProp extends Component
{
    public $name1;




    public function mount()
    {
        $this->fill(["name1" => "test"]);
    }

    public function render()
    {
        return view('livewire.test-prop');
    }
}
