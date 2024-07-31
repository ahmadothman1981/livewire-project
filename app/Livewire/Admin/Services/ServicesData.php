<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class ServicesData extends Component
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
        return view('admin.services.services-data',['data' => Service::where('name','like', '%'.$this->search.'%')->paginate(5)]);
    }
}
