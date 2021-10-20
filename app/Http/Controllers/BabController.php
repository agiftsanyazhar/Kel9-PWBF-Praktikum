<?php

namespace App\Http\Controllers;

use App\Models\Bab;
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
        $bab = DB::table('bab')->get();

        return view('dashboard.bab-table', ['bab' => $bab]);
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
        //
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
        //
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
    public function destroy(Bab $bab)
    {
        //
    }
}
