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
                            <form action="forms/register.php" method="post" role="form">
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control" id="inputName" type="text" placeholder="Nama Santri" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control">
                                            <option value="" disabled selected hidden>Jenis Kelamin</option>
                                            <option value="m">Laki-Laki</option>
                                            <option value="f">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Tempat Lahir" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Tanggal Lahir" onfocus="(this.type='date')" required/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control" id="inputName" type="text" placeholder="Nama Orang Tua" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Alamat Orang Tua" required/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control" id="inputEmail" type="email" placeholder="Email" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input  class="form-control" type="number" minlength="12" maxlength="13" name="txtEmpPhone" placeholder="Telepon" required/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control" id="inputPassword" type="password" minlength="8" placeholder="Password" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" id="inputPassword" type="password" minlength="8" placeholder="Konfirmasi Password" required/>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid"><a class="btn btn-primary btn-block" href="login"><button class="submit" type="submit">Daftar</button></a></div>
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