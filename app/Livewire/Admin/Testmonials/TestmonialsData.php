<?php

namespace App\Livewire\Admin\Testmonials;

use Livewire\Component;
use App\Models\Testmonial;
use Livewire\WithPagination;

class TestmonialsData extends Component
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
        return view('admin.testmonials.testmonials-data',['data' => Testmonial::where('name','like', '%'.$this->search.'%')->paginate(5)]);
    }
}
