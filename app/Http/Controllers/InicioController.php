<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfume;
use App\Category;

class InicioController extends Controller
{
    public function inicio()
    {
        $perfumes = Perfume::paginate(16);
        return view('perfumeria.home', compact('perfumes'));
    }
}
