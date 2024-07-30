<?php

namespace App\Livewire\Admin\CountersCrud;

use App\Livewire\Admin\Counters\CountersData;
use App\Models\Counter;
use Livewire\Component;

class CountersDelete extends Component
{
    public $counter;
    protected $listeners = ['counterdelete'];

    public function counterdelete($id)
    {
       
       $this->counter = Counter::find($id);
       $this->dispatch('deleteModalToggle');
    }

   
    public function submit()
        {
          
          $this->counter->delete();
          $this->reset('counter');
           $this->dispatch('deleteModalToggle');
           $this->dispatch('refreshData')->to(CountersData::class);
        }
    public function render()
    {
        return view('admin.counters-crud.counters-delete');
    }
}
