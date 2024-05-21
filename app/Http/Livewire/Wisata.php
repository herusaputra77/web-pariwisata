<?php

namespace App\Http\Livewire;

use App\Models\Content;
use Livewire\Component;

class Wisata extends Component
{
    public function render()
    {
        $destinasi = Content::limit(6)->get();

        return view('livewire.wisata',compact('destinasi'));
    }
}
