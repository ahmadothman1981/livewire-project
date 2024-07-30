<?php

namespace App\Livewire\Admin\Subscribers;

use App\Models\Subscriber;
use Livewire\Component;

class SubscribersDelete extends Component
{
    public $subscriber;
    protected $listeners = ['subscriberdelete'];

    public function subscriberdelete($id)
    {
       
       $this->subscriber = Subscriber::find($id);
       $this->dispatch('deleteModalToggle');
    }

   
    public function submit()
        {
          
          $this->subscriber->delete();
          $this->reset('subscriber');
           $this->dispatch('deleteModalToggle');
           $this->dispatch('refreshData')->to(SubscribersData::class);
        }
    public function render()
    {
        return view('admin.subscribers.subscribers-delete');
    }
}
