<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParkingController extends Controller
{
    // Método para mostrar la vista de parking
    public function index()
    {
        return view('parking');  // Devuelve la vista parking.blade.php
    }
}
