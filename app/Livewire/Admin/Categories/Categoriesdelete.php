<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class Categoriesdelete extends Component
{
    public $category;
    protected $listeners = ['categorydelete'];

    public function categorydelete($id)
    {
       
       $this->category = Category::find($id);
       $this->dispatch('deleteModalToggle');
      
    }

   
   
    public function submit()
        {
            
          $this->category->delete();
          $this->reset('category');
           $this->dispatch('deleteModalToggle');
           $this->dispatch('refreshData')->to(CategoriesData::class);
        }
    public function render()
    {
        return view('admin.categories.categoriesdelete');
    }
}
