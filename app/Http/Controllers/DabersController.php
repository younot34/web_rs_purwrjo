<?php

namespace App\Http\Controllers;

use App\Models\Dabers;
use Illuminate\Http\Request;

class DabersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dabers = Dabers::all();
        return view('slide.index', ['dabers' => $dabers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        $dabers = $request->all();
        if ($image = $request->file('image')){
            $destinationPath = 'image/';
            $imageName = date('Ymd') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $dabers['image']=$imageName;
        }
        Dabers::create($dabers);

        return redirect('dabers')->with('message','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dabers  $dabers
     * @return \Illuminate\Http\Response
     */
    public function show(Dabers $dabers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dabers  $dabers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daber = Dabers::find($id); // Ganti 'Daber' dengan nama model Anda

        return view('slide.edit', ['daber' => $daber]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dabers  $dabers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dabers $daber)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')){
            $destinationPath = 'image/';
            $imageName = date('Ymd') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image']=$imageName;
        }else{
            unset($input['image']);
        }
        $daber->update($input);

        return redirect('dabers')->with('message','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dabers  $dabers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dabers $daber)
    {
        $daber->delete();
        return redirect('dabers')->with('message','Data berhasil dihapus');
    }
}
