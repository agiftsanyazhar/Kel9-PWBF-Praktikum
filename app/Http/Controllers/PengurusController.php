<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Foundation\Bus\PendingChain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Pengurus $pengurus)
    {
<<<<<<< HEAD
        $pengurus = DB::table('pengurus')->get();

        return view('dashboard.pengurus-table', [
            'pengurus' => $pengurus,
=======
        return view('dashboard.pengurus-table', [
            'pengurus' => Pengurus::all(),
>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1
            "title" => "Pengurus"
        ]);
    }

    public function showCreate()
    {
        return view('dashboard.create.pengurus', [
            "title" => "Pengurus"
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
            'nama_pengurus' => 'required|min:3|max:50',
            'gender'        => 'required',
            'hp'            => 'required',
            'email'         => 'required|email:dns|unique:pengurus|unique:santri',
            'password'      => 'required||min:8|max:32',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        Pengurus::create($validatedData);

        $request->session()->flash('success','Registrasi Berhasil!');

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
    public function edit(Pengurus $pengurus)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengurus $pengurus)
    {
        //
    }
}
