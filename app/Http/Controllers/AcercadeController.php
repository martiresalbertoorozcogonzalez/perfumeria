<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acerca;
use App\Perfume;

class AcercadeController extends Controller
{
    public function index()
    {

        $perfumes = Perfume::orderBy('id', 'DESC')->paginate(6);
        $acerca = Acerca::all();

        return view('perfumeria.acercade.index', compact('perfumes', 'acerca'));
    }
}
