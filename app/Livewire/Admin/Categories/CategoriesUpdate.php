<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesUpdate extends Component
{
    public $category , $name;
    protected $listeners = ['Categoryupdate'];

    public function Categoryupdate($id)
    {
       $this->category = Category::find($id);
       $this->name = $this->category->name;
      
       $this->resetValidation();
       $this->dispatch('editModalToggle');
    }

    public function rules()
    {
        return [
           'name' => 'required|string',
           
        ];
    }
    public function submit()
        {
          $data =  $this->validate();
          $this->category->update($data);
          
           $this->dispatch('editModalToggle');
           $this->dispatch('refreshData')->to(CategoriesData::class);
        }
    public function render()
    {
        return view('admin.categories.categories-update');
    }
}
