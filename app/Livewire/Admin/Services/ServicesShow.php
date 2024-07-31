<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesShow extends Component
{

    public  $name , $description , $icon;
    protected $listeners = ['serviceshow'];

    public function serviceshow($id)
    {
       $service = Service::find($id);
       $this->name = $service->name;
       $this->description = $service->description;
       $this->icon = $service->icon;
       
       $this->dispatch('showModalToggle');
    }
    public function render()
    {
        return view('admin.services.services-show');
    }
}
