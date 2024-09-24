<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificacionController extends Controller
{

    public function __invoke(Request $request)
    {
        $notificaciones = auth()->user()->unreadNotifications;

        // Limpiar notificaciones una vez leídas
        auth()->user()->unreadNotifications->markAsRead();

        return view('notificaciones.index', [
            'notificaciones' => $notificaciones
        ]);
    }
}
