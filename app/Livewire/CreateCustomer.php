<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class CreateCustomer extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';

    public function render()
    {
        return view('livewire.create-customer');
    }

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'phone' => 'required|unique:users|max:255',
        ]);
        User::create($validated);
        // $this->reset();
        session()->flash('success','고객 정보를 등록했습니다.');
        return $this->redirect('/customers', navigate:true);
    }
}
