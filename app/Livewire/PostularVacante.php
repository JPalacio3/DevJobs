<?php

namespace App\Livewire;

use Livewire\Component;

class PostularVacante extends Component
{
    public $cv;

    protected $rules = [
        'cv' => 'required|mimes:pdf'
    ];

    public function postularme()
    {
        // Añadir la validación al campo de cv
        $this->validate();

        // Almacenar CV en el disco duro

        // Crear la postulación

        // Crear notificación y enviar email de confirmación

        // Mostrar al usuario un mensaje de postulación exitosa

    }


    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
