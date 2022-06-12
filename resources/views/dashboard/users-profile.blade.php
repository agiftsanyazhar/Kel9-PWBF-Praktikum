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
      @if (session()->has('update'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('update') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
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
                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Photo Profile</button>
                  </li>
                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
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
                    <div class="text-center">
                      <a href="{{ url('/download-user-') }}{{ auth()->user()->nama }}" target="_blank"><button type="submit" class="btn btn-primary"><i class="bi bi-download"></i>&nbsp;&nbsp;Download</button></a>
                    </div>
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
                    <div class="text-center">
                      <a href="{{ url('/download-user-') }}{{ auth()->user()->nama }}" target="_blank"><button type="submit" class="btn btn-primary"><i class="bi bi-download"></i>&nbsp;&nbsp;Download</button></a>
                    </div>
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
                    <div class="text-center">
                      <a href="{{ url('/download-user-') }}{{ auth()->user()->nama }}" target="_blank"><button type="submit" class="btn btn-primary"><i class="bi bi-download"></i>&nbsp;&nbsp;Download</button></a>
                    </div>
                    @endcan
                  </div>
                  <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                    <!-- Profile Edit Form -->
                    <form action="/upload-photo-profil-{{ auth()->user()->id }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="oldImage" id="oldImage" value="{{ auth()->user()->image }}">
                      <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto Profil</label>
                        <div class="col-md-8 col-lg-9">
                          <div class="pt-2">
                            <div class="mb-3">
                              <label for="image" class="form-label">Upload Foto</label><br/>
                              <img class="img-preview img-fluid mb-3 col-sm-5">  
                              <input class="form-control" type="file" id="image" name="image" onchange="previewImage()" required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>
                    </form><!-- End Profile Edit Form -->
                  </div>
                  <div class="tab-pane fade pt-3" id="profile-change-password">
                    <!-- Change Password Form -->
                    <form>
                      <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="password" type="password" class="form-control" id="currentPassword">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="newpassword" type="password" class="form-control" id="newPassword">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                        </div>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                      </div>
                    </form><!-- End Change Password Form -->
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