@extends('layouts.dashboard')

@section('container')
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header mb-3"><h3 class="text-center font-weight-light my-4"> Edit Pengurus - {{ $title }}</h3></div>
                            <div class="card-body">
                                <form action="/update-pengurus-{{ $pengurus->id }}" method="post">
                                    @method('put')
                                    @csrf
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <input class="form-control @error('email') is-invalid @enderror" id="inputEmail" type="email" name="email" placeholder="Email" value="{{ old('email', $pengurus->email) }}" required/>
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <input  class="form-control @error('hp') is-invalid @enderror" type="number" name="hp" placeholder="Telepon" value="{{ old('hp', $pengurus->hp) }}" required/>
                                            @error('hp')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <input class="form-control" id="inputPassword" type="password" minlength="8" maxlength="32" name="password" placeholder="Password" required/>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Perbarui</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection