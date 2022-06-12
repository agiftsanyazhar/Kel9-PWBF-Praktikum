@extends('layouts.dashboard')

@section('container')
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header mb-3"><h3 class="text-center font-weight-light my-4"> Tambah Detail Peran - {{ $title }}</h3></div>
                            <div class="card-body">
                                <form action="/create-detail-peran" method="post">
                                    @csrf
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <select class="form-control @error('id_pengurus') is-invalid @enderror" name="id_pengurus" required>
                                                <option value="" disabled selected hidden>Nama Pengurus</option>
                                                <option value={{ $pengurus->id }}>{{ $pengurus->nama }}</option>
                                            </select>
                                            @error('id_pengurus')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <select class="form-control @error('id_peran') is-invalid @enderror" name="id_peran" required>
                                                <option value="" disabled selected hidden>Nama Peran</option>
                                                @foreach ($peran as $peran)
                                                    <option value={{ $peran->id }}>{{ $peran->peran }}</option>
                                                @endforeach
                                            </select>
                                            @error('id_peran')
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