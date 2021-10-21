@extends('layouts.login-register')

@section('container')
<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">{{ $title }}</h3></div>
                        <div class="card-body">
                            <form action="/register" method="post" role="form">
                                @csrf
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control @error('nama_santri') is-invalid @enderror" id="inputName" name="nama_santri" type="text" minlength="3" maxlength="50" placeholder="Nama Santri" value="{{ old('nama_santri') }}" required/>
                                        @error('nama_santri')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control @error('gender') is-invalid @enderror" name="gender" required>
                                            <option value="" disabled selected hidden>Jenis Kelamin</option>
                                            <option value="m">Laki-Laki</option>
                                            <option value="f">Perempuan</option>
                                        </select>
                                        @error('gender')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control @error('kota_lhr') is-invalid @enderror" type="text" maxlength="40" name="kota_lhr" placeholder="Kota Lahir" value="{{ old('kota_lhr') }}" required/>
                                        @error('kota_lhr')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control @error('tgl_lhr') is-invalid @enderror" type="text" name="tgl_lhr" placeholder="Tanggal Lahir" onfocus="(this.type='date')" required/>
                                        @error('tgl_lhr')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control @error('nama_ortu') is-invalid @enderror" id="inputName" type="text" minlength="3" maxlength="50" name="nama_ortu" placeholder="Nama Orang Tua" value="{{ old('nama_ortu') }}" required/>
                                        @error('nama_ortu')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control @error('alamat_ortu') is-invalid @enderror" type="text" maxlength="100" name="alamat_ortu" placeholder="Alamat Orang Tua" value="{{ old('alamat_ortu') }}" required/>
                                        @error('alamat_ortu')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control @error('email') is-invalid @enderror" id="inputEmail" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required/>
                                        @error('email')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input  class="form-control @error('hp') is-invalid @enderror" type="number" name="hp" placeholder="Telepon" value="{{ old('hp') }}" required/>
                                        @error('hp')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <input class="form-control @error('password') is-invalid @enderror" id="inputPassword" type="password" minlength="8" maxlength="32" name="password" placeholder="Password" required/>
                                        @error('password')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Daftar</button></div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small"><a href="login">Punya Akun? Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection