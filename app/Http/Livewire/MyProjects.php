<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use App\Models\User;


class MyProjects extends Component
{

    public $modalFormVisible = false;
    public $modalConfirmDelete = false;

    public $projects;
    public $project;
    public $project_id;
    public $user_id;

    public $first_name;
    public $last_name;
    public $email;
    public $project_name;
    public $project_priority = '';
    public $project_status = '';
    public $project_person;
    public $attachment;


    protected $rules = [
        'project_priority'  => 'required',
        'project_status'    => 'required',
        'project_person'    => 'required|email',
    ];

    public function updateShowModal($id)
    {
        $project = Project::find($this->project_id);

        $this->project_id       = $project->id;
        // $this->first_name       = $project->first_name;
        // $this->last_name        = $project->last_name;
        // $this->email            = $project->email;
        // $this->project_name     = $project->project_name;
        $this->project_priority = $project->project_priority;
        $this->project_status   = $project->project_status;
        $this->project_person   = $project->project_person;

        $this->modalFormVisible = true;
    }

    // public function edit($form_id)
    // {
    //     $form = Form::findOrFail($form_id);

    //     $this->first_name       = $form->first_name;
    //     $this->last_name        = $form->last_name;
    //     $this->email            = $form->email;
    //     $this->project_name     = $form->project_name;
    //     $this->project_priority = $form->project_priority;
    //     $this->project_status   = $form->project_status;
    //     $this->project_person   = $form->project_person;

    //     $this->form_id          = $form->id;
    //     // $this->updateForm       = true;

    // }


    public function deleteShowModal($id)
    {
        $this->modelId = $id;
        $this->modalConfirmDelete = true;
    }





    public function render()
    {
        $this->projects = Project::orderby('updated_at', 'desc')->get();

        return view('livewire.my-projects');
    }
}
