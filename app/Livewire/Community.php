<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blogs;

class Community extends Component
{
    public function render()
    {
        return view('livewire.community', [
            'blogs' => Blogs::all()
        ]);
    }
}
