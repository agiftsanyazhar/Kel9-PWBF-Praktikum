<?php

namespace App\Http\Controllers;

use App\Models\Peran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Peran $peran)
    {
        return view('dashboard.peran-table', [
            'peran' => Peran::all(),
            "title" => "Peran"
        ]);
    }

    public function showCreate()
    {
        return view('dashboard.create.peran', [
            "title" => "Peran"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'peran'     => 'required|max:20|unique:peran',
        ]);

        Peran::create($validatedData);

        $request->session()->flash('success','Peran Berhasil Ditambahkan');

        return redirect('/peran-table');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peran  $peran
     * @return \Illuminate\Http\Response
     */
    public function show(Peran $peran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peran  $peran
     * @return \Illuminate\Http\Response
     */
    public function edit(Peran $peran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peran  $peran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peran $peran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peran  $peran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Peran::find($id)->delete();

        return redirect('/peran-table')->with('delete','Data Berhasil di Hapus');
    }
}
