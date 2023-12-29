<?php

namespace App\Http\Controllers;

use App\Models\farmasis;
use Illuminate\Http\Request;

class farmasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farmasis = Farmasis::all();
        return view('farmasi.index',['farmasis'=>$farmasis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('farmasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\farmasis  $farmasis
     * @return \Illuminate\Http\Response
     */
    public function show(farmasis $farmasis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\farmasis  $farmasis
     * @return \Illuminate\Http\Response
     */
    public function edit(farmasis $farmasis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\farmasis  $farmasis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, farmasis $farmasis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\farmasis  $farmasis
     * @return \Illuminate\Http\Response
     */
    public function destroy(farmasis $farmasis)
    {
        $farmasis->delete();
        return redirect('farmasis')->with('message');
    }
}
