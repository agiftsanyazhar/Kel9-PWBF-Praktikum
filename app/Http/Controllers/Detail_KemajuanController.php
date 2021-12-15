<?php

namespace App\Http\Controllers;

use App\Models\Detail_Kemajuan;
use App\Models\Kemajuan;
use App\Models\Bab;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Detail_KemajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('dashboard.show.detail-kemajuan-table', [
            'detail'            => Detail_Kemajuan::where('id_kemajuan', $id)->with('bab.buku')->get(),
            'santri'            => Kemajuan::find($id)->santri->nama,
            'santriid'          => Kemajuan::find($id)->santri->id,
            'id'                => Kemajuan::find($id)->id,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('dashboard.show.detail-kemajuan', [
            'buku'  => Buku::all,
            'title' => $id,
        ]);
    }

    public function getBab($id)
    {
        $bab = DB::table('babs')->where('id_buku',$id)->pluck('id','judul');

        return response()->json($bab);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData   = $request->validate([
            'id_kemajuan'   => 'required',
            'id_bab'        => 'required',
            'keterangan'    => 'required',
        ]);

        Detail_Kemajuan::create($validatedData);

        $request->session()->flash('success','Data Kemajuan Berhasil Ditambahkan!');

        return redirect('/kemajuan-table');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detail_Kemajuan  $detail_Kemajuan
     * @return \Illuminate\Http\Response
     */
    public function show(Detail_Kemajuan $detail_Kemajuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detail_Kemajuan  $detail_Kemajuan
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail_Kemajuan $detail_Kemajuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detail_Kemajuan  $detail_Kemajuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail_Kemajuan $detail_Kemajuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detail_Kemajuan  $detail_Kemajuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail_Kemajuan $detail_Kemajuan)
    {
        //
    }
}
