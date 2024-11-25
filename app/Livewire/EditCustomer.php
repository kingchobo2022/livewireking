<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class EditCustomer extends Component
{
    public $id;
    public $user;
    public $name;
    public $email;
    public $phone;

    public function mount(User $id)
    {
        $this->user = $id;
        $this->name = $id->name;
        $this->email = $id->email;
        $this->phone = $id->phone;
    }

    public function render()
    {
        return view('livewire.edit-customer');
    }

    public function updateCustomer()
    {
        $validated = $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
        ]);

        $this->user->update($validated);
        session()->flash('success', '고객 정보를 성공적으로 수정했습니다.');
        return $this->redirect('/customers', navigate:true);
    }
}
