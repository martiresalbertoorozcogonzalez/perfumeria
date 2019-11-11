<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfume;

class PerfumeMujerController extends Controller
{
    public function index()
    {
        $perfumes = Perfume::where("category_id", "=", 2)->paginate(12);

        return view('perfumeria.perfumemujer.index', compact('perfumes'));
    }
}
