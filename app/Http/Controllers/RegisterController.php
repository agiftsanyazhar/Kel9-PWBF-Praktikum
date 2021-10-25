<?php

namespace App\Http\Controllers;

use App\Models\Santri;
<<<<<<< HEAD
=======
use App\Models\User;
>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
<<<<<<< HEAD
            'nama_santri'   => 'required|min:3|max:50',
=======
            'nama'          => 'required|min:3|max:50',
>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1
            'gender'        => 'required',
            'tgl_lhr'       => 'required',
            'kota_lhr'      => 'required|max:40',
            'nama_ortu'     => 'required|min:3|max:50',
            'alamat_ortu'   => 'required|max:100',
            'hp'            => 'required',
<<<<<<< HEAD
            'email'         => 'required|email:dns|unique:santri',
=======
            'email'         => 'required|email:dns|unique:santris',
>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1
            'password'      => 'required||min:8|max:32',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        Santri::create($validatedData);

<<<<<<< HEAD
=======
        User::create($validatedData);

>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1
        $request->session()->flash('success','Registrasi Berhasil! Silahkan Login');

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
