<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriesData extends Component
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
        $data = Category::where('name', 'like', '%' . $this->search . '%')->paginate(5);
        return view('admin.categories.categories-data',['data' => $data]);
    }
}
