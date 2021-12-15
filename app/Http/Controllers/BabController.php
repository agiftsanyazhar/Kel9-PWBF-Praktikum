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
    public function index(Buku $buku)
    {
        return view('dashboard.show.bab', [
            'bab'   => Bab::where('id_buku', $buku->id)->with('buku')->get(),
            'buku'  => $buku,
            "title" => "Buku",
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('dashboard.create.bab', [
            'buku'  => Buku::find($id),
            "title" => "Bab",
        ]);
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
            'id_buku'       => 'required',
            'keterangan'    => 'required',
        ]);

        Bab::create($validatedData);

        $request->session()->flash('successBab','Bab Berhasil Ditambahkan!');

        return redirect('/buku-table');
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
    public function edit($id)
    {
        return view('dashboard.edit.bab', [
            'bab'   => Bab::find($id),
            'bukus' => Buku::all(),
            "title" => Bab::find($id)->bab
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bab  $bab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('babs')->where('id',$request['id'])->update([
            'bab'           => $request['bab'],
            'judul'         => $request['judul'],
            'id_buku'       => $request['id_buku'],
            'keterangan'    => $request['keterangan'],
        ]);

        return redirect('/buku-table')->with('updateBab','Data Bab Berhasil Di-Update!');
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

        $request->session()->flash('deleteBab','Bab Berhasil Dihapus!');

        return redirect('/buku-table');
    }
}