<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillUpdate extends Component
{
    public $skill , $name , $progress;
    protected $listeners = ['skillupdate'];

    public function skillupdate($id)
    {
       $this->skill = Skill::find($id);
       $this->name = $this->skill->name;
       $this->progress = $this->skill->progress;
       $this->resetValidation();
       $this->dispatch('editModalToggle');
    }

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
          $this->skill->update($data);
          
           $this->dispatch('editModalToggle');
           $this->dispatch('refreshData')->to(SkillsData::class);
        }
    public function render()
    {
        return view('admin.skills.skill-update');
    }
}
