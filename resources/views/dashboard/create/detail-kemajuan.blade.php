@extends('layouts.dashboard')

@section('container')
<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Tambah Detail Kemajuan {{ $title }}</h3></div>
                        <div class="card-body">
                            <form action="/create-detail-kemajuan-{{ $title }}" method="post">
                                @csrf
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control" id="inputName" name="id_kemajuan" type="text" maxlength="50" placeholder="Peran" value="{{ $title }}" required hidden/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <label for="bab">Bab</label>
                                        <select class="form-control" name="bab" id="bab" required>
                                            <option selected>---Pilih Bab---</option>
                                            @foreach ($bab as $babs)
                                                <option  value="{{$babs->id}}">{{$babs->bab}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12 row-lg-10">
                                        <label for="keterangan">Keterangan</label>
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