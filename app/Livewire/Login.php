<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login');
    }

    public function loginUser(Request $request)
    {
        $validated = $this->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|max:255',
        ]);
        if (Auth::attempt($validated)) {
            $request->session()->regenerate(); // Session Fixation Attack 방어 목적으로 세션 재생성
            return $this->redirect('/customers', navigate: true);
        }

        $this->addError('email', '이메일과 비밀번호가 일치하는 정보가 없습니다.');
    }    
}
