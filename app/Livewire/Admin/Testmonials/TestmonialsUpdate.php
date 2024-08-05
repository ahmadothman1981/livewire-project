<?php

namespace App\Livewire\Admin\Testmonials;

use Livewire\Component;
use App\Models\Testmonial;
use Livewire\WithFileUploads;

class TestmonialsUpdate extends Component
{
    use WithFileUploads;
    public $testmonial , $name , $description , $position ,$image;
    protected $listeners = ['testmonialupdate'];

    public function testmonialupdate($id)
    {
       $this->testmonial = Testmonial::find($id);
       $this->name = $this->testmonial->name;
       $this->description = $this->testmonial->description;
       $this->position = $this->testmonial->position;
       $this->resetValidation();
       $this->dispatch('editModalToggle');
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'description' => 'required|string',
            'position' => 'required|string',
            'image' => 'nullable',
        ];
    }
    public function submit()
        {
            $data =  $this->validate($this->rules());
            if($this->image)
            {
             // unlink($this->testmonial->image);
              $imageName = time().'.'.$this->image->getClientOriginalExtension();
              $this->image->storeAs('images', $imageName,'public');
              $data['image'] = 'storage/images/'.$imageName;
            }else{
              unset($data['image']);
            }
              
            $this->testmonial->update($data);
            
             $this->dispatch('editModalToggle');
             $this->dispatch('refreshData')->to(TestmonialsData::class);
        }
    public function render()
    {
        return view('admin.testmonials.testmonials-update');
    }
}
