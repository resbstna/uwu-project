@extends('header')
@section('css')

<link rel="stylesheet" href="{{ asset('assets/vendors/simple-datatables/style.css') }}">
@endsection
@section('menu')
<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item ">
            <a href="/dashboard" class='sidebar-link'>
                <span>Beranda</span>
            </a>
        </li>


        <li class="sidebar-item ">
            <a href="/pengaturan" class='sidebar-link'>
                <span>Pengaturan</span>
            </a>
        </li>

        <li class="sidebar-item active  ">
            <a href="/tamu" class='sidebar-link'>
                <span>Tamu</span>
            </a>
        </li>


        <li class="sidebar-item  ">
            <a href="/undangan" class='sidebar-link'>
                <span>Kirim Undangan</span>
            </a>
        </li>

    </ul>
</div>
@endsection
@section('content')
<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Tamu</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tamu</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"  data-bs-target="#inlineForm">
                                + Tambah Data
                              </button>
                            <a href="{{ route('tamu.export') }}" class="btn btn-primary">
                                Export Excel
                            </a>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"  data-bs-target="#import">
                                Import Excel
                              </button>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No Telp / No Wa</th>
                                        <th>Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $tamu)
                                  <tr>
                                    <td>{{$tamu->name}}</td>
                                    <td>{{$tamu->email}}
                                    </td>
                                    <td>{{$tamu->telph}}</td>
                                    <td> {{$tamu->addrs}}</td>
                                    <td> <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Edit{{$tamu->id}}">
                                        Edit
                                      </button>
                                      <button type="button" class="btn btn-danger" >
                                        Hapus
                                      </button></td>
                                  </tr>
                                 @endforeach
                                  </tbody>
                            </table>
                        </div>
                    </div>
                                            <div class="modal fade text-left" id="inlineForm" tabindex="-1"
                                                role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel33">Tambah Data</h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                        </div>
                                                        <form action="{{ route('tamu.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <label>Nama: </label>
                                                                <div class="form-group">  <input type="text" name="nama" class="form-control" placeholder="Nama">
                                                                </div>
                                                                <label>Email: </label>
                                                                <div class="form-group">
                                                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                                                </div>
                                                                <label>No Telp / No Wa: </label>
                                                                <div class="form-group">
                                                                    <input type="number" name="no_telp" class="form-control" placeholder="No Telp / No Wa">
                                                                </div>
                                                                <label>Alamat: </label>
                                                                <div class="form-group">
                                                                    <textarea class="form-control" name="alamat" rows="3" placeholder="Enter ..."></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Close</span>
                                                                </button>
                                                                <button  type="submit" class="btn btn-primary ml-1">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Simpan</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>


                                            @foreach ($data as $tamu)
                                            <div class="modal fade text-left" id="Edit{{$tamu->id}}" tabindex="-1"
                                            role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel33">Edit Data</h4>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <form action="{{route('tamu.update',$tamu->id)}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <label>Nama: </label>
                                                            <div class="form-group">  <input type="text" name="nama" value="{{ $tamu->name}}" class="form-control" placeholder="Nama">
                                                            </div>
                                                            <label>Email: </label>
                                                            <div class="form-group">
                                                                <input type="email" name="email" class="form-control" value="{{ $tamu->email}}" placeholder="Email">
                                                            </div>
                                                            <label>No Telp / No Wa: </label>
                                                            <div class="form-group">
                                                                <input type="number" name="no_telp" class="form-control" value="{{ $tamu->telph}}"  placeholder="No Telp / No Wa">
                                                            </div>
                                                            <label>Alamat: </label>
                                                            <div class="form-group">
                                                                <textarea class="form-control" name="alamat" rows="3" placeholder="Enter ...">{{ $tamu->addrs}}</textarea>
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
                                        @endforeach

                                        <div class="modal fade text-left" id="import" tabindex="-1"
                                        role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel33">Tambah Data</h4>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                    
                                                <a href="{{ route('tamu.export_template') }}" class="btn btn-primary">
                                                    Download Template Excel
                                                 </a>
                                                </div>
                                                <form action="{{ route('tamu.store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <input type="file" name="file" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Close</span>
                                                        </button>
                                                        <button  type="submit" class="btn btn-primary ml-1">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Simpan</span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                </section>

@endsection
@section('javascript')

<script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

    @endsection