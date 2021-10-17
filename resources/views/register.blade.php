@extends('layouts.login-register')

@section('container')
<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Register</h3></div>
                        <div class="card-body">
                            <form action="forms/register.php" method="post" role="form">
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control" id="inputName" type="text" placeholder="Name of Santri" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control">
                                            <option value="" disabled selected hidden>Gender</option>
                                            <option value="m">Male</option>
                                            <option value="f">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Place of Birth" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Date of Birth" onfocus="(this.type='date')" required/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control" id="inputName" type="text" placeholder="Name of Ortu" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Address of Ortu" required/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control" id="inputEmail" type="email" placeholder="Email" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input  class="form-control" type="number" minlength="12" maxlength="13" name="txtEmpPhone" placeholder="Phone" required/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control" id="inputPassword" type="password" minlength="8" placeholder="Password" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" id="inputPassword" type="password" minlength="8" placeholder="Confirm Password" required/>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid"><a class="btn btn-primary btn-block" href="login"><button class="submit" type="submit">Register</button></a></div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small"><a href="login">Have an account? Go to login</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection