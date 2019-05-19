<?php

namespace App\Http\Controllers;

use App\Principal;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PrincipalController extends Controller
{
    function index()
    {
        $carreras = Principal::all();
        return view('pantallas.principal', compact('carreras'));
    }
}
