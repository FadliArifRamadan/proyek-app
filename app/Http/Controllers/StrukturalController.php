<?php

namespace App\Http\Controllers;

use App\Models\Struktural;
use Illuminate\Http\Request;

class StrukturalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $strukturals = Struktural::where('jabatan', 'LIKE', '%' . $request->search . '%')->orWhere('nama', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $strukturals = Struktural::paginate(5);
        }

        return view('struktural.index', compact('strukturals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('struktural.create');
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
            'jabatan' => 'required',
            'nama' => 'required',
        ]);

        $input = $request->all();

        Struktural::create($input);

        return redirect('/admin/struktural')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Struktural  $struktural
     * @return \Illuminate\Http\Response
     */
    public function show(Struktural $struktural)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Struktural  $struktural
     * @return \Illuminate\Http\Response
     */
    public function edit(Struktural $struktural)
    {
        return view('struktural.edit', compact('struktural'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Struktural  $struktural
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Struktural $struktural)
    {
        $request->validate([
            'jabatan' => 'required',
            'nama' => 'required'
        ]);

        $input = $request->all();

        $struktural->update($input);

        return redirect('/admin/struktural')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Struktural  $struktural
     * @return \Illuminate\Http\Response
     */
    public function destroy(Struktural $struktural)
    {
        $struktural->delete();

        return redirect('/admin/struktural')->with('message', 'Data berhasil dihapus');
    }
}
