<?php

namespace App\Http\Controllers;

use App\Models\Detail_Kemajuan;
use App\Models\Kemajuan;
use App\Models\Santri;
use App\Models\Pengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KemajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kemajuan-santri-table', [
            'santri'    => Santri::all(),
            "title"     => "Kemajuan",
            'counter'   => 1
        ]);
    }

    public function showKemajuanIndex(Santri $santri, $id)
    {
        return view('dashboard.show.kemajuan', [
            'kemajuan'  => Kemajuan::where('id_santri', $id)->orderby('tanggal', 'desc')->with('pengurus')->get(),
            'title'     => Santri::find($id)->nama,
            'idsantri'  => Santri::find($id)->id,
            'counter'   => 1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('dashboard.create.kemajuan', [
            'title'     => Santri::find($id)->nama,
            'idsantri'  => Santri::find($id)->id,
            'idsantri'  => Santri::find($id)->nama,
            'pengurus'  => Pengurus::all(),
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
            'id_santri'     => 'required',
            'id_pengurus'   => 'required',
            'tanggal'       => 'required',
            'status'        => 'required',
        ]);

        Kemajuan::create($validatedData);

        $request->session()->flash('success','Kemajuan Berhasil Ditambahkan!');

        return redirect('/kemajuan-table');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kemajuan  $kemajuan
     * @return \Illuminate\Http\Response
     */
    public function show(Kemajuan $kemajuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kemajuan  $kemajuan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.edit.kemajuan', [
            'kemajuan'   => Kemajuan::find($id),
            'santris'    => Santri::all(),
            "title"      => Santri::find($id)->nama
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kemajuan  $kemajuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kemajuan $kemajuan)
    {
        DB::table('kemajuans')->where('id',$request['id'])->update([
            'tanggal'           => $request['tanggal'],
            'status'         => $request['status'],
        ]);

        return redirect('/kemajuan-table')->with('update','Data Kemajuan Berhasil Di-Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kemajuan  $kemajuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Kemajuan::find($id)->delete();

        $request->session()->flash('delete','Kemajuan Berhasil Dihapus!');

        return redirect('/kemajuan-table');
    }
}
