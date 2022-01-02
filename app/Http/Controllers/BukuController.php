<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Buku $buku)
    {
        return view('dashboard.buku-table', [
            'bukus' => Buku::all(),
            "title" => "Buku",
            'counter' => 1,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create.buku', [
            "title" => "Buku"
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
            'buku'          => 'required|max:50',
            'keterangan'    => 'required',
        ]);

        Buku::create($validatedData);

        $request->session()->flash('successBuku','Buku Berhasil Ditambah!');

        return redirect('/buku-table');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.edit.buku', [
            'buku'  => Buku::find($id),
            "title" => Buku::find($id)->buku
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku)
    {
        DB::table('bukus')->where('id',$request->id)->update([
            'buku'          => $request->buku,
            'keterangan'    => $request->keterangan
        ]);

        return redirect('/buku-table')->with('updateBuku','Data Buku Berhasil Di-Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Buku::find($id)->delete();

        return redirect('/buku-table')->with('deleteBuku','Buku Berhasil Dihapus!');
    }

    public function print(){
        return view('dashboard.print.buku-table', [
            'bukus' => Buku::all(),
            "title" => "Buku",
            'counter' => 1,
        ]);
    }
}