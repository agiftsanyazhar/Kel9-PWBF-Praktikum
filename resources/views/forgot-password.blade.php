@extends('layouts.login-register')

@section('container')
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Password Recovery</h3></div>
                            <div class="card-body">
                                <div class="small mb-3 text-muted">Masukkan alamat email Anda dan kami akan mengirimkan tautan untuk mereset kata sandi Anda.</div>
                                <form>
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <input class="form-control" id="inputEmail" type="email" placeholder="Email" required/>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small" href="login">Kembali ke login</a>
                                        <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Reset Password</button></div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="register">Butuh Akun? Daftar!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
