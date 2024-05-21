<?php

namespace App\Http\Livewire;

use WithPagination;
use App\Models\Content;
use Livewire\Component;

class Contents extends Component
{
    public function render()
    {
        $contents = Content::paginate(10);

        return view('livewire.content',compact('contents'));
    }
}
