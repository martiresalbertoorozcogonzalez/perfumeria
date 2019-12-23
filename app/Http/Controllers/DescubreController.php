<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfume;

class DescubreController extends Controller
{
    public function index()
    {

        $titulo = 'Ultimos perfumes';

        $perfumes = Perfume::whereMonth('created_at', '11')->paginate(6);

        // dd($perfume);

        return view('perfumeria.descubre.index', compact('perfumes', 'titulo'));
    }
}
