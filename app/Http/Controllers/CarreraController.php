<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarreraController extends Controller
{
    function index()
    {
        $categories = Carrera::all();
        return view('pantallas/view-addmaterial1', compact('categories'));
    }
}
