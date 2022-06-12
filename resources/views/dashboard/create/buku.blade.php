@extends('layouts.dashboard')

@section('container')
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header mb-3"><h3 class="text-center font-weight-light my-4">Tambah {{ $title }}</h3></div>
                            <div class="card-body">
                                <form action="/create-buku" method="post">
                                    @csrf
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <input class="form-control @error('buku') is-invalid @enderror" id="inputName" name="buku" type="text" maxlength="50" placeholder="Buku" value="{{ old('buku') }}" required/>
                                            @error('buku')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12 row-lg-10">
                                            <textarea rows="5" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" placeholder="Keterangan" required></textarea>
                                            @error('Keterangan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Tambah</button></div>
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