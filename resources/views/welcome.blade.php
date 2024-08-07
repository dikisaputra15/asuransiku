<!DOCTYPE html>
<html lang="en">
    <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Home Page</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('Growing')}}/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('Growing')}}/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('Growing')}}/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('Growing')}}/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('Growing')}}/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{asset('Growing')}}/css/owl.carousel.min.css">
      <link rel="stylesheet" href="{{asset('Growing')}}/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    </head>
    <body>
      <!-- header top section start -->
      <div class="header_top">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div class="call_text"><a href="#"><img src="{{asset('Growing')}}/images/call-icon.png"><span class="call_text_left">+01 1234567890</span></a></div>
            </div>
            <div class="col-sm-4">
              <div class="call_text"><a href="#"><img src="{{asset('Growing')}}/images/mail-icon.png"><span class="call_text_left">admin@gmail.com</span></a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- header top section end -->
      <!-- header section start -->
      <div class="header_section">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo"><a href="/"><img src="https://dkpp.serangkab.go.id/front/assets/img/logo-dkpp.svg"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            @if (Route::has('login'))
            @auth
              <li class="nav-item">
                <a class="nav-link" href="/">HOME</a>
              </li>
            @else
              <li class="nav-item">
                <a class="nav-link" href="/alllogin">LOGIN</a>
              </li>
              @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">REGISTER</a>
              </li>
              @endif
              @endauth
              @endif
            </ul>
          </div>
        </nav>
        </div>
      </div>
      <!-- header section end -->
      <!-- banner section start -->
      <div class="banner_section layout_padding">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-8 padding_0">
              <div class="banner_img"><img src="https://serangkab.go.id/storage/media/kabupaten-serang_1589658232.png"></div>
            </div>
            <div class="col-sm-4">
              <h1 class="clever_text">Selamat Datang</h1>
              <h1>di Sistem Informasi</h1>
              <h1>Permohonan Asuransi Kesehatan Ternak</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- banner section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
        <div class="container">
          <div class="d-flex  justify-content-center">
            <h1 class="services_text custom_main">Tata Cara Pengajuan</h1>
          </div>
        </div>
      </div>
      <!-- services section end -->
      <!-- services_2 section start -->
      <div class="services_section_2">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-lg-12">
              <div class="plane_main">
                <div class="plane_right">
                  <h3 class="vision_text">Registrasi Akun Agar Bisa Login</h3>
                </div>
              </div>
              <div class="plane_main">
                <div class="plane_right">
                  <h3 class="vision_text">Login Sistem</h3>
                </div>
              </div>
              <div class="plane_main">
                <div class="plane_right">
                  <h3 class="vision_text">Siapkan Photo KTP</h3>
                </div>
              </div>
              <div class="plane_main">
                <div class="plane_right">
                  <h3 class="vision_text">Siapkan Photo Hewan Ternak</h3>
                </div>
              </div>
              <div class="plane_main">
                <div class="plane_right">
                  <h3 class="vision_text">Siapkan Surat Pengantar</h3>
                </div>
              </div>
              <div class="plane_main">
                <div class="plane_right">
                  <h3 class="vision_text">Isi Form Yang Ada Pada Sistem</h3>
                </div>
              </div>
              <div class="plane_main">
                <div class="plane_right">
                  <h3 class="vision_text">Kirim Permohonan</h3>
                </div>
              </div>
            </div>   
          </div>
        </div>
      </div>
   
      <div class="copyright_section">
        <div class="container">
          <p class="copyright">2024 All Rights Hesti. <a href="https://html.design">Free html  Templates</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></p>
        </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{asset('Growing')}}/js/jquery.min.js"></script>
      <script src="{{asset('Growing')}}/js/popper.min.js"></script>
      <script src="{{asset('Growing')}}/js/bootstrap.bundle.min.js"></script>
      <script src="{{asset('Growing')}}/js/jquery-3.0.0.min.js"></script>
      <script src="{{asset('Growing')}}/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="{{asset('Growing')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="{{asset('Growing')}}/js/custom.js"></script>
      <!-- javascript --> 
      <script src="{{asset('Growing')}}/js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
   </html>