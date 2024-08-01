<?php

namespace App\Livewire\Front\Components;

use App\Models\Skill;
use Livewire\Component;

class SkillsComponenet extends Component
{
   
    public function render()
    {
        return view('front.components.skills-componenet',['skills' =>Skill::take(5)->get()]);
    }
}
