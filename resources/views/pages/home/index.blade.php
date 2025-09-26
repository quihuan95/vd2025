@extends('layouts.app')

@section('title', __('home.title'))
@section('description', __('home.description'))
@section('keywords', __('home.keywords'))

@section('og_title', __('home.hero.title'))
@section('og_description', __('home.hero.description'))
@section('og_image', asset('images/wces2025-og-image.jpg'))

@section('body_class', 'com-pages view-module alias- path-home- cva-pages-module no-user is-home width-full title-off')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ __('common.nav.home') }}</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section id="fMatter" class="col-12">
        <div id="f-messages"></div>

        <!-- Banner Section -->
        <div class='fModule f-banner py-0 f-module f-module-gallery-list'>
          <div class="f-module-content fModuleContent">
            <img src="{{ asset('images/BVVD-KV.jpg') }}" alt="WCES 2025 Banner" />
          </div>
        </div>

        <!-- Countdown Section -->
        <div class='fModule f-countdown pb-0 col-xs-12 col-12 col-lg-6 f-module f-module--_root/countdown'>
          <div class="f-module-content fModuleContent">
            <div class="row">
              <div class="col-count fCountText">
                <h4 class="fDay">42</h4>
                <p class="fCountText">{{ __('home.countdown.days') }}</p>
              </div>
              <div class="col-count fCountText fCountHrs">
                <h4 class="fDay">10</h4>
                <p class="fCountText">{{ __('home.countdown.hours') }}</p>
              </div>
              <div class="col-count fCountText fCountMin">
                <h4 class="fDay">52</h4>
                <p class="fCountText">{{ __('home.countdown.minutes') }}</p>
              </div>
              <div class="col-count fCountText fCountSec">
                <h4 class="fDay">11</h4>
                <p class="fCountText">{{ __('home.countdown.seconds') }}</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Registration Button -->
        <div class='fModule f-countdown-btn pb-0 col-xs-12 col-12 col-sm-10 col-md-8 col-lg-6 f-module f-module-pages-custom'>
          <div class="f-module-title fModuleTitle">
            <h3>{{ __('home.countdown.title') }}</h3>
          </div>
          <div class="f-module-content fModuleContent">
            <div>
              <div>
                <a class="fButton" href="{{ locale_route('registration.form') }}">{{ __('home.cta.register_button') }}</a>
              </div>
            </div>
          </div>
        </div>

        <!-- About Event Section -->
        <div class='fModule f-about-home container-function pb-0 f-module f-module-pages-custom'>
          <div class="f-module-title fModuleTitle">
            <h3>{{ __('home.about.title') }}</h3>
          </div>
          <div class="f-module-content fModuleContent">
            <div>
              <h4>
                <span>{{ __('home.hero.title') }}</span>
                {{ __('home.hero.description') }}
              </h4>
            </div>
          </div>
        </div>

        <!-- Event Highlights Section -->
        <div class='fModule f-highlights pb-4 pb-lg-0 col-xs-12 col-12 col-xl-4 f-module f-module-gallery-list'>
          <div class="f-module-content fModuleContent">
            <ul class="fGalleryImages fGalleryList">
              <li class="fGalleryItem">
                <a class="fGalleryImage">
                  <img alt="Event Highlights" src="https://storage.unitedwebnetwork.com/files/1212/64d6523d3fb063bdc0df357ef14a6cef.png" loading="lazy" />
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class='fModule f-highlights-text align-content-center pb-0 col-xs-12 col-12 col-xl-8 f-module f-module-pages-custom'>
          <div class="f-module-content fModuleContent">
            <div>
              <div class="highlights-item">
                <p><label>WCES 2025 Congress</label></p>
                <h3>{{ __('home.highlights.title') }}</h3>
                <ul>
                  <li>
                    <div>{{ __('home.highlights.items.artificial_intelligence') }}</div>
                  </li>
                  <li>
                    <div>{{ __('home.highlights.items.image_guided_surgery') }}</div>
                  </li>
                  <li>
                    <div>{{ __('home.highlights.items.robotic_surgery') }}</div>
                  </li>
                  <li>
                    <div>{{ __('home.highlights.items.healthcare_economics') }}</div>
                  </li>
                  <li>
                    <div>{{ __('home.highlights.items.women_in_surgery') }}</div>
                  </li>
                  <li>
                    <div>OR of the Future</div>
                  </li>
                  <li>
                    <div>Education & Training in MIS</div>
                  </li>
                  <li>
                    <div>{{ __('home.highlights.items.innovation_tissue') }}</div>
                  </li>
                  <li>
                    <div>Innovation in MIS</div>
                  </li>
                  <li>
                    <div>{{ __('home.highlights.items.prosthesis_mesh') }}</div>
                  </li>
                  <li>
                    <div>Startups in MIS</div>
                  </li>
                  <li>
                    <div>{{ __('home.highlights.items.cinema_mis') }}</div>
                  </li>
                  <li>
                    <div>{{ __('home.highlights.items.fellowship_program') }}</div>
                  </li>
                  <li>
                    <div>Value Driven Outcome in MIS</div>
                  </li>
                  <li>
                    <div>{{ __('home.highlights.items.carbon_neutrality') }}</div>
                  </li>
                  <li>
                    <div>QoL in MIS</div>
                  </li>
                  <li>
                    <div>{{ __('home.highlights.items.patient_safety') }}</div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Welcome Message Section -->
        <div class='fModule container-function f-welcome pb-0 f-module f-module-pages-custom'>
          <div class="f-module-title fModuleTitle">
            <h3>{{ __('home.welcome.title') }}</h3>
          </div>
          <div class="f-module-content fModuleContent">
            <div></div>
            <div class="info">
              <p>{{ __('home.welcome.greeting') }}</p>
              <p>{!! __('home.welcome.content.paragraph_1') !!}</p>
              <p>{!! __('home.welcome.content.paragraph_2') !!}</p>
              <p>{!! __('home.welcome.content.paragraph_3') !!}</p>
              <p>{!! __('home.welcome.content.paragraph_4') !!}</p>
              <p>{!! __('home.welcome.content.paragraph_5') !!}</p>
              <p>{{ __('home.welcome.content.closing') }}</p>
            </div>
          </div>
        </div>
    </div>

    <!-- Welcome Images Section -->
    <div class='fModule container-function f-welcom-img f-module f-module-gallery-list'>
      <div class="f-module-content fModuleContent">
        <ul class="fGalleryImages row justify-content-center fGalleryList">
          <li class="fGalleryItem col-12 col-sm-10 col-md-6 col-lg-4 mb-4">
            <a class="fGalleryImage">
              <img alt="Davide Lomanto- Congress President" src="https://storage.unitedwebnetwork.com/files/1212/4a5bc10cab08dcabaed0c07688b91c1b.png" loading="lazy" />
            </a>
            <div class="fGalleryText">
              <h5>Prof Davide Lomanto</h5>
              <p>{{ __('home.speakers.congress_president') }}</p>
            </div>
          </li>
          <li class="fGalleryItem col-12 col-sm-10 col-md-6 col-lg-4 mb-4">
            <a class="fGalleryImage">
              <img alt="Asim Shabbir- Congress Chair" src="https://storage.unitedwebnetwork.com/files/1212/0c709c774f6b95b516a9d6fe3ae67fbc.png" loading="lazy" />
            </a>
            <div class="fGalleryText">
              <h5>Assoc Prof Asim Shabbir</h5>
              <p>{{ __('home.speakers.congress_chair') }}</p>
            </div>
          </li>
          <li class="fGalleryItem col-12 col-sm-10 col-md-6 col-lg-4 mb-4">
            <a class="fGalleryImage">
              <img alt="Aung Myint Oo- Scientific Chair" src="https://storage.unitedwebnetwork.com/files/1212/819a31714cd0f35e2972b6ab7178f1bf.png" loading="lazy" />
            </a>
            <div class="fGalleryText">
              <h5>Asst Prof Aung Myint Oo</h5>
              <p>{{ __('home.speakers.scientific_chair') }}</p>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <!-- Venue Section -->
    <div class='fModule fnumber_counter f-venue bg-light container-function f-module f-module-pages-custom-photo'>
      <div class="f-module-content fModuleContent">
        <div class="f-media row justify-content-center">
          <div class="f-media-text col-12">
            <div class="venue-text">
              <h3>{{ __('home.venue.title') }}</h3>
              <p>{{ __('home.venue.content.paragraph_1') }}</p>
              <p>{{ __('home.venue.content.paragraph_2') }}</p>
            </div>

            <div class="stats-container">
              <div class="stat-card">
                <div class="stat-number" data-count="1500">0</div>
                <div class="stat-label">{{ __('home.statistics.attendees') }}</div>
              </div>
              <div class="stat-card">
                <div class="stat-number" data-count="40">0</div>
                <div class="stat-label">{{ __('home.statistics.exhibition_booth') }}</div>
              </div>
              <div class="stat-card">
                <div class="stat-number" data-count="4">0</div>
                <div class="stat-label">{{ __('home.statistics.workshops') }}</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Sponsors Section -->
    <div class='fModule pt-5 f-organised f-module f-module-gallery-list'>
      <div class="f-module-title fModuleTitle">
        <h3>{{ __('home.sponsors.endorsed_by') }}</h3>
      </div>
      <div class="f-module-content fModuleContent">
        <ul class="fGalleryImages row justify-content-center fGalleryList">
          <li class="fGalleryItem col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
            <a class="fGalleryImage">
              <img alt="DGAV Logo" src="https://storage.unitedwebnetwork.com/files/1212/dgav-logo_325629.jpg" loading="lazy" />
            </a>
          </li>
          <li class="fGalleryItem col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
            <a class="fGalleryImage">
              <img alt="ISOPES Logo" src="https://storage.unitedwebnetwork.com/files/1212/isopes_282549.png" loading="lazy" />
            </a>
          </li>
          <li class="fGalleryItem col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
            <a class="fGalleryImage">
              <img alt="SCRS Logo" src="https://storage.unitedwebnetwork.com/files/1212/2025_SCRS_274410_274501.png" loading="lazy" />
            </a>
          </li>
          <li class="fGalleryItem col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
            <a class="fGalleryImage">
              <img alt="OMSS Logo" src="https://storage.unitedwebnetwork.com/files/1212/OMSS_277624.avif" loading="lazy" />
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class='fModule f-organised f-module f-module-gallery-list'>
      <div class="f-module-content fModuleContent">
        <div class='fGalleryContainer'>
          <h4>{{ __('home.sponsors.bronze_sponsor') }}</h4>
          <ul class="fGalleryImages row justify-content-center fGalleryList">
            <li class="fGalleryItem col-12 col-sm-6 col-md-3 col-lg-2 mb-3">
              <a class="fGalleryImage">
                <img alt="Miconvey" src="https://storage.unitedwebnetwork.com/files/1212/Miconvey_322712.png" loading="lazy" />
              </a>
            </li>
          </ul>
        </div>
        <div class='fGalleryContainer'>
          <h4>{{ __('home.sponsors.other_sponsors') }}</h4>
          <ul class="fGalleryImages row justify-content-center fGalleryList">
            <li class="fGalleryItem col-12 col-sm-6 col-md-3 col-lg-2 mb-3">
              <a class="fGalleryImage">
                <img alt="Aldaver" src="https://storage.unitedwebnetwork.com/files/1212/Aldaver_322713.png" loading="lazy" />
              </a>
            </li>
            <li class="fGalleryItem col-12 col-sm-6 col-md-3 col-lg-2 mb-3">
              <a class="fGalleryImage">
                <img alt="Biocer" src="https://storage.unitedwebnetwork.com/files/1212/Biocer_322498.png" loading="lazy" />
              </a>
            </li>
            <li class="fGalleryItem col-12 col-sm-6 col-md-3 col-lg-2 mb-3">
              <a class="fGalleryImage">
                <img alt="Healnoc" src="https://storage.unitedwebnetwork.com/files/1212/Healnoc_322587.png" loading="lazy" />
              </a>
            </li>
            <li class="fGalleryItem col-12 col-sm-6 col-md-3 col-lg-2 mb-3">
              <a class="fGalleryImage">
                <img alt="KOTOBUKI" src="https://storage.unitedwebnetwork.com/files/1212/KOTOBUKI_331072.png" loading="lazy" />
              </a>
            </li>
            <li class="fGalleryItem col-12 col-sm-6 col-md-3 col-lg-2 mb-3">
              <a class="fGalleryImage">
                <img alt="SonoScape Medical Corp." src="https://storage.unitedwebnetwork.com/files/1212/SonoScape%20Medical%20Corp._322521.png" loading="lazy" />
              </a>
            </li>
            <li class="fGalleryItem col-12 col-sm-6 col-md-3 col-lg-2 mb-3">
              <a class="fGalleryImage">
                <img alt="Teleflex Medical" src="https://storage.unitedwebnetwork.com/files/1212/Teleflex%20Medical_322520.png" loading="lazy" />
              </a>
            </li>
            <li class="fGalleryItem col-12 col-sm-6 col-md-3 col-lg-2 mb-3">
              <a class="fGalleryImage">
                <img alt="VHMed" src="https://storage.unitedwebnetwork.com/files/1212/VHMed_322711.jpg" loading="lazy" />
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </section>
  </div>
  </div>
@endsection

@section('scripts')
  <script>
    $(document).ready(function() {
      // Countdown functionality
      setInterval(function() {
        countdown()
      }, 1000);

      function countdown() {
        s = $(".fCountSec h4");
        m = $(".fCountMin h4");
        h = $(".fCountHrs h4");
        var sec = s.html();
        var min = m.html();
        var hrs = h.html();
        if (sec > 0) {
          sec = sec - 1;
        } else if (sec == 0) {
          sec = 59;
          if (min > 0) {
            min = min - 1;
          } else {
            min = 59;
          }
        }

        s.html(sec);
        m.html(min);
      }

      // Number counter animation
      var a = 0;
      $(window).scroll(function() {
        var $counterElement = $('.fnumber_counter');
        if ($counterElement.length > 0) {
          var oTop = $counterElement.offset().top - window.innerHeight;
          if (a == 0 && $(window).scrollTop() > oTop) {
            $('.count').each(function() {
              var $this = $(this);
              var countTo = $this.attr('data-count');

              $({
                countNum: $this.text()
              }).animate({
                countNum: countTo
              }, {
                duration: 2500,
                easing: 'swing',
                step: function() {
                  $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                  $this.text(this.countNum);
                }
              });
            });
            a = 1;
          }
        }
      });

      // Owl Carousel for numbers
      if ($('.numbers-carousel').length > 0) {
        $('.numbers-carousel').owlCarousel({
          autoplayTimeout: 5000,
          autoplayHoverPause: true,
          margin: 0,
          nav: false,
          dots: true,
          slideTransition: 'linear',
          navText: ['<i class="fa-solid fa-angle-left"></i>', '<i class="fa-solid fa-angle-right"></i>'],
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
        });
      }

      // bxSlider for banner
      if ($('.f-banner .fGalleryImages').length > 0) {
        $('.f-banner .fGalleryImages').bxSlider({
          mode: 'fade',
          auto: true,
          controls: false,
          pager: true,
          speed: 1500,
          pause: 3000
        });
      }
    });
  </script>
@endsection
