<?php

namespace App\Livewire;

use App\Models\Vacante;
use Livewire\Component;

use function Laravel\Prompts\alert;
use Illuminate\Support\Facades\Storage;

class MostrarVacantes extends Component
{
    protected $listeners = [
        'eliminarVacante'
    ];

    public function eliminarVacante(Vacante $vacante)
    {
        // Compruebo Policy
        $this->authorize('delete', $vacante);
        // Elimino Imagen
        $result = Storage::delete('public/vacantes/' . $vacante->imagen);
        // Elimino Vacante
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
