<?php

namespace App\Livewire;

use App\Models\Vacante;
use Livewire\Component;

class HomeVacantes extends Component
{
    public function render()
    {
        $vacantes = Vacante::latest()->get();

        return view('livewire.home-vacantes', [
            'vacantes' => $vacantes
        ]);
    }
}
