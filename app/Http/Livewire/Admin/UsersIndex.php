<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
class UsersIndex extends Component
{
    protected $paginationTheme = 'bootstrap';
    public $search;
    use WithPagination;

    public function updatingSearch(){
        $this->resetPage();
    }
    public function render(){

        $users = User::where('name', 'LIKE', '%'.$this->search.'%')
        ->orWhere('email', 'LIKE', '%'.$this->search.'%')->paginate(5);
        return view('livewire.admin.users-index', compact('users'));
    }
}
