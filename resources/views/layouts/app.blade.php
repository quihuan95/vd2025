<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!-- SEO Meta Tags -->
  <title>@yield('title', 'WCES 2025 - World Congress of Endoscopic Surgeons')</title>
  <meta name="description" content="@yield('description', 'The 21st World Congress of Endoscopic Surgeons (WCES 2025) in Singapore from 4-8 November 2025. Join us for the latest in endoscopic and laparoscopic surgery.')">
  <meta name="keywords" content="@yield('keywords', 'WCES 2025, endoscopic surgery, laparoscopic surgery, Singapore, medical conference, surgery congress')">
  <meta name="author" content="WCES 2025">
  <meta name="robots" content="index, follow">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Open Graph Meta Tags -->
  <meta property="og:title" content="@yield('og_title', 'WCES 2025 - World Congress of Endoscopic Surgeons')">
  <meta property="og:description" content="@yield('og_description', 'The 21st World Congress of Endoscopic Surgeons in Singapore from 4-8 November 2025')">
  <meta property="og:image" content="@yield('og_image', asset('images/wces2025-og-image.jpg'))">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="WCES 2025">

  <!-- Twitter Card Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="@yield('twitter_title', 'WCES 2025 - World Congress of Endoscopic Surgeons')">
  <meta name="twitter:description" content="@yield('twitter_description', 'The 21st World Congress of Endoscopic Surgeons in Singapore from 4-8 November 2025')">
  <meta name="twitter:image" content="@yield('twitter_image', asset('images/wces2025-twitter-image.jpg'))">

  <!-- Canonical URL -->
  <link rel="canonical" href="{{ url()->current() }}">

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('favicon/favicon32x32.png') }}" sizes="32x32" />
  <link rel="apple-touch-icon" href="{{ asset('favicon/favicon48x48.png') }}" />
  <link rel="shortcut icon" href="{{ asset('favicon/favicon48x48.png') }}" sizes="48x48" />

  <!-- CDN CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/magnific-popup.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/intl-tel-input@11.0.3/build/css/intlTelInput.css" rel="stylesheet">
  <link rel='stylesheet' href="https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css">

  <!-- Local CSS -->
  <link href="{{ asset('css/vendor/boxy/style-min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/vendor/fphp/style.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/custom/reset.css') }}" rel="stylesheet">
  <link href="{{ asset('css/custom/layout.css') }}" rel="stylesheet">
  <link href="{{ asset('css/custom/custom.css') }}" rel="stylesheet">
  <link href="{{ asset('css/language-switcher.css') }}" rel="stylesheet">

  @stack('styles')

  <!-- Structured Data -->
  @yield('structured_data')

  <!-- Custom Head Content -->
  @yield('head')
  <style>
    .f-welcome .info p {
      text-align: justify;
    }

    .f-welcom-img .ItemfinnerGallery {
      display: flex;
      border: 1px solid #ddd;
      box-shadow: 0 0 5px 0 #ddd;
    }

    .f-welcom-img .ItemfinnerGallery .fGalleryImage {
      width: 50%;
    }

    .f-welcom-img .ItemfinnerGallery .fGalleryText {
      width: 50%;
      margin-top: 5rem;
      margin-left: 1rem;
      text-align: center;
    }

    .f-welcom-img .ItemfinnerGallery .fGalleryText h5 {
      color: var(--brand-color-1);
      font-weight: 600;
      margin: -1rem 0;
    }

    @media (max-width: 991px) {
      .fHeader .menu-horizontal nav>ul>li>ul li a:hover {
        background: var(--brand-color-1) !important;
      }
    }

    .menu-hover-1 .fMenu>li>a,
    .menu-hover-1 .fMenu>li:last-child>a {
      font-size: .85rem !important;
    }

    @media (max-width: 1299.9px) {
      .menu-hover-1 .fMenu>li:last-child>a {
        padding: 0.5rem .8rem;
      }

      .menu-hover-1 .fMenu>li>a {
        margin-left: 0;
      }
    }
  </style>
  <!-- Module ID: 47164 -->
</head>

<body class="@yield('body_class', 'com-pages view-module no-user')">
  <div class="background-container">
    <div class="fRegion region-background empty" data-fphp-region="background"></div>
  </div>

  <div class="container-mobile">
    @include('layouts.header')

    <div class="head-padding"></div>

    <div id="fContent">
      @yield('content')
    </div>

    @include('layouts.footer')
  </div>

  <!-- CDN JS -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/jquery.magnific-popup.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@11.0.3/build/js/intlTelInput.min.js"></script>
  <script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <!-- Local JS -->
  <script src="{{ asset('js/vendor/fphp/script-min.js') }}"></script>
  <script src="{{ asset('js/vendor/boxy/script-min.js') }}"></script>
  <script src="{{ asset('js/vendor/gallery/bxSlider.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"
    integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{ asset('js/vendor/bxSlider/jquery.bxslider.min.js') }}"></script>

  <!-- Initialize WOW.js -->
  <script>
    new WOW().init();
  </script>

  <!-- Custom Scripts -->
  @yield('scripts')

  <script type="text/javascript">
    $(document).ready(function() {
      $("#invoice .fTable").addClass("table table-striped table-bordered");
      $(".buttons").addClass("mb-4");
      $(".container-function").wrapInner("<div class='container'></div>");

      $("ul.fGalleryImages .fGalleryItem").wrapInner("<div class='ItemfinnerGallery'></div>");

      $("#fModule-50442,#fModule-50443").wrapAll("<div class='container'><div class='row'></div></div>");

      $("#fModule-50444,#fModule-50445").wrapAll("<div class='container'><div class='row'></div></div>");

      $("#fModule-47165 .fGalleryImages").bxSlider({
        mode: 'fade',
        auto: true,
        controls: false,
        pager: true,
        speed: 1500,
        pause: 3000,
      });

      $('.f-banner, .f-countdown').wrapAll('<div class="position-relative"></div>');

      $('.f-countdown, .f-countdown-btn').wrapAll('<div class="f-countdown-main"><div class="container"><div class="row mx-0"></div></div></div>');

      $('.f-highlights, .f-highlights-text').wrapAll('<div class="f-highlights-main bg-light"><div class="container"><div class="row mx-0"></div></div></div>');

      $('.numbers-carousel').owlCarousel({
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        margin: 0,
        nav: false,
        dots: true,
        slideTransition: 'linear',
        navText: ['<i class="fa-solid fa-angle-left" ></i>', '<i class="fa-solid fa-angle-right" ></i>'],
        responsive: {
          0: {
            items: 2,
            loop: true,
            autoplay: true
          },
          499: {
            items: 2,
            loop: true,
            autoplay: true
          },
          768: {
            items: 3,
            loop: false,
            autoplay: false
          }
        }
      })

    });
  </script>
</body>

</html>
