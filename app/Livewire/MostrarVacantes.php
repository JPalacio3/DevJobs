<?php

namespace App\Livewire;

use App\Models\Vacante;
use Livewire\Component;

use function Laravel\Prompts\alert;

class MostrarVacantes extends Component
{
    protected $listeners = [
        'eliminarVacante'
    ];

    public function eliminarVacante(Vacante $vacante)
    {
        $vacante->delete();
    }

    public function render()
    {
        $vacantes = Vacante::where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('livewire.mostrar-vacantes', [
            'vacantes' => $vacantes,
        ]);
    }
}
