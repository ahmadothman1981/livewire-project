<?php

namespace App\Livewire\Front\Components;

use App\Models\Setting;
use Livewire\Component;

class SettingComponent extends Component
{
    public function render()
    {
        return view('front.components.setting-component',['settings' => Setting::all()]);
    }
}
