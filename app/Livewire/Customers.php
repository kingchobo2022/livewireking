<?php

namespace App\Livewire;

use App\Models\User;
// use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Customers extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    //public $customers = [];
    public $search = '';

    // public function mount()
    // {
    //     $this->customers = User::all();
    // }

    public function render()
    {
        // dd(Auth::user()->name);
        if ($this->search) {
            $customers = User::where('name', 'like', '%'.$this->search.'%')->paginate(5);
        } else {
            $customers = User::paginate(5);
        }

        return view('livewire.customers', ['customers' => $customers]);
    }

    public function deleteCustomer(User $id)
    {
        $id->delete();
        session()->flash('success', '고객 정보가 삭제되었습니다.');
        return $this->redirect('/customers', navigate:true);
    }
}
