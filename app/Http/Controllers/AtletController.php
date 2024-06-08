<?php

namespace App\Http\Controllers;

use App\Models\Atlet;
use Illuminate\Http\Request;

class AtletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $atlets = Atlet::where('nama', 'LIKE', '%' . $request->search . '%')->orWhere('club', 'LIKE', '%' . $request->search . '%')->paginate(10);
        } else {
            $atlets = Atlet::paginate(10);
        }

        return view('atlet.index', compact('atlets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('atlet.create');
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
            'nama' => 'required',
            'posisi' => 'required',
            'club' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Atlet::create($input);

        return redirect('/admin/atlet')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Atlet  $atlet
     * @return \Illuminate\Http\Response
     */
    public function show(Atlet $atlet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Atlet  $atlet
     * @return \Illuminate\Http\Response
     */
    public function edit(Atlet $atlet)
    {
        return view('atlet.edit', compact('atlet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Atlet  $atlet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atlet $atlet)
    {
        $request->validate([
            'image' => 'image',
            'nama' => 'required',
            'posisi' => 'required',
            'club' => 'required'
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

        $atlet->update($input);

        return redirect('/admin/atlet')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Atlet  $atlet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atlet $atlet)
    {
        $atlet->delete();

        return redirect('/admin/atlet')->with('message', 'Data berhasil dihapus');
    }
}
