<!DOCTYPE html>
<html lang="en" class="no-js">


<!-- Mirrored from demos.codexcoder.com/labartisan/html/nft/enftomark-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Oct 2022 08:07:39 GMT -->

<head>
  <meta charset="utf-8">

  <meta name="author" content="codexcoder">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Meta tags for Social Media(Better SEO) -->
  <!-- <meta property="og:title" content=""> -->
  <!-- <meta property="og:type" content=""> -->
  <!-- <meta property="og:url" content=""> -->
  <!-- <meta property="og:image" content=""> -->

  <!-- site favicon -->
  <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">

  <!-- ====== All css file ========= -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/icofont.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/lightcase.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- site title -->
  <title>Calendar</title>

  @livewireStyles
</head>

<body class="light-version-2">
  <!-- preloader start here -->
  <div class="preloader">
    <div class="preloader-inner">
      <div class="preloader-icon">
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- preloader ending here -->



  <!-- ===============// header section start here \\================= -->
  <header class="header light-version">
    <div class="container-fluid">
      <div class="header__content">
        <div class="header__logo">
          <a href="{{route('home')}}">
            <img src="{{asset('assets/images/logo/logo.png')}}" alt="logo" >
          </a>
        </div>

        {{-- <form action="#" class="header__search">
          <input type="text" placeholder="Search items, collections, and creators">
          <button type="button"><i class="icofont-search-2"></i></button>
          <button type="button" class="close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path
                d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z" />
            </svg></button>
        </form> --}}
        <div class="header__menu ms-auto">
          <ul class="header__nav mb-0">
           {{--  <li class="header__nav-item">
              <a class="header__nav-link active home-4" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" data-bs-offset="0,10">Home</a>

              <ul class="dropdown-menu header__nav-menu">
                <li><a class="drop-down-item active" href="index.html">Home One <span
                      class="badge bg-theme ms-3">New</span> </a></li>
                <li><a class="drop-down-item  " href="index-2.html">Home Two</a></li>
                <li><a class="drop-down-item" href="index-3.html">Home Three</a></li>
                <li><a class="drop-down-item" href="index-4.html">Home Four</a></li>


              </ul>
            </li> --}}
            {{-- <li class="header__nav-item">
              <a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" data-bs-offset="0,10">Explore</a>

              <ul class="dropdown-menu header__nav-menu">
                <li><a class="drop-down-item" href="explore.html">Explore NFT's</a></li>
                <li><a class="drop-down-item" href="auction.html">Auction Page</a></li>

              </ul>
            </li> --}}
            <li class="header__nav-item">
              <a class="header__nav-link active" href="{{route('home')}}">Home</a>
            </li>
            <li class="header__nav-item"><a href="#" class="header__nav-link">Drop</a></li>
            <li class="header__nav-item"><a href="{{route('submit')}}" class="header__nav-link">Submit</a></li>
            <li class="header__nav-item"><a href="#" class="header__nav-link">Tweet Alerts</a></li>
            <li class="header__nav-item"><a href="{{route('blog')}}" class="header__nav-link">Blog</a></li>

           {{--  <li class="header__nav-item">
              <a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" data-bs-offset="0,10">Blog</a>

              <ul class="dropdown-menu header__nav-menu">
                <li><a class="drop-down-item" href="blog.html">Blog style 1</a></li>
                <li><a class="drop-down-item" href="blog-2.html">Blog style 2</a></li>
                <li><a class="drop-down-item" href="blog-3.html">Blog style 3</a></li>
                <li><a class="drop-down-item" href="blog-single.html">Blog Single </a></li>
                <li><a class="drop-down-item" href="blog-single-2.html">Blog Single 2</a></li>
              </ul>
            </li> --}}
            {{-- <li class="header__nav-item">
              <a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" data-bs-offset="0,10">Pages</a>

              <ul class="dropdown-menu header__nav-menu">
                <li><a class="drop-down-item" href="item-details.html">NFT Details</a></li>
                <li><a class="drop-down-item" href="all-authors.html">ALL Authors</a></li>
                <li><a class="drop-down-item" href="all-authors-2.html">ALL Authors 2</a></li>
                <li><a class="drop-down-item" href="author.html">Author Profile</a></li>
                <li><a class="drop-down-item" href="wallet.html">Wallet Connect</a></li>
                <li><a class="drop-down-item" href="404.html">404</a></li>
                <li><a class="drop-down-item" href="forgot-pass.html">Forgot Password</a></li>
              </ul>
            </li> --}}
            {{-- <li class="header__nav-item">
              <a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" data-bs-offset="0,10"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path
                    d="M12,10a2,2,0,1,0,2,2A2,2,0,0,0,12,10ZM5,10a2,2,0,1,0,2,2A2,2,0,0,0,5,10Zm14,0a2,2,0,1,0,2,2A2,2,0,0,0,19,10Z" />
                </svg></a>

              <ul class="dropdown-menu header__nav-menu">
                <li><a class="drop-down-item" href="contact.html">Contact </a></li>
                <li><a class="drop-down-item" href="coming-soon.html">Coming soon</a></li>
              </ul>
            </li> --}}
          </ul>
        </div>

        

        <button class="menu-trigger header__btn" id="menu05">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </header>


    {{$slot}}




  <!-- ===============//footer section start here \\================= -->
    <footer class="footer-section light-version">
      <div class="footer-top" style="background-image: url({{asset('assets/images/footer/bg-light.jpg')}});">
        <div class="footer-newsletter">
          <div class="container">
            <div class="row g-4 align-items-center justify-content-center">
              <div class="col-lg-6">
                <div class="newsletter-part">
                  <div class="ft-header">
                    <h4>Get The Latest Rarible Updates</h4>
                  </div>
                  <form action="#">
                    <input type="email" placeholder="Your Mail Address">
                    <button type="submit" data-blast="bgColor"> Subscribe now</button>
                  </form>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="social-part ps-lg-5">
                  <div class="ft-header">
                    <h4>Join the Community</h4>
                  </div>
                  <ul class="social-list d-flex flex-wrap align-items-center mb-0">
                    <li class="social-link"><a href="#" data-blast="bgColor"><i class="icofont-twitter"></i></a></li>
                    <li class="social-link"><a href="#" data-blast="bgColor"><i class="icofont-twitch"></i></a></li>
                    <li class="social-link"><a href="#" data-blast="bgColor"><i class="icofont-reddit"></i></a></li>
                    <li class="social-link"><a href="#" data-blast="bgColor"><i class="icofont-instagram"></i></a></li>
                    <li class="social-link"><a href="#" data-blast="bgColor"><i class="icofont-dribble"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
    
    
        </div>
        <div class="footer-links padding-top padding-bottom">
          <div class="container">
            <div class="row g-5 row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-5">
              <div class="col">
                <div class="footer-link-item">
                  <h5>About</h5>
                  <ul class="footer-link-list">
                    <li><a href="#" class="footer-link">Explore</a></li>
                    <li><a href="#" class="footer-link">How it works</a></li>
                    <li><a href="#" class="footer-link">Support</a></li>
                    <li><a href="#" class="footer-link">Become a partner</a></li>
    
                  </ul>
                </div>
              </div>
              <div class="col">
                <div class="footer-link-item">
                  <h5>NFT Marketplace</h5>
                  <ul class="footer-link-list">
                    <li><a href="#" class="footer-link">Sell your assets</a></li>
                    <li><a href="#" class="footer-link">FAQ</a></li>
                    <li><a href="#" class="footer-link">Support</a></li>
                    <li><a href="#" class="footer-link">Privacy/Policy</a></li>
                    <li><a href="#" class="footer-link">Your purchases</a></li>
                  </ul>
                </div>
              </div>
              <div class="col">
                <div class="footer-link-item">
                  <h5>Company</h5>
                  <ul class="footer-link-list">
                    <li><a href="#" class="footer-link">About</a></li>
                    <li><a href="#" class="footer-link">Mission & Team</a></li>
                    <li><a href="#" class="footer-link">Our Blog</a></li>
                    <li><a href="#" class="footer-link">Services</a></li>
                    <li><a href="#" class="footer-link">We're Hiring</a></li>
                  </ul>
                </div>
              </div>
              <div class="col">
                <div class="footer-link-item">
                  <h5>NFT Marketplace</h5>
                  <ul class="footer-link-list">
                    <li><a href="#" class="footer-link">Sell your assets</a></li>
                    <li><a href="#" class="footer-link">FAQ</a></li>
                    <li><a href="#" class="footer-link">Support</a></li>
                    <li><a href="#" class="footer-link">Privacy/Policy</a></li>
                    <li><a href="#" class="footer-link">Your purchases</a></li>
                  </ul>
                </div>
              </div>
              <div class="col">
                <div class="footer-link-item">
                  <h5>Comunity</h5>
                  <ul class="footer-link-list">
                    <li><a href="#" class="footer-link">NFT Token</a></li>
                    <li><a href="#" class="footer-link">Discusion</a></li>
                    <li><a href="#" class="footer-link">Voting</a></li>
                    <li><a href="#" class="footer-link">Suggest Feature</a></li>
                    <li><a href="#" class="footer-link">Language</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <p class="text-center py-4 mb-0 black-color">All rights reserved &copy; Enftomark || Design By: <a
              class="theme-color" href="https://themeforest.net/user/codexcoder">codexcoder</a>
          </p>
        </div>
      </div>
    </footer>
    <!-- ===============//footer section end here \\================= -->
  <!-- scrollToTop start here -->
  <a href="#" class="scrollToTop"><i class="icofont-stylish-up"></i></a>
  <!-- scrollToTop ending here -->
  
  
  
  
  <!-- All Scripts -->
  <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
  <script src="{{asset('assets/js/lightcase.js')}}"></script>
  <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/js/countdown.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('assets/js/wow.min.js')}}"></script>
  <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/js/functions.js')}}"></script>
  @livewireScripts
  </body>

  </html>