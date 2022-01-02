<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Santri $santri)
    {
        return view('dashboard.santri-table', [
            'santris'   => Santri::all(),
            "title"     => "Santri",
            'counter'   => 1
        ]);
    }

    public function showProfileIndex(Santri $santri)
    {
        return view('dashboard.users-profile');
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
            'image'         => 'required|image|mimes:jpeg,png,jpg',
        ]);

        if($request->file('image')){
            $validatedData['image']  = $request->file('image')->store('santri-images');
        }

        // DB::table('santris')->where('id',$request->id)->update([
        //     'image'         => $request->image.'required|image|mimes:jpeg,png,jpg',
        // ]);

        Santri::create($validatedData);

        $request->session()->flash('success','Profil Berhasil Di-Update!');

        return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function show(Santri $santri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function edit(Santri $santri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Santri $santri)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    public function print(){
        return view('dashboard.print.santri-table', [
            'santris'   => Santri::all(),
            "title"     => "Santri",
            'counter'   => 1
        ]);
    }
}
