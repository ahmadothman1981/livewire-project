<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class MessagesData extends Component
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
        $data = Message::where('name', 'like', '%' . $this->search . '%')->paginate(5);
        
        return view('admin.messages.messages-data',["data" => $data]);
    }
}
