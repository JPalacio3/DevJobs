<?php

namespace App\Livewire;

use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostularVacante extends Component
{
    use WithFileUploads;
    public $cv;
    public $vacante;

    protected $rules = [
        'cv' => 'required|mimes:pdf'
    ];

    public function mount(Vacante $vacante)
    {
        $this->vacante = $vacante;
    }

    public function postularme()
    {
        // Añadir la validación al campo de cv
        $datos = $this->validate();

        // Almacenar CV en el disco duro
        $cv = $this->cv->store('public/cv');
        $datos['cv'] = str_replace('public/cv/', "", $cv);

        // Crear la postulación
        $this->vacante->candidatos()->create([
            'user_id' => auth()->user()->id,
            'cv' => $datos['cv']

        ]);

        // Crear notificación y enviar email de confirmación

        // Mostrar al usuario un mensaje de postulación exitosa
        session()->flash('mensaje', 'Se envió correctamente tu información, mucha suerte');
        return redirect()->back();
    }


    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
