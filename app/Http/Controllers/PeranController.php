<?php

namespace App\Http\Controllers;

use App\Models\Detail_Peran;
use App\Models\Pengurus;
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
            "title" => "Peran",
            'counter'   => 1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create.peran', [
            "title" => "Peran"
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
            'peran'     => 'required|max:20|unique:perans',
        ]);

        Peran::create($validatedData);

        $request->session()->flash('success','Peran Berhasil Ditambah!');

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
    public function edit($id)
    {
        return view('dashboard.edit.peran', [
            'peran'     => Peran::find($id),
            "title"     => Peran::find($id)->peran
        ]);
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
        DB::table('perans')->where('id',$request->id)->update([
            'peran'     => $request->peran,
            'aktif'     => $request->aktif,
        ]);

        return redirect('/peran-table')->with('update','Data Peran Berhasil Di-Update!');
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

        return redirect('/peran-table')->with('delete','Peran Berhasil Dihapus!');
    }

    public function print(){
        return view('dashboard.print.peran-table', [
            'peran' => Peran::all(),
            "title" => "Peran",
            'counter'   => 1
        ]);
    }
}
