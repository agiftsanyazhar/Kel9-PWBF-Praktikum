@extends('layouts.dashboard')

@section('container')
<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Tambah {{ $title }}</h3></div>
                        <div class="card-body">
                            <form action="/create-bab" method="post">
                                @csrf
                                <div class="row mb-2">
                                    <div class="col-md-6">
<<<<<<< HEAD
                                        <input class="form-control @error('bab') is-invalid @enderror" id="inputName" name="bab" type="number" maxlength="50" placeholder="Bab" value="{{ old('bab') }}" required/>
=======
                                        <input class="form-control @error('bab') is-invalid @enderror" id="inputName" name="bab" type="text" maxlength="50" placeholder="Bab" value="{{ old('bab') }}" required/>
>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1
                                        @error('bab')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control @error('judul') is-invalid @enderror" id="inputName" name="judul" type="text" maxlength="50" placeholder="Judul" value="{{ old('judul') }}" required/>
                                        @error('judul')
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
<<<<<<< HEAD
=======
                                <div class="col-md-2">
                                    <div class="col-md-12 row-lg-10">
                                        <select class="form-control @error('id_buku') is-invalid @enderror" name="id_buku" required>
                                            <option value="" disabled selected hidden>Judul Buku</option>
                                            @foreach ($buku as $bukus)
                                                <option value={{ $bukus->id }}>{{ $bukus->buku }}</option>
                                            @endforeach
                                        </select>
                                        @error('id_buku')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1
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