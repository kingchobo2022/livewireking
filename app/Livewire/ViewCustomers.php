<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ViewCustomers extends Component
{
    public $customer = [];
    public function mount($id) {
        $this->customer = User::find($id);
    }
    public function render()
    {
        return view('livewire.view-customers');
    }
}
