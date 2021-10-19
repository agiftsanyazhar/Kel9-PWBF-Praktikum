@extends('layouts.login-register')

@section('container')
<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">{{ $title }}</h3></div>
                        <div class="card-body">
                            
                            {{-- jangan d hapus komen ini boiii --}}
                            <form action="forms/login.php" method="post" role="form">
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <input class="form-control" id="inputEmail" type="email" placeholder="Email" required/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <input class="form-control" id="inputPassword" type="password" minlength="8" placeholder="Password" required/>
                                    </div>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                    <label class="form-check-label" for="inputRememberPassword">Ingat Password</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a class="small" href="forgot-password">Lupa Password?</a>
                                    <a class="btn btn-primary" href="dashboard-index"><button class="submit" type="submit">Login</button></a>
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