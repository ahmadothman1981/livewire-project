<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesUpdate extends Component
{

    public $service , $name , $description , $icon;
    protected $listeners = ['serviceupdate'];

    public function serviceupdate($id)
    {
       $this->service = Service::find($id);
       $this->name = $this->service->name;
       $this->description = $this->service->description;
       $this->icon = $this->service->icon;
       $this->resetValidation();
       $this->dispatch('editModalToggle');
    }

    public function rules()
    {
        return [
           'name' => 'required|string',
            'description' => 'required|string',
            'icon' => 'required',
        ];
    }
    public function submit()
        {
          $data =  $this->validate();
          $this->service->update($data);
          
           $this->dispatch('editModalToggle');
           $this->dispatch('refreshData')->to(ServicesData::class);
        }
    public function render()
    {
        return view('admin.services.services-update');
    }
}
