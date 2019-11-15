<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acerca;

class AcercadeController extends Controller
{
    public function index()
    {

        $acerca = Acerca::all();

        return view('perfumeria.acercade.index', compact('acerca'));
    }
}
