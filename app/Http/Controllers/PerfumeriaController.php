<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfume;

class PerfumeriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfume = Perfume::all();

        return view('admin.perfumeria.index', compact('perfume'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $perfume = Perfume::create( $request->all() );

        if($request->hasFile('imgPerfume'))
        {
            $perfume->imgPerfume = $request->file('imgPerfume')->store('public');
        }
        

        $perfume->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $perfume = Perfume::findOrFail($request->category_id);

        $perfume->update($request->all());

        if($request->hasFile('imgPerfume'))
        {
            $perfume->imgPerfume = $request->file('imgPerfume')->store('public');
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
        $perfume = Perfume::findOrFail($request->category_id);
     
        $perfume->delete();
     
        return back();
    }

}
