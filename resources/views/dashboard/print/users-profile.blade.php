@extends('layouts.dashboard')

@section('container')
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Profil</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
          <li class="breadcrumb-item">User</li>
          <li class="breadcrumb-item active">Profil</li>
        </ol>
      <section class="section profile">
        <div class="row">
          <div class="col-xl-4">
            <div class="card">
              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                <div class="">
                  @if (auth()->user()->image)
                    <img src="{{ asset('photo-profile/'.auth()->user()->image) }}" alt="Profile">
                  @else
                    <img src="img/unnamed.jpg" alt="Profile">   
                  @endif
                </div>
                <h2>{{ auth()->user()->nama }}</h2>
                <h3>{{ auth()->user()->role }}</h3>
              </div>
            </div>
          </div>
          <div class="col-xl-8">
            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">
                  <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                  </li>
                </ul>
                <div class="tab-content pt-2">
                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    <h5 class="card-title">Profile Details</h5>
                    @can('santri')
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">Nama Santri</div>
                      <div class="col-lg-9 col-md-8">{{ auth()->user()->nama }}</div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                      <div class="col-lg-9 col-md-8">
                        @if (auth()->user()->Santri->gender === "M")
                            Laki-Laki
                        @else
                            Perempuan
                        @endif    
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Tempat/Tanggal Lahir</div>
                      <div class="col-lg-9 col-md-8">{{ auth()->user()->Santri->kota_lhr }}, {{ auth()->user()->Santri->tgl_lhr }}</div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Nama Orang Tua</div>
                      <div class="col-lg-9 col-md-8">{{ auth()->user()->Santri->nama_ortu }}</div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Alamat Orang Tua</div>
                      <div class="col-lg-9 col-md-8">{{ auth()->user()->Santri->alamat_ortu }}</div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">HP</div>
                      <div class="col-lg-9 col-md-8">{{ auth()->user()->Santri->hp }}</div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Email</div>
                      <div class="col-lg-9 col-md-8">{{ auth()->user()->Santri->email }}</div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Tanggal Masuk</div>
                      <div class="col-lg-9 col-md-8">{{ auth()->user()->Santri->tgl_masuk }}</div>
                    </div>
                    <script type="text/javascript">
                      window.print();
                    </script>
                    @endcan
                    @can('pengurus')
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">Nama Pengurus</div>
                      <div class="col-lg-9 col-md-8">{{ auth()->user()->nama }}</div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Email</div>
                      <div class="col-lg-9 col-md-8">{{ auth()->user()->Pengurus->email }}</div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">HP</div>
                      <div class="col-lg-9 col-md-8">{{ auth()->user()->Pengurus->hp }}</div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                      <div class="col-lg-9 col-md-8">
                        @if (auth()->user()->Pengurus->gender === "M")
                            Laki-Laki
                        @else
                            Perempuan
                        @endif    
                      </div>
                    </div>
                    <script type="text/javascript">
                      window.print();
                    </script>
                    @endcan
                    @can('admin')
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">Nama User</div>
                      <div class="col-lg-9 col-md-8">{{ auth()->user()->nama }}</div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Email</div>
                      <div class="col-lg-9 col-md-8">{{ auth()->user()->email }}</div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Role</div>
                      <div class="col-lg-9 col-md-8">{{ auth()->user()->role }}</div>
                    </div>
                      <script type="text/javascript">
                        window.print();
                      </script>
                    @endcan
                  </div>
                </div><!-- End Bordered Tabs -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <script>
      function previewImage () {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }
    </script>
  </main><!-- End #main -->
@endsection