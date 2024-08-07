<?php

namespace App\Livewire\Admin\Setting;

use App\Models\Setting;
use Livewire\Component;

class UpdateSettingComponent extends Component
{
    public  $setting ;
    public function mount()
    {
        $this->setting = Setting::find(1);
        
        
    }

    public function rules()
    {
        return [
            'setting.name'=>'required|string',
            'setting.email'=>'required|email',
            'setting.address'=>'required|string',
            'setting.phone'=>'required|max:20',
            'setting.facebook'=>'string|url',
            'setting.linkedin'=>'string|url',
            'setting.twitter'=>'string|url',
            'setting.instagram'=>'string|url',
        ];
       
    }
    public function submit()
    {
        $this->validate();
        $this->setting->save();
       
        session()->flash('message','Setting Updated Successfully');

    }
    public function render()
    {
        return view('admin.setting.update-setting-component');
    }
}
