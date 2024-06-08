<?php

namespace App\Http\Controllers;

use App\Models\Peraturan;
use Illuminate\Http\Request;

class PeraturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peraturans = Peraturan::all();

        return view('peraturan.index', compact('peraturans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peraturan.create');
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
            'list' => 'required'
        ]);

        $input = $request->all();

        Peraturan::create($input);

        return redirect('/admin/peraturan')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peraturan  $peraturan
     * @return \Illuminate\Http\Response
     */
    public function show(Peraturan $peraturan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peraturan  $peraturan
     * @return \Illuminate\Http\Response
     */
    public function edit(Peraturan $peraturan)
    {
        return view('peraturan.edit', compact('peraturan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peraturan  $peraturan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peraturan $peraturan)
    {
        $request->validate([
            'list' => 'required',
        ]);

        $input = $request->all();

        $peraturan->update($input);

        return redirect('/admin/peraturan')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peraturan  $peraturan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peraturan $peraturan)
    {
        $peraturan->delete();

        return redirect('/admin/peraturan')->with('message', 'Data berhasil dihapus');
    }
}
