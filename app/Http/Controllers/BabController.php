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
<<<<<<< HEAD
        $bab = DB::table('bab')->get();

        return view('dashboard.bab-table', [
            'bab'   => $bab,
=======
        return view('dashboard.bab-table', [
            'bab'   => Bab::all(),
>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1
            "title" => "Bab"
        ]);
    }

    public function showCreate()
    {
        return view('dashboard.create.bab', [
<<<<<<< HEAD
=======
            'buku' => Buku::all(),
>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1
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
<<<<<<< HEAD
            // 'id_buku'       => 'required',
=======
            'id_buku'       => 'required',
>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1
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
