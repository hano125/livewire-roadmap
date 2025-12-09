<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class FileUploadComponet extends Component
{
    use WithFileUploads;

    public $photo;
    public function rules()
    {
        return [
            "photo" => "required|image"
        ];
    }

    public function submit()
    {
        $this->validate();
        $path = $this->photo->store('images', 'public');
    }
    public function render()
    {
        return view('livewire.file-upload-componet');
    }
}
