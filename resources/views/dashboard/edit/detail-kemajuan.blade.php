@extends('layouts.dashboard')

@section('container')
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Detail Kemajuan</h3></div>
                            <div class="card-body">
                                <form action="/edit-detail-kemajuan-{{ $title }}" method="post">
                                    @method('put')
                                    @csrf
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <input class="form-control" id="inputName" name="id_kemajuan" type="text" maxlength="50" placeholder="Peran" value="{{ $title }}" required hidden/>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <select class="form-control @error('id_bab') is-invalid @enderror" name="id_bab" required>
                                                @foreach ($bab as $babs)
                                                    @if (old('id_bab', $kemajuan->id_bab) == $babs->id)
                                                        <option value={{ $babs->id }} selected>{{ $babs->id }} - {{ $babs->bab }}</option>
                                                    @else
                                                        <option value={{ $babs->id }}>{{ $babs->id }} - {{ $babs->bab }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @error('id_bab')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12 row-lg-10">
                                            <textarea rows="5" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" placeholder="Keterangan" required>{{ old('keterangan', $kemajuan->keterangan) }}</textarea>
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