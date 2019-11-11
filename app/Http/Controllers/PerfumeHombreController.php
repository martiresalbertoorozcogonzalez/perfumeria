<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfume;

class PerfumeHombreController extends Controller
{
    public function index()
    {

        $perfumes = Perfume::where("category_id", "=", 1)->paginate(12);

        return view('perfumeria.perfumehombre.index', compact('perfumes'));
    }
}
