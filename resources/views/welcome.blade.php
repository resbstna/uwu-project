<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>UWU Wedding | Patner Your Wedding</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('halaman_depan/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('halaman_depan/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('halaman_depan/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('halaman_depan/assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('halaman_depan/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('halaman_depan/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('halaman_depan/assets/css/theme.css') }}" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block navbar-klean" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html"> <img class="me-3 d-inline-block" src="{{ asset('halaman_depan/assets/img/gallery/logo.png') }}" alt="" /></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link fw-medium active" aria-current="page" href="#home">Home</a></li>
              <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#feature">Fitur</a></li>
              <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#harga">Harga</a></li>
              <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
            <form class="ps-lg-5">
              <a href="{{ route('login') }}" class="btn btn-link text-primary fw-bold order-1 order-lg-0" type="button">Login</a>
              <a href="{{ route('register') }}" class="btn btn-light shadow-klean order-0" type="submit"><span class="text-gradient fw-bold">Daftar</span></a>
            </form>
          </div>
        </div>
      </nav>
      <section id="home">
        <div class="bg-holder d-none d-md-block bg-size" style="background-image:url(halaman_depan/assets/img/illustrations/hero.png);background-position:right bottom;">
        </div>
        <!--/.bg-holder-->

        <div class="bg-holder" style="background-image:url(halaman_depan/assets/img/illustrations/heroheader-bg.png);background-position:center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
              <h1 class="fw-bold display-4 fs-4 fs-lg-6 fs-xxl-7 text-gradient"> UWU</h1>
              <h1 class="text-700"><span class="fw-bold">Partner Your Wedding</span></h1>
              <p class="mb-5 fs-0">Hadir sebagai solusi mempermudah dalam menyatukan orang terdekat di hari special<br />menjadi moment yang memorable.</p><a class="btn hover-top btn-glow btn-klean" href="#">Buat Undangan</a>
            </div>
          </div>
        </div>
      </section>






      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5" id="feature">

        <div class="container">
          <div class="bg-holder" style="background-image:url(halaman_depan/assets/img/illustrations/feature-bg.png);background-position:right;background-size:auto;">
          </div>
          <!--/.bg-holder-->

          <div class="row justify-content-center mb-6">
            <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Fitur</h5>
              <p class="mb-0">Klean is an elegant HTML5 template and a perfect starting point for your next SaaS oriented site, carefully curated by ThemeWagon</p>
            </div>
          </div>
          <div class="row circle-blend circle-blend-right circle-cyan">
            <div class="col-md-4 mb-6">
              <div class="text-center px-lg-3">
                <div class="icon-wrapper shadow-danger">
                  <div class="icon icon-danger"><span data-feather="mail"></span></div>
                </div>
                <h5 class="mt-3 fw-bold">Encrypted Mail</h5>
                <p class="mb-md-0 px-xxl-6">Bits of moving fluff encyclopaedia galactica are creatures</p>
              </div>
            </div>
            <div class="col-md-4 mb-6">
              <div class="text-center px-lg-3">
                <div class="icon-wrapper shadow-primary">
                  <div class="icon icon-primary"><span data-feather="monitor"></span></div>
                </div>
                <h5 class="mt-3 fw-bold">Screen Sharing</h5>
                <p class="mb-md-0 px-xxl-6">Finite but unbounded quasar a mote of dust suspended</p>
              </div>
            </div>
            <div class="col-md-4 mb-6">
              <div class="text-center px-lg-3">
                <div class="icon-wrapper shadow-warning">
                  <div class="icon icon-warning"><span data-feather="book"></span></div>
                </div>
                <h5 class="mt-3 fw-bold">Personal Logbook</h5>
                <p class="mb-md-0 px-xxl-6">Paroxysm of global death kindling the energy hidden in matter</p>
              </div>
            </div>
            <div class="col-md-4 mb-6">
              <div class="text-center px-lg-3">
                <div class="icon-wrapper shadow-success">
                  <div class="icon icon-success"><span data-feather="tablet"></span></div>
                </div>
                <h5 class="mt-3 fw-bold">App Support</h5>
                <p class="mb-md-0 px-xxl-6">Extraordinary claims require extraordinary evidence emerged</p>
              </div>
            </div>
            <div class="col-md-4 mb-6">
              <div class="text-center px-lg-3">
                <div class="icon-wrapper shadow-secondary">
                  <div class="icon icon-secondary"><span data-feather="printer"></span></div>
                </div>
                <h5 class="mt-3 fw-bold">Multiple Printing</h5>
                <p class="mb-md-0 px-xxl-6">Kindling the energy hidden in matter stirred by starlight</p>
              </div>
            </div>
            <div class="col-md-4 mb-6">
              <div class="text-center px-lg-3">
                <div class="icon-wrapper shadow-info">
                  <div class="icon icon-info"><span data-feather="edit-2"></span></div>
                </div>
                <h5 class="mt-3 fw-bold">Free Sketch</h5>
                <p class="mb-md-0 px-xxl-6">Hypatia brain is the seed of intelligence citizens of distant epochs dream</p>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      

      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section class="py-0" id="harga">

            <div class="container">
              <div class="row">
                <div class="col-lg-7 col-xxl-5 mx-auto text-center py-7">
                  <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Harga</h5>
                  <p class="mb-0">Klean is an elegant HTML5 template and a perfect starting point for your next SaaS oriented site, carefully curated by <span class="fw-bold">ThemeWagon</span></p>
                </div>
              </div>
              <div class="bg-holder" style="background-image:url(halaman_depan/assets/img/illustrations/service.png);background-position:bottom center;background-size:contain;">
              </div>
              <!--/.bg-holder-->
    
              <div class="row flex-center circle-blend circle-blend-right circle-warning">
                <div class="col-xl-9">
                  <div class="row justify-content-center circle">
                    <div class="col-md-4 mb-4">
                      <div class="card card-bg h-100 px-4 px-md-2 px-lg-3 px-xxl-4 pt-4">
                        <div class="text-center"><img class="my-5" src="{{ asset('halaman_depan/assets/img/icons/text.png') }}" width="100" alt="services" />
                          <div class="card-body text-center text-md-start">
                            <h6 class="fw-bold fs-1">Send Texts Instantly</h6>
                            <p class="mt-3 mb-md-0 mb-lg-3">Manage costs, build forecasts, and adapt quickly as demand and budgets change.</p><a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more
                              <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                              </svg></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-4">
                      <div class="card card-bg h-100 px-4 px-md-2 px-lg-3 px-xxl-4 pt-4">
                        <div class="text-center"><img class="my-5" src="{{ asset('halaman_depan/assets/img/icons/organized.png') }}" width="100" alt="services" />
                          <div class="card-body text-center text-md-start">
                            <h6 class="fw-bold fs-1">University Admissions</h6>
                            <p class="mt-3 mb-md-0 mb-lg-3">Modern tools, certified HR advisors, and expert guides to help you stay compliant.</p><a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more
                              <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                              </svg></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-4">
                      <div class="card card-bg h-100 px-4 px-md-2 px-lg-3 px-xxl-4 pt-4">
                        <div class="text-center"><img class="my-5" src="{{ asset('halaman_depan/assets/img/icons/statistics.png') }}" width="100" alt="services" />
                          <div class="card-body text-center text-md-start">
                            <h6 class="fw-bold fs-1">Visa Consultancy</h6>
                            <p class="mt-3 mb-md-0 mb-lg-3">Get your team in sync with messages, real-time alerts, reminders, and more.</p><a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more
                              <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                              </svg></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- end of .container-->
    
          </section>
          <!-- <section> close ============================-->
          <!-- ============================================-->





      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0" id="contact">

        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-xxl-5 mx-auto text-center mt-5">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-5">Contact Us</h5>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-5 mb-8">
        <div class="bg-holder" style="background-image:url(assets/img/illustrations/contact-us-bg.png);background-position:left bottom;background-size:auto;">
        </div>
        <!--/.bg-holder-->

        <div class="bg-holder" style="background-image:url(assets/img/gallery/contact-bg.png);background-position:center right ;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row flex-center">
            <div class="col-lg-5 mb-5">
              <div class="card card-bg p-2">
                <div class="card-body">
                  <form>
                    <div class="row mb-3 input-group-icon">
                      <label class="col-sm-2 col-form-label visually-hidden" for="inputName">Name</label>
                      <div class="col-sm-12">
                        <input class="form-control rounded-pill border-white input-box" id="inputName" type="text" placeholder="Write your name" />
                        <svg class="bi bi-person-fill input-box-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                        </svg>
                      </div>
                    </div>
                    <div class="row mb-3 input-group-icon">
                      <label class="col-sm-2 col-form-label visually-hidden" for="inputEmail3">Email</label>
                      <div class="col-sm-12">
                        <input class="form-control rounded-pill border-white input-box" id="inputEmail3" type="email" placeholder="Write your email" />
                        <svg class="bi bi-envelope-fill input-box-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"></path>
                        </svg>
                      </div>
                    </div>
                    <div class="row mb-3 input-group-text-icon">
                      <label class="col-sm-2 col-form-label visually-hidden" for="floatingTextarea2">Comments</label>
                      <div class="col-sm-12">
                        <textarea class="form-control rounded-3 border-white input-box" id="floatingTextarea2" placeholder="Write your message" style="height: 150px"></textarea>
                        <svg class="bi bi-pencil-fill input-box-text-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"></path>
                        </svg>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="d-grid">
                          <button class="btn hover-top btn-glow btn-klean rounded-pill" type="submit">Submit </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
              <div class="d-flex align-items-center mb-5">
                <div class="icon icon-primary"><span data-feather="phone"></span></div>
                <div class="flex-1 ms-3">
                  <p class="fw-bold mb-0">Phone </p>
                  <p>+880124332334</p>
                </div>
              </div>
              <div class="d-flex align-items-center mb-5">
                <div class="icon icon-primary"><span data-feather="mail"></span></div>
                <div class="flex-1 ms-3">
                  <p class="fw-bold mb-0">Email</p>
                  <p>something@email.com </p>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <div class="icon icon-primary"><span data-feather="map-pin"></span></div>
                <div class="flex-1 ms-3">
                  <p class="fw-bold mb-0">Location</p>
                  <p>43/A Spooner Street,<br />St laurence, Virginia, <br />Texas</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('halaman_depan/vendors/@popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('halaman_depan/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('halaman_depan/vendors/is/is.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('halaman_depan/vendors/feather-icons/feather.min.js') }}"></script>
    <script>
      feather.replace();
    </script>
    <script src="{{ asset('halaman_depan/assets/js/theme.js') }}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
  </body>

</html>