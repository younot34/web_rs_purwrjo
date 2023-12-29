<?php

namespace App\Http\Controllers;

use App\Models\Visi;
use Illuminate\Http\Request;

class VisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visis=Visi::all();
        return view('visi.index', ['visis' => $visis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('visi.create');
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
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|image',
        ]);

        $visis = $request->all();
        if ($image = $request->file('image')){
            $destinationPath = 'image/';
            $imageName = date('Ymd') . "." . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $visis['image']=$imageName;
        }
        Visi::create($visis);
        return redirect('visis')->with('message','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visi  $visi
     * @return \Illuminate\Http\Response
     */
    public function show(Visi $visi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visi  $visi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $visi = Visi::find($id);
        return view('visi.edit',['visi'=> $visi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visi  $visi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visi $visi)
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
        $visi->update($input);

        return redirect('visis')->with('message','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visi  $visi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visi $visi)
    {
        $visi->delete();
        return redirect('visis')->with('message','Data berhasil dihapus');
    }
}
