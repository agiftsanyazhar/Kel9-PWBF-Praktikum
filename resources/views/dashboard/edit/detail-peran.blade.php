@extends('layouts.dashboard')

@section('container')
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header mb-3"><h3 class="text-center font-weight-light my-4"> Edit Detail Peran</h3></div>
                            <div class="card-body">
                                <form action="/update-detail-peran-{{ $title }}" method="post">
                                    @method('put')
                                    @csrf
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <select class="form-control @error('id_peran') is-invalid @enderror" name="id_peran" required>
                                                <option value="" disabled selected hidden>Nama Peran</option>
                                                @foreach ($peran as $perans)
                                                    <option value={{ $perans->id }}>{{ $perans->peran }}</option>
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