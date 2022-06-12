@extends('layouts.dashboard')

@section('container')
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header mb-3"><h3 class="text-center font-weight-light my-4">Edit Bab - {{ $title }}</h3></div>
                            <div class="card-body">
                                <form action="/update-bab-{{ $bab->id }}" method="post">
                                    @method('put')
                                    @csrf
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <input class="form-control @error('bab') is-invalid @enderror" id="inputName" name="bab" type="text" maxlength="50" placeholder="Bab" autofokus value="{{ old('bab', $bab->bab) }}" required/>
                                            @error('bab')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <input class="form-control @error('judul') is-invalid @enderror" id="inputName" name="judul" type="text" maxlength="50" placeholder="Judul" autofokus value="{{ old('judul', $bab->judul) }}" required/>
                                            @error('judul')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <select class="form-control @error('id_buku') is-invalid @enderror" name="id_buku" required>
                                                <option value="" disabled selected hidden>Judul Buku</option>
                                                @foreach ($bukus as $buku)
                                                    @if (old('id_buku', $bab->id_buku) == $buku->id)
                                                        <option value={{ $buku->id }} selected>{{ $buku->buku }}</option>
                                                    @else
                                                        <option value={{ $buku->id }} >{{ $buku->buku }}</option>
                                                    @endif    
                                                @endforeach
                                            </select>
                                            @error('id_buku')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12 row-lg-10">
                                            <textarea rows="5" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" placeholder="Keterangan" required>{{ old('keterangan', $bab->keterangan) }}</textarea>
                                            @error('Keterangan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
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