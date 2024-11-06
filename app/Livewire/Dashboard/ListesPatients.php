<?php
namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Rendezvous;

class ListesPatients extends Component
{
    public $searchTerm = '';

    public function render()
    {
        $rendezvous = Rendezvous::query()
            ->where('Full_name', 'like', '%'.$this->searchTerm.'%')
            ->orWhere('user_name', 'like', '%'.$this->searchTerm.'%')
            ->orWhere('user_phone', 'like', '%'.$this->searchTerm.'%')
            ->orWhere('location', 'like', '%'.$this->searchTerm.'%')
            ->orWhere('email', 'like', '%'.$this->searchTerm.'%')
            ->get();

        return view('livewire.dashboard.listes-patients', compact('rendezvous'));
    }
}
