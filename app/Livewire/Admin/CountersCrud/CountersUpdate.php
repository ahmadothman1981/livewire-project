<?php

namespace App\Livewire\Admin\CountersCrud;

use App\Livewire\Admin\Counters\CountersData;
use App\Models\Counter;
use Livewire\Component;

class CountersUpdate extends Component
{
    public $counter , $name , $count , $icon;
    protected $listeners = ['counterupdate'];

    public function counterupdate($id)
    {
       $this->counter = Counter::find($id);
       $this->name = $this->counter->name;
       $this->count = $this->counter->count;
       $this->icon = $this->counter->icon;
       $this->resetValidation();
       $this->dispatch('editModalToggle');
    }

    public function rules()
    {
        return [
           'name' => 'required|string',
            'count' => 'required|numeric',
            'icon' => 'required',
        ];
    }
    public function submit()
        {
          $data =  $this->validate();
          $this->counter->update($data);
          
           $this->dispatch('editModalToggle');
           $this->dispatch('refreshData')->to(CountersData::class);
        }
    public function render()
    {
        return view('admin.counters-crud.counters-update');
    }
}
