<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectsCreate extends Component
{

     use WithFileUploads;

    public $name , $link , $image , $description , $category_id , $categories ;
   
    public function mount()
    {
        $this->categories = Category::all();
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'link' => 'nullable|url',
            'image' => 'required',
            'description' => 'required|string',
            'category_id' => 'required',
            
        ];
    }

    public function attributes()
    {
        return [
           
            'category_id' => 'Category',
            
        ];
    }
    public function submit()
        {
          $data =  $this->validate($this->rules(), [] ,$this->attributes());
          $imageName = time().'.'.$this->image->getClientOriginalExtension();
          $this->image->storeAs('images', $imageName,'public');
          $data['image'] = 'storage/images/'.$imageName;
          
           Project::create($data);
           $this->reset(['name','link','image','description','category_id']);
           $this->dispatch('createModalClose');
           $this->dispatch('refreshData')->to(ProjectsData::class);
        }
    public function render()
    {
        return view('admin.projects.projects-create');
    }
}
