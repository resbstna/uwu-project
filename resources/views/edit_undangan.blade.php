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


        <li class="sidebar-item ">
            <a href="/pengaturan" class='sidebar-link'>
                <span>Pengaturan</span>
            </a>
        </li>

        <li class="sidebar-item  ">
            <a href="/tamu" class='sidebar-link'>
                <span>Tamu</span>
            </a>
        </li>


        <li class="sidebar-item active ">
            <a href="/undangan" class='sidebar-link'>
                <span>Tampilan Undangan</span>
            </a>
        </li>

    </ul>
</div>
@endsection
@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('css/coba.css') }}">
 <script language="JavaScript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script language="JavaScript" type="text/javascript" src="/js/jquery-ui-personalized-1.5.2.packed.js"></script>
 <script language="JavaScript" type="text/javascript" src="/js/sprinkle.js"></script>
@endsection
@section('content')
 
<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Tampilan Undangan</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tampilan Undangan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>


  
<div class="page-content">
  <section class="row">

              
  <div id="iframe-content">
    <div class="iframe-title">
      <div class="demo-title"></div>
      <div class="devices-wrapper">
        <div class="devices">
          <button type="button" class="preview-desktop" data-device-mode="desktop"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><rect x="0" fill="none" width="20" height="20"/><g><path d="M3 2h14c.55 0 1 .45 1 1v10c0 .55-.45 1-1 1h-5v2h2c.55 0 1 .45 1 1v1H5v-1c0-.55.45-1 1-1h2v-2H3c-.55 0-1-.45-1-1V3c0-.55.45-1 1-1zm13 9V4H4v7h12zM5 5h9L5 9V5z"/></g></svg></button>
          <button type="button" class="preview-tablet" data-device-mode="tablet">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><rect x="0" fill="none" width="20" height="20"/><g><path d="M4 2h12c.55 0 1 .45 1 1v14c0 .55-.45 1-1 1H4c-.55 0-1-.45-1-1V3c0-.55.45-1 1-1zm11 14V4H5v12h10zM6 5h6l-6 5V5z"/></g></svg>
          </button>
          <button type="button" class="preview-mobile" data-device-mode="mobile">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><rect x="0" fill="none" width="20" height="20"/><g><path d="M6 2h8c.55 0 1 .45 1 1v14c0 .55-.45 1-1 1H6c-.55 0-1-.45-1-1V3c0-.55.45-1 1-1zm7 12V4H7v10h6zM8 5h4l-4 5V5z"/></g></svg>
          </button>
          <button type="button" class="preview-close">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><rect x="0" fill="none" width="20" height="20"/><g><path d="M12.12 10l3.53 3.53-2.12 2.12L10 12.12l-3.54 3.54-2.12-2.12L7.88 10 4.34 6.46l2.12-2.12L10 7.88l3.54-3.53 2.12 2.12z"/></g></svg>
          </button>
        </div>
      </div>
    </div>
  </div>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>



<div class="col-md-12">

  <div class="card">
      <div class="card-header">
          <h4 class="card-title">Tampilan Undangan</h4>
      </div>
      <div class="card-body">
          
<form action="{{ route('tampilan.update',$tampilan->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
          <div class="row">
              <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                aria-orientation="vertical">
                      <a class="nav-link active" id="v-pills-header-tab" data-bs-toggle="pill"
                          href="#v-pills-header" role="tab" aria-controls="v-pills-header"
                          aria-selected="true">Header
                         </a>
                         <a class="nav-link" id="v-pills-hero-tab" data-bs-toggle="pill"
                             href="#v-pills-hero" role="tab" aria-controls="v-pills-hero"
                             aria-selected="false">Hero</a>
                      <a class="nav-link" id="v-pills-event-tab" data-bs-toggle="pill"
                          href="#v-pills-event" role="tab" aria-controls="v-pills-event"
                          aria-selected="false">Event</a>
                      <!-- <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                      href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                      aria-selected="false">Gallery</a>
                      <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                      href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                      aria-selected="false">Video</a> -->
                      <a class="nav-link" id="v-pills-countdown-tab" data-bs-toggle="pill"
                          href="#v-pills-countdown" role="tab" aria-controls="v-pills-countdown"
                          aria-selected="false">Countdown</a>
                      <a class="nav-link" id="v-pills-maps-tab" data-bs-toggle="pill"
                      href="#v-pills-maps" role="tab" aria-controls="v-pills-maps"
                      aria-selected="false">Maps</a>
                  </div>
              </div>
              <div class="col-9">
                  <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-header" role="tabpanel"
                          aria-labelledby="v-pills-header-tab">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                        checked>
                </div>
                          <div class="modal-body">
                            <label>Judul: </label>
                            <div class="form-group">
                                <input type="text" name="judul_header" class="form-control" value="{{$tampilan->judul_header}}" placeholder="Judul">
                            </div>
                            
                            <label>Upload Background: </label>
                            <div class="form-group">
                            <input type="file" name="image" class="form-control">
                        </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="v-pills-hero" role="tabpanel"
                          aria-labelledby="v-pills-hero-tab">
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                checked>
                        </div>
                        <input type="text" name="demo" id="demo" class="form-control" placeholder="Teks Atas" value="{{$tampilan->url}}" hidden>
                          <div class="modal-body">
                            <label>Judul: </label>
                            <div class="form-group">
                                <input type="text" name="judul_hero" class="form-control" placeholder="Judul"  value="{{$tampilan->judul_hero}}">
                            </div>
                            <label>Sub-Judul: </label>
                            <div class="form-group">
                                <input type="text" name="sub_judul_hero" class="form-control" placeholder="Sub Judul"  value="{{$tampilan->sub_judul_hero}}">
                            </div>
                            
                            <label>CPP: </label>
                            <div class="form-group">
                                <input type="text" name="CPP" class="form-control" placeholder="CPP" value="{{$tampilan->CPP}}">
                            </div>
                            
                            <label>Keterangan CPP: </label>
                            <div class="form-group">
                                <input type="text" name="keterangan_cpp" class="form-control" placeholder="Keterangan CPP" value="{{$tampilan->keterangan_cpp}}">
                            </div>

                            <label>Foto CPP: </label>
                            <div class="form-group">
                            <input type="file" name="foto_cpp" class="form-control">
                        </div>

                            <label>CPW: </label>
                            <div class="form-group">
                                <input type="text" name="CPW" class="form-control" placeholder="CPW" value="{{$tampilan->CPW}}">
                            </div>

                            
                            <label>Foto CPW: </label>
                            <div class="form-group">
                            <input type="file" name="foto_cpw" class="form-control">
                        </div>

                            <label>Keterangan CPW: </label>
                            <div class="form-group">
                                <input type="text" name="keterangan_cpw" class="form-control" placeholder="Keterangan CPW" value="{{$tampilan->keterangan_cpw}}">
                            </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="v-pills-event" role="tabpanel"
                          aria-labelledby="v-pills-event-tab">
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                checked>
                        </div>
                          <div class="modal-body">
                              
                        <input type="text" name="id_acara" id="id_acara" class="form-control" placeholder="Teks Atas" value="{{$acara->id}}">
                            <label>Acara: </label>
                            <div class="form-group">
                                <input type="text" name="acara_an" class="form-control" placeholder="Acara">
                            </div>
                            <label>Tempat Acara: </label>
                            <div class="form-group">
                                <input type="text" name="alamat_akadnikah" class="form-control" placeholder="Alamat Acara" value="{{$acara->alamat_akadnikah}}">
                            </div>
                            <label>Jam Acara Mulai: </label>
                            <div class="form-group">
                                <input type="text" name="waktu_awal_an" class="form-control" placeholder="jam Acara Mulai"  value="{{$acara->waktu_awal_an}}">
                            </div>
                            
                            <label>Jam Acara Selesai: </label>
                            <div class="form-group">
                                <input type="text" name="waktu_akhir_an" class="form-control" placeholder="Jam Acara Selesai" value="{{$acara->waktu_akhir_an}}">
                            </div>
                            
                            <label>Acara: </label>
                            <div class="form-group">
                                <input type="text" name="acara_rs" class="form-control" placeholder="Acara">
                            </div>
                            <label>Tempat Acara: </label>
                            <div class="form-group">
                                <input type="text" name="alamat_rs" class="form-control" placeholder="Tempat Acara" value="{{$acara->alamat_rs}}">
                            </div>
                            <label>Jam Acara Mulai: </label>
                            <div class="form-group">
                                <input type="text" name="waktu_awal_rs" class="form-control" placeholder="Jam Acara Mulai" value="{{$acara->waktu_awal_rs}}">
                            </div>
                            <label>Jam Acara Selesai: </label>
                            <div class="form-group">
                                <input type="text" name="waktu_akhir_rs" class="form-control" placeholder="Jam Acara Selesai" value="{{$acara->waktu_akhir_rs}}">
                            </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="v-pills-countdown" role="tabpanel"
                          aria-labelledby="v-pills-countdown-tab">
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                checked>
                        </div>
                          <div class="modal-body">
                            <label>Date: </label>
                            <div class="form-group">
                                <input type="date" name="countdown" class="form-control" placeholder="Countdown" value="{{$tampilan->countdown}}">
                            </div>
                        </div>
                      </div>
                      
                      <div class="tab-pane fade" id="v-pills-maps" role="tabpanel"
                          aria-labelledby="v-pills-maps-tab">
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                checked>
                        </div>
                          <div class="modal-body">
                            <label>Latitude: </label>
                            <div class="form-group">
                                <input type="text" name="lat" class="form-control" placeholder="Nama" value="{{$lat}}">
                            </div>
                            <label>Longtitude: </label>
                            <div class="form-group">
                                <input type="text" name="long" class="form-control" placeholder="Nama" value="{{$long}}">
                            </div>
                        </div>
                      </div>
                  </div>
                  
    <button type="submit" class="btn btn-primary">
        {{ __('Simpan') }}
    </button>
              </div>
          </div>
          </form>
      </div>
  </div>
</div>





</section>
          </div>
          </div>



@endsection

@section('javascript')
<script>
$(function(){
    var titleDiv = $('#iframe-content .demo-title');
    var demo_url = 'http://localhost:8000/undangan/'+ document.getElementById("demo").value;
    var demo_title = $(this).data('title');
    titleDiv.text(demo_title);
    var html = '';
    html += '<div class="iframe-wrapper"><iframe id="demo-iframe" src="'+ demo_url +'">This feature requires inline frames. You have iframes disabled or your browser does not support them.</iframe></div>';
    $('.devices button[data-device-mode="desktop"]').addClass('active');
    $('#iframe-content').append(html).show();

// to close preview 
var closePreview = $('.preview-close');
if(closePreview.length > 0){
  closePreview.click(function(){
    $('#iframe-content').hide().find('.iframe-wrapper').remove();
    $('.devices button').removeClass('active');
    $('#iframe-content').attr('class', '');
  });
}

//For responsiveness tab
var responsiveTabs = $('.devices button[data-device-mode]');
if(closePreview.length > 0){
   responsiveTabs.click(function(){
     responsiveTabs.removeClass('active');
     $(this).addClass('active');
     var deviceMode = $(this).data('device-mode');
     var targetIframe = $('#iframe-content');
     targetIframe.attr('class', deviceMode);
   });
}
});
</script>
    @endsection