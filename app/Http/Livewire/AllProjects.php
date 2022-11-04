<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;

class AllProjects extends Component
{

    public function mount()
    {
        $this->projects = Project::orderby('updated_at', 'desc')->get();

    }

    public function render()
    {
        return view('livewire.all-projects');
    }
}
