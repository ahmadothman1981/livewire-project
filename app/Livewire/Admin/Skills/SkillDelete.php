<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillDelete extends Component
{
    public $skill;
    protected $listeners = ['skilldelete'];

    public function skilldelete($id)
    {
       
       $this->skill = Skill::find($id);
       $this->dispatch('deleteModalToggle');
    }

   
    public function submit()
        {
          
          $this->skill->delete();
          $this->reset('skill');
           $this->dispatch('deleteModalToggle');
           $this->dispatch('refreshData')->to(SkillsData::class);
        }
    public function render()
    {
        return view('admin.skills.skill-delete');
    }
}
