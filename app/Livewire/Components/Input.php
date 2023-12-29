<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Input extends Component
{
    public $type;
    public $id;
    public $placeholder;

    public function __construct(
        $type,
        $id,
        $placeholder
    ) {
        $this->type = $type;
        $this->id = $id;
        $this->placeholder = $placeholder;
    }

    public function render()
    {
        return view('livewire.components.input');
    }
}
