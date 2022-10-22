<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NftDetailsComponent extends Component
{
    public function render()
    {
        return view('livewire.nft-details-component')->layout("layouts.base");
    }
}
