<?php

namespace App\Http\Controllers;

use App\Models\Detail_Peran;
use App\Models\Pengurus;
use App\Models\Peran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Detail_PeranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('dashboard.show.detail-peran', [
            'peran'         => Detail_Peran::where('id_pengurus', $id)->with('peran')->get(),
            "title"         => Pengurus::find($id)->nama,
            'idpengurus'    => Pengurus::find($id)->id,
            'counter'       => 1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('dashboard.create.detail-peran', [
            'pengurus' => Pengurus::find($id),
            "title"    => Pengurus::find($id)->nama,
            'peran'    => Peran::all()
        ]);
    }

    public function getDetailPeran($id)
    {
        $detailperan  = DB::table('detail__perans')->where("id_peran",$id)->pluck('id','peran');
        return response()->json($detailperan);
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
            'id_pengurus'   => 'required',
            'id_peran'      => 'required',
        ]);

        Detail_Peran::create($validatedData);

        $request->session()->flash('successDetailPeran','Data Peran Berhasil Ditambahkan!');

        return redirect('/pengurus-table');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detail_Peran  $detail_Peran
     * @return \Illuminate\Http\Response
     */
    public function show(Detail_Peran $detail_Peran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detail_Peran  $detail_Peran
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail_Peran $detail_Peran, $id)
    {
        return view('dashboard.edit.detail-peran', [
            // 'bab'   => Bab::find($id),
            // 'bukus' => Buku::all(),
            // "title" => Bab::find($id)->bab

            'pengurus' => Pengurus::find($id),
            "title"    => Pengurus::find($id),
            'peran'    => Peran::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detail_Peran  $detail_Peran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail_Peran $detail_Peran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detail_Peran  $detail_Peran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail_Peran $detail_Peran)
    {
        //
    }
}
