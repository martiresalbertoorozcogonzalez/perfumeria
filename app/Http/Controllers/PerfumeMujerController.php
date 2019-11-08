<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfume;

class PerfumeMujerController extends Controller
{
    public function index()
    {
        $perfumes = Perfume::all();

        return view('perfumeria.perfumemujer.index', compact('perfumes'));
    }
}
