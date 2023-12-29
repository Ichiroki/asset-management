<?php

namespace App\Livewire\Pages\Office;

use Livewire\Component;
use App\Models\User as UserList;

class Users extends Component
{
    public $search = '';

    public function render()
    {
    $users = $this->search ? UserList::where('type', 'LIKE', "%{$this->search}%")
        ->orWhere('pic', 'LIKE', "%{$this->search}")
        ->orWhere('number_plates', 'LIKE', "%{$this->search}%")
        : UserList::paginate(5);

        return view('livewire.pages.office.users', compact('users'));
    }
}
