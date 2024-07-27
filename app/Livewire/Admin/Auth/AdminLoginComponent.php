<?php

namespace App\Livewire\Admin\Auth;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AdminLoginComponent extends Component
{
    //new validation syntax
    #[Validate('required|string|email')]
    public $email;
    #[Validate('required')]
    public $password;
    #[Validate('nullable')]
    public $remember; 
    
    //old validation syntax
   /* public function rules()
    {
        return [
            'email' => 'required|string|email',
            'password' => 'required',
            'remember' => 'nullable'
        ];
    }*/

    public function submit()
    {
        $this->validate();
        if(!Auth::guard('admin')->attempt(['email' => $this->email, 'password' => $this->password], $this->remember))
        {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        return to_route('admin.index');
        
    }
    public function render()
    {
        return view('admin.auth.admin-login-component');
    }
}
