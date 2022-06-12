@extends('layouts.dashboard')

@section('container')
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header mb-3"><h3 class="text-center font-weight-light my-4">Tambah Kemajuan - {{ $title }}</h3></div>
                            <div class="card-body">
                                <form action="/create-kemajuan" method="post">
                                    @csrf
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <select class="form-control @error('id_santri') is-invalid @enderror" name="id_santri" required>
                                                <option value={{ $idsantri }}>{{ $title }}</option>
                                            </select>
                                            @error('id_santri')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                                <select class="form-control @error('id_pengurus') is-invalid @enderror" name="id_pengurus" required>
                                                    <option value={{ auth()->user()->id_pengurus }}>{{ auth()->user()->nama }}</option>
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
                                            <input class="form-control @error('tanggal') is-invalid @enderror" type="text" name="tanggal" placeholder="Tanggal" onfocus="(this.type='date')" required/>
                                            @error('tanggal')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <select class="form-control @error('status') is-invalid @enderror" name="status" required>
                                                <option value="" disabled selected hidden>Status</option>
                                                <option value="N">Naik</option>
                                                <option value="T">Tetap</option>
                                                <option value="M">Mundur</option>
                                            </select>
                                            @error('status')
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