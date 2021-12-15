<?php

namespace App\Http\Controllers;

use App\Models\Detail_Peran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Detail_PeranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Detail_Peran $detail_peran)
    {
        return view('dashboard.detail-peran-table', [
            'detail_perans' => Detail_Peran::all(),
            "title"         => "Detail Peran"
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
        //
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
    public function edit(Detail_Peran $detail_Peran)
    {
        //
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
