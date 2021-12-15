<?php

namespace App\Http\Controllers;

use App\Models\Detail_Peran;
use App\Models\Pengurus;
use Illuminate\Foundation\Bus\PendingChain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Pengurus $pengurus)
    {
        return view('dashboard.pengurus-table', [
            'pengurus'  => Pengurus::all(),
            "title"     => "Pengurus"
        ]);
    }

    public function showPeranIndex($id)
    {
        return view('dashboard.show.peran', [
            'peran'     => Detail_Peran::where('id_pengurus', $id)->with('peran')->get(),
            "title"     => Pengurus::find($id)->nama
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create.pengurus', [
            "title" => "Pengurus"
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
            'nama'          => 'required|min:3|max:50',
            'gender'        => 'required',
            'hp'            => 'required',
            'email'         => 'required|email:dns|unique:penguruses|unique:santris',
            'password'      => 'required||min:8|max:32',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        Pengurus::create($validatedData);

        $pengurusid = Pengurus::latest()->first()->id;

        DB::table('users')->insert([
            'id_pengurus'   => $pengurusid,
            'nama'          => $validatedData['nama'],
            'email'         => $validatedData['email'],
            'password'      => $validatedData['password'],
            'role'          => 'Pengurus',
        ]);

        $request->session()->flash('success','Data Pengurus Berhasil Ditambahkan!');

        return redirect('/pengurus-table');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function show(Pengurus $pengurus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.edit.pengurus', [
            'pengurus'  => Pengurus::find($id),
            "title"     => Pengurus::find($id)->pengurus
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengurus $pengurus)
    {
        DB::table('penguruses')->where('id',$request->id)->update([
            'hp'            => $request->hp,
            'email'         => $request->email,
            'password'      => Hash::make($request->newPassword)
        ]);

        return redirect('/pengurus-table')->with('update','Data Pengurus Berhasil Di-Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengurus::find($id)->delete();

        return redirect('/pengurus-table')->with('delete','Pengurus Berhasil Dihapus!');
    }
}
