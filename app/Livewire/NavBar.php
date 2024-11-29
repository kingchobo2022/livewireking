<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NavBar extends Component
{
    public function render()
    {
        return view('livewire.nav-bar');
    }

    public function logout(Request $request)
    {
        Auth::logout(); // 로그아웃
        $request->session()->invalidate(); // 현재 세션 무효화
        $request->session()->regenerateToken(); // CSRF 토큰 새로 생성
        return $this->redirect('/login', navigate: true); // 로그인 페이지로 이동
    }
}
