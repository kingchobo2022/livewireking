<?php

namespace App\Livewire;

use App\Models\User;
// use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Customers extends Component
{
    public $customers = [];
    public function mount()
    {
        $this->customers = User::all();
    }
    public function render()
    {
        // dd(Auth::user()->name);
        return view('livewire.customers');
    }

    public function deleteCustomer(User $id)
    {
        $id->delete();
        session()->flash('success', '고객 정보가 삭제되었습니다.');
        return $this->redirect('/customers', navigate:true);
    }
}
