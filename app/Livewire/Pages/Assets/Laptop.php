<?php

namespace App\Livewire\Pages\Assets;

use App\Models\Asset\Laptop as LaptopAsset;
use Livewire\Component;

class Laptop extends Component
{
    public $search = '';

    public function render()
    {
        $laptops = $this->search ? LaptopAsset::where('type', 'LIKE', "%{$this->search}%")
            ->orWhere('pic', 'LIKE', "%{$this->search}")
            ->orWhere('number_plates', 'LIKE', "%{$this->search}%")
        : LaptopAsset::paginate(5);

        return view('livewire.pages.assets.laptop', compact('laptops'));
    }
}
