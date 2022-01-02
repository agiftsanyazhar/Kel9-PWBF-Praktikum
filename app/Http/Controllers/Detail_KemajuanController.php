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
        return view('dashboard.show.detail-kemajuan', [
            'detail'            => Detail_Kemajuan::where('id_kemajuan', $id)->with('bab.buku')->get(),
            'santri'            => Kemajuan::find($id)->santri->nama,
            'idsantri'          => Kemajuan::find($id)->santri->id,
            'id'                => Kemajuan::find($id)->id,
            'counter'           => 1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('dashboard.create.detail-kemajuan', [
            'bab'       => Bab::all(),
            'title'     => $id,
            'santri'    => Kemajuan::find($id)->santri->nama,
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

        $request->session()->flash('successDetailKemajuan','Detail Kemajuan Berhasil Ditambah!');

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
    public function edit($id)
    {
        return view('dashboard.edit.detail-kemajuan', [
            'kemajuan'  => Detail_Kemajuan::find($id),
            'bab'       => Bab::all(),
            'title'     => $id,
        ]);
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
        DB::table('detail__kemajuans')->where('id',$request['id'])->update([
            'id_bab'         => $request['id_bab'],
            'keterangan'     => $request['keterangan'],
        ]);

        return redirect('/kemajuan-table')->with('updateDetailKemajuan','Data Detail Kemajuan Berhasil Di-Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detail_Kemajuan  $detail_Kemajuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Detail_Kemajuan::find($id)->delete();

        $request->session()->flash('deleteDetailKemajuan','Detail kemajuan Berhasil Dihapus!');

        return redirect('/kemajuan-table');
    }

    public function print($id){
        return view('dashboard.print.detail-kemajuan', [
            'detail'            => Detail_Kemajuan::where('id_kemajuan', $id)->with('bab.buku')->get(),
            'santri'            => Kemajuan::find($id)->santri->nama,
            'idsantri'          => Kemajuan::find($id)->santri->id,
            'id'                => Kemajuan::find($id)->id,
            'counter'           => 1
        ]);
    }
}
