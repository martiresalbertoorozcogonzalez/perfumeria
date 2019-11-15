<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acerca;

class AcercaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acerca = Acerca::all();
        return view('admin.acerca.index', compact('acerca'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $acerca = Acerca::create($request->all());

        if ($request->hasFile('image')) {
            $acerca->image = $request->file('image')->store('public');
        }


        $acerca->save();

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

        $acerca = Acerca::findOrFail($request->acerca_id);

        $acerca->update($request->all());

        if ($request->hasFile('image')) {
            $acerca->image = $request->file('image')->store('public');
        }


        $acerca->update();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $acerca = Acerca::findOrFail($request->acerca_id);

        $acerca->delete();

        return back();
    }
}
