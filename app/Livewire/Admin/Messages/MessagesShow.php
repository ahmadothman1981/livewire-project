<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class MessagesShow extends Component
{

    public  $name , $message , $subject ,  $email;
    protected $listeners = ['messageshow'];

    public function messageshow($id)
    {
      $data =  Message::find($id);
       $this->name = $data->name;
       $this->message = $data->message;
       $this->subject = $data->subject;
       $this->email = $data->email;
      
       
       $this->dispatch('showModalToggle');
       //open message then update message status to read = 1 then refresh all data from message table
       $data->update(['status' => '1']);
       $this->dispatch('refreshData')->to(MessagesData::class);
    }
    public function render()
    {
        return view('admin.messages.messages-show');
    }
}
