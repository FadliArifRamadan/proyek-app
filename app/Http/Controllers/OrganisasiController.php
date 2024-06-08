<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use Illuminate\Http\Request;

class OrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organisasis = Organisasi::all();

        return view('organisasi.index', compact('organisasis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organisasi.create');
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
            'image' => 'required|image',
            'title' => 'required',
            'job' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Organisasi::create($input);

        return redirect('/admin/organisasi')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organisasi  $organisasi
     * @return \Illuminate\Http\Response
     */
    public function show(Organisasi $organisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organisasi  $organisasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Organisasi $organisasi)
    {
        return view('organisasi.edit', compact('organisasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organisasi  $organisasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organisasi $organisasi)
    {
        $request->validate([
            'image' => 'image',
            'title' => 'required',
            'job' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        $organisasi->update($input);

        return redirect('/admin/organisasi')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organisasi  $organisasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organisasi $organisasi)
    {
        $organisasi->delete();

        return redirect('/admin/organisasi')->with('message', 'Data berhasil dihapus');
    }
}
