<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;

class ProjectsDelete extends Component
{

    public $project;
    protected $listeners = ['projectsdelete'];

    public function projectsdelete($id)
    {
       
       $this->project = Project::find($id);
       $this->dispatch('deleteModalToggle');
    }

   
    public function submit()
        {
            if($this->project->image)
            {
                unlink($this->project->image);
            }
          
          $this->project->delete();
          $this->reset('project');
           $this->dispatch('deleteModalToggle');
           $this->dispatch('refreshData')->to(ProjectsData::class);
        }
    public function render()
    {
        return view('admin.projects.projects-delete');
    }
}
