<?php

namespace App\Livewire\Pages\Office;

use Livewire\Component;
use App\Models\Office\Department as DepartmentList;

class Department extends Component
{
    public function render()
    {
        $departments = DepartmentList::paginate(5);

        return view('livewire.pages.office.department', compact('departments'));
    }
}
