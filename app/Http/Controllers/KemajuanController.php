<?php

namespace App\Http\Controllers;

use App\Models\Kemajuan;
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
        $kemajuan = DB::table('kemajuan')->get();

        return view('dashboard.kemajuan-table', ['kemajuan' => $kemajuan]);
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
    public function edit(Kemajuan $kemajuan)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kemajuan  $kemajuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kemajuan $kemajuan)
    {
        //
    }
}
