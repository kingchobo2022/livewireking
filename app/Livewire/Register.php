<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $phone;

    public function render()
    {
        return view('livewire.register');
    }

    public function storeUser()
    {
        //dd($this->all());
        $validated = $this->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6|max:50',
        ]);

        $user = User::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        Auth::login($user);
        session()->flash('success', '유저를 성공적으로 등록했습니다.');
        return $this->redirect('/customers', navigate: true);
    }
}
