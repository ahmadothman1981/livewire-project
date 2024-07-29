<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillCreate extends Component
{
    public $name , $progress;
   

    public function rules()
    {
        return [
            'name' => 'required|string',
            'progress' => 'required|numeric',
        ];
    }
    public function submit()
        {
          $data =  $this->validate();
           Skill::create($data);
           $this->reset(['name','progress']);
           $this->dispatch('createModalClose');
           $this->dispatch('refreshData')->to(SkillsData::class);
        }
        

    public function render()
    {
        
        return view('admin.skills.skill-create');
    }
}
