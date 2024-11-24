<?php

namespace App\Livewire;

use App\Models\User;
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
        return view('livewire.customers');
    }
}
