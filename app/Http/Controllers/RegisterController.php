<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register', [
            "title" => "Daftar"
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
            'nama'          => 'required|min:3|max:50',
            'gender'        => 'required',
            'tgl_lhr'       => 'required',
            'kota_lhr'      => 'required|max:40',
            'nama_ortu'     => 'required|min:3|max:50',
            'alamat_ortu'   => 'required|max:100',
            'hp'            => 'required|unique:santris|unique:penguruses',
            'email'         => 'required|email:dns|unique:santris|unique:penguruses',
            'password'      => 'required||min:8|max:32',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        Santri::create($validatedData);
        
        $santriid = Santri::latest()->first()->id;

        DB::table('users')->insert([
            'id_santri'     => $santriid,
            'nama'          => $validatedData['nama'],
            'email'         => $validatedData['email'],
            'password'      => $validatedData['password'],
            'role'          => 'Santri',
        ]);

        $request->session()->flash('success','Registrasi Berhasil! Silakan Login');

        return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'image|file|max:5000'
        ]);

        $file = $request->file('image');
        $target_dir = "photo-profile/"; //lokasi
        $target_file = $target_dir . basename($_FILES["image"]["name"]); //tempat lokasi
        
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        //function pemindahan file
        $file->move($target_dir,$file->getClientOriginalName());

        DB::table('users')->where('id',$id)->update([
            'image'          => basename($_FILES["image"]["name"]),
        ]);

        $request->session()->flash('update','Profil Berhasil Di-Update!');

        return redirect('/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Santri::find($id)->delete();
        User::where('id_santri', $id)->delete();

        return redirect('/santri-table')->with('delete','Santri Berhasil Dihapus!');
    }

    public function print($id){
        return view('dashboard.print.users-profile', [
            'id'    => User::where('id', $id)->get(),
        ]);
    }
}
