<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public $type;

    public $id;

    public $placeholder;

    /**
     * Create a new component instance.
     */
    public function __construct($type, $id, $placeholder)
    {
        $this->type = $type;
        $this->placeholder = $placeholder;
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
