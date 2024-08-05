<?php

namespace App\Livewire\Front\Components;

use Livewire\Component;
use App\Models\Testmonial;

class TestmonialsComponent extends Component
{
    public function render()
    {
        return view('front.components.testmonials-component',['testmonials' => Testmonial::take(3)->get()]);
    }
}
