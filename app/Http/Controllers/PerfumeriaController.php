<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfume;
use App\Category;

class PerfumeriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cat = Category::all();

        $perfume = Perfume::orderBy('id', 'DESC')->paginate(4);



        return view('admin.perfumeria.index', compact('perfume', 'cat'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $perfume = Perfume::create($request->all());

        if ($request->hasFile('image')) {
            $perfume->image = $request->file('image')->store('public');
        }


        $perfume->save();

        return back();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $perfume = Perfume::findOrFail($request->perfume_id);

        $perfume->update($request->all());

        if ($request->hasFile('image')) {
            $perfume->image = $request->file('image')->store('public');
        }


        $perfume->update();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $perfume = Perfume::findOrFail($request->perfume_id);

        $perfume->delete();

        return back();
    }
}
