<?php

namespace App\Http\Controllers;

use App\Models\Vacante;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Vacante $vacante)
    {
        return view('candidatos.index', [
            'vacante' => $vacante,
        ]);
    }
}
