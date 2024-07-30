<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;
use Livewire\WithPagination;

class CountersData extends Component
{
    use WithPagination;

    public $search ;

    public function updatingSearch()
    {
        $this->resetPage();
        //reset pagiation so the search for the whole pages will work
    }

    protected $listeners = ['refreshData' => '$refesh'];

    public function render()
    {
        return view('admin.counters.counters-data',['data' => Counter::where('name','like', '%'.$this->search.'%')->paginate(5)]);
    }
}
