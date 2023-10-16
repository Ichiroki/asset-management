<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public $type, $name, $id, $placeholder;
    /**
     * Create a new component instance.
     */
    public function __construct($type, $name, $id, $placeholder)
    {
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->name = $name;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
