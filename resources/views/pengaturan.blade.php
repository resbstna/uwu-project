

@extends('header')

@section('menu')
<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item ">
            <a href="/dashboard" class='sidebar-link'>
                <span>Beranda</span>
            </a>
        </li>


        <li class="sidebar-item active  ">
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
    <h3>Pengaturan</h3>
</div>

<div class="page-content">
  <section class="row">
        <div class="col-12 col-lg-12">
          <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                      <h1>The Wedding</h1>
                    </div>
                    <div class="card-body">
                        <div id="chart-profile-visit"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <div class="col-12 col-lg-12">
          <div class="row">
              <div class="col-6 col-lg-3 col-md-6">
                  <div class="card">
                      <div class="card-body px-3 py-4-5">
                          <div class="row">
                              <div class="col-md-4">
                                  <div class="stats-icon purple">
                                      <i class="iconly-boldShow"></i>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <h3 class="text-muted font-semibold">Paket Tambahan</h3>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6">
                  <div class="card">
                      <div class="card-body px-3 py-4-5">
                          <div class="row">
                              <div class="col-md-4">
                                  <div class="stats-icon blue">
                                      <i class="iconly-boldProfile"></i>
                                  </div>
                              </div>
                              <div class="col-md-8">
                                  <h3 class="text-muted font-semibold">Tagihan</h3>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6">
                  <div class="card">
                      <div class="card-body px-3 py-4-5">
                          <div class="row">
                              <div class="col-md-4">
                                  <div class="stats-icon green">
                                      <i class="iconly-boldAdd-User"></i>
                                  </div>
                              </div>
                              <div class="col-md-8">
                                  <h3 class="text-muted font-semibold">Pengguna</h3>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6">
                  <div class="card">
                      <div class="card-body px-3 py-4-5">
                          <div class="row">
                              <div class="col-md-4">
                                  <div class="stats-icon red">
                                      <i class="iconly-boldBookmark"></i>
                                  </div>
                              </div>
                              <div class="col-md-8">
                                  <h3 class="text-muted font-semibold">Ubah Tampilan</h3>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon purple">
                                    <i class="iconly-boldShow"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3 class="text-muted font-semibold">Rangkaian Acara</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon blue">
                                    <i class="iconly-boldProfile"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3 class="text-muted font-semibold">Penerima Tamu</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon green">
                                    <i class="iconly-boldAdd-User"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3 class="text-muted font-semibold">Undangan</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
          </div>


    @endsection