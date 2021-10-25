<?php

namespace App\Http\Controllers;

use App\Models\Detail_Kemajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Detail_KemajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Detail_Kemajuan $detail_kemajuan)
    {
        return view('dashboard.detail-kemajuan-table', [
            'detail_kemajuan' => Detail_Kemajuan::all(),
            "title" => "Detail Kemajuan"
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
