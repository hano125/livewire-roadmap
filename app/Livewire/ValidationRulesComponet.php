<?php

namespace App\Livewire;

use Livewire\Component;

class ValidationRulesComponet extends Component
{

    public $email;
    public $password;
    public $rememberme;


    protected $rules = [
        'email' => 'required|email|min:5',
        'password' => 'required|min:3',
        "rememberme" => "nullable"
    ];

    public function updating($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function save()
    {
        $this->validate();
    }
    public function render()
    {
        return view('livewire.validation-rules-componet');
    }
}
