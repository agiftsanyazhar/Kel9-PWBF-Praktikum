<?php

namespace App\Http\Controllers;

use App\Models\Bab;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.bab-table', [
            'bab'   => Bab::all(),
            "title" => "Bab"
        ]);
    }

    public function showCreate()
    {
        return view('dashboard.create.bab', [
            'buku' => Buku::all(),
            "title" => "Bab"
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
            'bab'           => 'required|max:50',
            'judul'         => 'required|max:100',
            'keterangan'    => 'required',
            'id_buku'       => 'required',
        ]);

        Bab::create($validatedData);

        $request->session()->flash('success','Bab Berhasil Ditambahkan');

        return redirect('/bab-table');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bab  $bab
     * @return \Illuminate\Http\Response
     */
    public function show(Bab $bab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bab  $bab
     * @return \Illuminate\Http\Response
     */
    public function edit(Bab $bab)
    {
        return view('dashboard.edit.bab', [
            'bab'   => $bab,
            'bukus' => Buku::all(),
            "title" => "Bab"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bab  $bab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bab $bab)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bab  $bab
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Bab::find($id)->delete();

        $request->session()->flash('delete','Data Berhasil Di Hapus');

        return redirect('/bab-table');
    }
}
