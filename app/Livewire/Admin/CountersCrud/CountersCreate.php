<?php

namespace App\Livewire\Admin\CountersCrud;

use App\Models\Counter;
use Livewire\Component;

class CountersCreate extends Component
{

    public $name , $count , $icon;
   

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
           Counter::create($data);
           $this->reset(['name','count','icon']);
           $this->dispatch('createModalClose');
           $this->dispatch('refreshData')->to(CountersCreate::class);
        }
        
    public function render()
    {
        return view('admin.counters-crud.counters-create');
    }
}
