<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Form extends Component
{
    use WithFileUploads;

    public $first_name;
    public $last_name;
    public $email;
    public $project_name;
    public $project_priority = '';
    public $project_status = '';
    public $project_person;
    public $attachment;
    public $user_id;

    public $projects;

    protected $rules = [
        'first_name'        => 'required',
        'last_name'         => 'required',
        'email'             => 'required|email',
        'project_name'      => 'required',
        'project_priority'  => 'required',
        'project_status'    => 'required',
        'project_person'    => 'required|email',
    ];

    public function saveProject()
    {
        $this->validate();

        Project::create([
            'first_name'       => $this->first_name,
            'last_name'        => $this->last_name,
            'email'            => $this->email,
            'project_name'     => $this->project_name,
            'project_priority' => $this->project_priority,
            'project_status'   => $this->project_status,
            'project_person'   => $this->project_person,
            'attachment'       => $this->attachment->store('public/docs'),
            'user_id'          => Auth::id()
        ]);



        session()->flash('submitted', 'Submitted!');
        $this->reset(['first_name','last_name','email', 'project_name', 'project_priority', 'project_status', 'project_person', 'attachment']);

    }
    
    public function render()
    {

        return view('livewire.form');
    }
}
