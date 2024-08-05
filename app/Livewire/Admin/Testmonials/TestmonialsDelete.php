<?php

namespace App\Livewire\Admin\Testmonials;

use App\Models\Testmonial;
use Livewire\Component;

class TestmonialsDelete extends Component
{
    
    public $testmonial;
    protected $listeners = ['testmonialdelete'];

    public function testmonialdelete($id)
    {
       
       $this->testmonial = Testmonial::find($id);
       $this->dispatch('deleteModalToggle');
    }

   
    public function submit()
        {
            if($this->testmonial->image)
            {
                unlink($this->testmonial->image);
            }
          
          $this->testmonial->delete();
          $this->reset('testmonial');
           $this->dispatch('deleteModalToggle');
           $this->dispatch('refreshData')->to(TestmonialsData::class);
        }
    public function render()
    {
        return view('admin.testmonials.testmonials-delete');
    }
}
