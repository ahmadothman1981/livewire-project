<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillShow extends Component
{
    public  $name , $progress;
    protected $listeners = ['skillshow'];

    public function skillshow($id)
    {
       $skill = Skill::find($id);
       $this->name = $skill->name;
       $this->progress = $skill->progress;
       
       $this->dispatch('showModalToggle');
    }
    public function render()
    {
        return view('admin.skills.skill-show');
    }
}
