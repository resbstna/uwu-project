

@extends('header')

@section('menu')
<div class="sidebar-menu">
    
    <ul class="menu">

    <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-jet-dropdown-link>
                        </form>
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item active ">
            <a href="/dashboard" class='sidebar-link'>
                <span>Beranda</span>
            </a>
        </li>


        <li class="sidebar-item  ">
            <a href="/pengaturan" class='sidebar-link'>
                <span>Pengaturan</span>
            </a>
        </li>

        <li class="sidebar-item  ">
            <a href="/tamu" class='sidebar-link'>
                <span>Tamu</span>
            </a>
        </li>


        <li class="sidebar-item  ">
            <a href="/undangan" class='sidebar-link'>
                <span>Tampilan Undangan</span>
            </a>
        </li>

    </ul>
</div>
@endsection

@section('content')
<div class="page-heading">
    <h3>Dashboard</h3>
</div>

<div class="page-content">
  <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header">
                          <h1>The Wedding</h1>
                      </div>
                      <div class="card-body">@foreach ($pengantin as $data)
                        <h2 class="lead"><b>{{$data->cpp_panggilan}} & {{$data->cpw_panggilan}}</b></h2>
                        @endforeach
                      </div>
                  </div>
              </div>
            </div>
            <div class="row">
                <div class="col-12 col-xl-6">
                    <div class="card">
            <?php  if ($acara){ ?>
                        <div class="card-header">
                            <h4>Akad Nikah</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                      <svg class="bi" width="1em" height="1em" fill="currentColor">
                                        <use
                                            xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#alarm-fill" />
                                    </svg>
                                  <h5 class="mb-0 ms-3">{{$acara->waktu_awal_an}} - {{$acara->waktu_akhir_an}}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                      <svg class="bi" width="1em" height="1em" fill="currentColor">
                                        <use
                                            xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#building" />
                                    </svg>
                                        <h5 class="mb-0 ms-3">{{$acara->alamat_akadnikah}}</h5>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-8">
                                    <div class="d-flex">
                                        <h2 > <?php echo date('d F Y', strtotime($acara->tanggal_an)) ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Resepsi</h4>
                        </div>
                        <div class="card-body">
                          <div class="row">
                              <div class="col-6">
                                  <div class="d-flex align-items-center">
                                    <svg class="bi" width="1em" height="1em" fill="currentColor">
                                      <use
                                          xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#alarm-fill" />
                                  </svg>
                                <h5 class="mb-0 ms-3">{{$acara->waktu_awal_rs}} - {{$acara->waktu_akhir_rs}}</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-6">
                                  <div class="d-flex align-items-center">
                                    <svg class="bi" width="1em" height="1em" fill="currentColor">
                                      <use
                                          xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#building" />
                                  </svg>
                                      <h5 class="mb-0 ms-3">{{$acara->alamat_rs}}</h5>
                                  </div>
                              </div>
                          </div><br>
                          <div class="row">
                              <div class="col-8">
                                  <div class="d-flex">
                                      <h2 > <?php echo date('d F Y', strtotime($acara->tanggal_rs)) ?> </h2>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
             <?php }else{ ?>
                <div class="card-header">
                            <h4>Akad Nikah</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"  data-bs-target="#inlineForm">
                                + Tambah Acara
                              </button>
                                </div>
                            </div>
                        
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Resepsi</h4>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"  data-bs-target="#inlineForm">
                                + Tambah Acara
                              </button>
                          </div>
                      </div>
                    </div>
                </div>


            <?php  } ?>
                <div class="col-12 col-xl-12">
                  <div class="card">
                      <div class="card-header">
                          <h4>Ucapan Dan Doa </h4>
                      </div>
                      <div class="card-body">
                          <div class="table-responsive">
                              <table class="table table-hover table-lg">
                                  <thead>
                                      <tr>
                                          <th>Name</th>
                                          <th>Comment</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td class="col-3">
                                              <div class="d-flex align-items-center">
                                                  <div class="avatar avatar-md">
                                                      <img src="assets/images/faces/5.jpg">
                                                  </div>
                                                  <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                              </div>
                                          </td>
                                          <td class="col-auto">
                                              <p class=" mb-0">Congratulations on your graduation!</p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="col-3">
                                              <div class="d-flex align-items-center">
                                                  <div class="avatar avatar-md">
                                                      <img src="assets/images/faces/2.jpg">
                                                  </div>
                                                  <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                              </div>
                                          </td>
                                          <td class="col-auto">
                                              <p class=" mb-0">Wow amazing design! Can you make another
                                                  tutorial for
                                                  this design?</p>
                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-header">
                    <h4>Tagihan</h4>
                </div>
                <div class="card-content pb-8">
                    <div class="recent-message d-flex px-4 py-3">
                        <div class="name ms-4">
                          <strike class="text-muted mb-0">Rp 350k</strike>
                            <h3 class="mb-1">Rp 250k</h3>
                        </div>
                    </div>
                    <div class="px-4">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control"
                                aria-label="Recipient's username"
                                aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button"
                                id="button-addon2">Kode Kupon</button>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            
            <div class="card">
              <div class="card-body px-3 py-4-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="stats-icon purple">
                            <i class="iconly-users"></i>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h6 class="text-muted font-semibold">Tamu Undangan</h6>
                        <h6 class="font-extrabold mb-0">  0/{{$total_tamu}}</h6>
                    </div>
                </div>
            </div>
          </div>
          
          <div class="card">
            <div class="card-body px-3 py-4-5">
              <div class="row">
                  <div class="col-md-4">
                      <div class="stats-icon purple">
                          <i class="iconly-users"></i>
                      </div>
                  </div>
                  <div class="col-md-8">
                      <h6 class="text-muted font-semibold">Undangan Terkirim</h6>
                      <h6 class="font-extrabold mb-0"> 0/500</h6>
                  </div>
              </div>
          </div>
        </div>
            <div class="card">
                <div class="card-header">
                    <h4>Statistik Tamu</h4>
                </div>
                <div class="card-body">
                    <div id="chart-visitors-profile"></div>
                </div>
            </div>




            <div class="modal fade text-left" id="inlineForm" tabindex="-1"
            role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Tambah Data Akad Nikah</h4>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <form action="{{ route('tamu.store') }}" method="POST" enctype="multipart/form-data"></form>
                        <div class="modal-body">
                            <label>Tanggal: </label>
                            <div class="form-group">
                                <input type="date" name="tanggal_an" class="form-control" placeholder="Tanggal">
                            </div>
                            <label>Waktu Awal: </label>
                            <div class="form-group">
                                <input type="number" name="waktu_awal_an" class="form-control" placeholder="No Telp / No Wa">
                            </div>
                            <label>Waktu Akhir: </label>
                            <div class="form-group">
                                <input type="number" name="waktu_akhir_an" class="form-control" placeholder="No Telp / No Wa">
                            </div>
                            <label>Alamat: </label>
                            <div class="form-group">
                                <textarea class="form-control" name="alamat_akadnikah" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary"
                                data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                            </button>
                            <button  type="submit" class="btn btn-primary ml-1"
                                data-bs-dismiss="modal">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Simpan</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade text-left" id="inlineForm" tabindex="-1"
        role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Tambah Data Resepsi</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="{{ route('tamu.store') }}" method="POST" enctype="multipart/form-data"></form>
                    <div class="modal-body">
                        <label>Tanggal: </label>
                        <div class="form-group">
                            <input type="date" name="tanggal_rs" class="form-control" placeholder="Tanggal">
                        </div>
                        <label>Waktu Awal: </label>
                        <div class="form-group">
                            <input type="number" name="waktu_awal_rs" class="form-control" placeholder="No Telp / No Wa">
                        </div>
                        <label>Waktu Akhir: </label>
                        <div class="form-group">
                            <input type="number" name="waktu_akhir_rs" class="form-control" placeholder="No Telp / No Wa">
                        </div>
                        <label>Alamat: </label>
                        <div class="form-group">
                            <textarea class="form-control" name="alamat_rs" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary"
                            data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button  type="submit" class="btn btn-primary ml-1"
                            data-bs-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Simpan</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

        </div>
    </section>
          </div>

    @endsection