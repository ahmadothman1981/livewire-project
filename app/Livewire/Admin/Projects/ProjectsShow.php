<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;

class ProjectsShow extends Component
{

    public  $name , $description , $image , $link , $category_id ;
    protected $listeners = ['projectsshow'];

    public function projectsshow($id)
    {
       $project = Project::find($id);
       $this->name = $project->name;
       $this->description = $project->description;
       $this->image = $project->image;
       $this->link = $project->link;
       $this->category_id = $project->category->name;
       
       $this->dispatch('showModalToggle');
    }
    public function render()
    {
        return view('admin.projects.projects-show');
    }
}
