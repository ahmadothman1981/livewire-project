<?php

namespace App\Livewire\Admin\Testmonials;

use App\Models\Testmonial;
use Livewire\Component;

class TestmonialsShow extends Component
{
    public  $name , $description , $image , $position ;
    protected $listeners = ['testmonialshow'];

    public function testmonialshow($id)
    {
       $testmonial = Testmonial::find($id);
       $this->name = $testmonial->name;
       $this->description = $testmonial->description;
       $this->image = $testmonial->image;
       $this->position = $testmonial->position;
      
       
       $this->dispatch('showModalToggle');
    }
    public function render()
    {
        return view('admin.testmonials.testmonials-show');
    }
}
