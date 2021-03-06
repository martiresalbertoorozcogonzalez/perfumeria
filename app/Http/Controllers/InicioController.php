<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfume;
use App\Category;

class InicioController extends Controller
{
    public function inicio()
    {
        $perfumes = Perfume::orderBy('id', 'DESC')->paginate(12);
        return view('perfumeria.home', compact('perfumes'));
    }


    public function search(Request $request)
    {
        $search = $request->get('search');
        $perfumes = Perfume::where('name', 'like', '%' . $search . '%')->paginate(6);


        if (count($perfumes) == 0) {
            return view('perfumeria.dontsearch')
                ->with('info', 'No hemos encontrado resultados de esta busqueda:');
        } else {
            return view('perfumeria.showproduct', compact('perfumes'));
        }
    }
}
