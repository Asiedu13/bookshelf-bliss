<?php

namespace App\Livewire\Components\Cards;

use Livewire\Component;

class CardMini extends Component
{
    public $src = "";
    public $title = "";
    public $edition = "";

    public function mount($src, $title, $edition)
    {   
        $this->src = $src;
        $this->title = $title;
        $this->edition = $edition;

    } 
    public function render()
    {
        return view('livewire.components.cards.card-mini');
    }
}
