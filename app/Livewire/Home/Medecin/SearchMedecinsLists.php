<?php

namespace App\Livewire\Home\Medecin;

use Livewire\Component;
use App\Models\Medecin; // Assuming your Medecin model is in App\Models
use App\Models\User;

class SearchMedecinsLists extends Component
{
    public $searchTerm = '';
    public $specialty = '';
    public $governorate = '';

    public function render()
    {
        $query = User::query();

        if ($this->searchTerm) {
            $query->where(function ($query) {
                $query->where('full_name', 'like', '%' . $this->searchTerm . '%')
                      ->orWhere('username', 'like', '%' . $this->searchTerm . '%')
                      ->orWhere('adresse', 'like', '%' . $this->searchTerm . '%');
            });
        }

        if ($this->specialty) {
            $query->where('speciality', 'like', '%' . $this->specialty . '%');
        }

        if ($this->governorate) {
            $query->where('governorate', $this->governorate);
        }

        $medecins = $query->get();

        return view('livewire.home.medecin.search-medecins-lists', ['medecins' => $medecins]);
    }
}
