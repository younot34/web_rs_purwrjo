<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sejarahs = Sejarah::all();
        return view('sejarah.index', ['sejarahs' => $sejarahs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sejarah.create');
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

        $input = $request->all();
        if ($image = $request->file('image')){
            $destinationPath = 'image/';
            $imageName = date('Ymd') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image']=$imageName;
        }
        Sejarah::create($input);

        return redirect('sejarahs')->with('message','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function show(Sejarah $sejarah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sejarah = Sejarah::find($id);

        return view('sejarah.edit', ['sejarahs' => $sejarah]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sejarah $sejarah)
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
        $sejarah->update($input);

        return redirect('sejarahs')->with('message','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sejarah $sejarah)
    {
        $sejarah->delete();
        return redirect('sejarahs')->with('message','Data berhasil dihapus');
    }
}
