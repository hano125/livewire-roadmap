<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;
use Livewire\WithoutUrlPagination;

class ShowPost extends Component
{
    use WithPagination, WithoutUrlPagination;
    public function render()
    {
        return view('livewire.show-post', ['posts' => Post::paginate(10)]);
    }
}
