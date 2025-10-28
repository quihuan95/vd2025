
@extends('layouts.app')
@php use Illuminate\Support\Facades\Storage; @endphp

@section('title', __('sponsors.title'))
@section('description', __('sponsors.description'))
@section('keywords', __('sponsors.keywords'))

@section('og_title', __('sponsors.title'))
@section('og_description', __('sponsors.description'))
@section('og_image', Storage::url('images/og/wces2025-sponsors-og.jpg'))

@section('body_class', 'com-pages view-module alias- path-sponsors-official- cva-pages-module no-user not-home')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ __('sponsors.page_title') }}</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section id="fMatter" class="col-12">
        <!-- Sponsors Section -->
        <div class='fModule f-organised f-module f-module-sponsors' style="margin-top: 2rem;">
          <div class="f-module-content fModuleContent">
            <!-- Diamond Sponsors -->
            @if(isset($sponsors['diamond']) && count($sponsors['diamond']) > 0)
            <div class='sponsors-section mb-5'>
              <div class="sponsors-banner">
                <h2 class="sponsors-banner-title">
                  @if (app()->getLocale() === 'vi')
                    DIAMOND SPONSORS
                  @else
                    DIAMOND SPONSORS
                  @endif
                </h2>
              </div>
              <div class="sponsors-cards row">
                @foreach($sponsors['diamond'] as $sponsor)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                  <div class="sponsor-card">
                    <div class="sponsor-logo-section">
                      @if($sponsor['tagline_vi'] || $sponsor['tagline_en'])
                      <p class="sponsor-tagline">
                        @if (app()->getLocale() === 'vi')
                          {{ $sponsor['tagline_vi'] }}
                        @else
                          {{ $sponsor['tagline_en'] }}
                        @endif
                      </p>
                      @endif
                      <div class="sponsor-logo">
                        <img src="{{ Storage::url($sponsor['logo']) }}" alt="{{ $sponsor['name'] }}" class="img-fluid">
                      </div>
                    </div>
                    <div class="sponsor-buttons">
                      @foreach($sponsor['buttons'] as $button)
                      <a href="{{ Storage::url($button['url']) }}" class="sponsor-button" target="_blank">
                        @if (app()->getLocale() === 'vi')
                          {{ $button['text_vi'] }}
                        @else
                          {{ $button['text_en'] }}
                        @endif
                      </a>
                      @endforeach
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            @endif

            <!-- Platinum Sponsors -->
            @if(isset($sponsors['platinum']) && count($sponsors['platinum']) > 0)
            <div class='sponsors-section mb-5'>
              <div class="sponsors-banner">
                <h2 class="sponsors-banner-title">
                  @if (app()->getLocale() === 'vi')
                    PLATINUM SPONSORS
                  @else
                    PLATINUM SPONSORS
                  @endif
                </h2>
              </div>
              <div class="sponsors-cards row">
                @foreach($sponsors['platinum'] as $sponsor)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                  <div class="sponsor-card">
                    <div class="sponsor-logo-section">
                      @if($sponsor['tagline_vi'] || $sponsor['tagline_en'])
                      <p class="sponsor-tagline">
                        @if (app()->getLocale() === 'vi')
                          {{ $sponsor['tagline_vi'] }}
                        @else
                          {{ $sponsor['tagline_en'] }}
                        @endif
                      </p>
                      @endif
                      <div class="sponsor-logo">
                        <img src="{{ Storage::url($sponsor['logo']) }}" alt="{{ $sponsor['name'] }}" class="img-fluid">
                      </div>
                    </div>
                    <div class="sponsor-buttons">
                      @foreach($sponsor['buttons'] as $button)
                      <a href="{{ Storage::url($button['url']) }}" class="sponsor-button" target="_blank">
                        @if (app()->getLocale() === 'vi')
                          {{ $button['text_vi'] }}
                        @else
                          {{ $button['text_en'] }}
                        @endif
                      </a>
                      @endforeach
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            @endif

            <!-- Gold Sponsors -->
            @if(isset($sponsors['gold']) && count($sponsors['gold']) > 0)
            <div class='sponsors-section mb-5'>
              <div class="sponsors-banner">
                <h2 class="sponsors-banner-title">
                  @if (app()->getLocale() === 'vi')
                    GOLD SPONSORS
                  @else
                    GOLD SPONSORS
                  @endif
                </h2>
              </div>
              <div class="sponsors-cards row">
                @foreach($sponsors['gold'] as $sponsor)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                  <div class="sponsor-card">
                    <div class="sponsor-logo-section">
                      @if($sponsor['tagline_vi'] || $sponsor['tagline_en'])
                      <p class="sponsor-tagline">
                        @if (app()->getLocale() === 'vi')
                          {{ $sponsor['tagline_vi'] }}
                        @else
                          {{ $sponsor['tagline_en'] }}
                        @endif
                      </p>
                      @endif
                      <div class="sponsor-logo">
                        <img src="{{ Storage::url($sponsor['logo']) }}" alt="{{ $sponsor['name'] }}" class="img-fluid">
                      </div>
                    </div>
                    <div class="sponsor-buttons">
                      @foreach($sponsor['buttons'] as $button)
                      <a href="{{ Storage::url($button['url']) }}" class="sponsor-button" target="_blank">
                        @if (app()->getLocale() === 'vi')
                          {{ $button['text_vi'] }}
                        @else
                          {{ $button['text_en'] }}
                        @endif
                      </a>
                      @endforeach
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            @endif

            <!-- Silver Sponsors -->
            @if(isset($sponsors['silver']) && count($sponsors['silver']) > 0)
            <div class='sponsors-section mb-5'>
              <div class="sponsors-banner">
                <h2 class="sponsors-banner-title">
                  @if (app()->getLocale() === 'vi')
                    SILVER SPONSORS
                  @else
                    SILVER SPONSORS
                  @endif
                </h2>
              </div>
              <div class="sponsors-cards row">
                @foreach($sponsors['silver'] as $sponsor)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                  <div class="sponsor-card">
                    <div class="sponsor-logo-section">
                      @if($sponsor['tagline_vi'] || $sponsor['tagline_en'])
                      <p class="sponsor-tagline">
                        @if (app()->getLocale() === 'vi')
                          {{ $sponsor['tagline_vi'] }}
                        @else
                          {{ $sponsor['tagline_en'] }}
                        @endif
                      </p>
                      @endif
                      <div class="sponsor-logo">
                        <img src="{{ Storage::url($sponsor['logo']) }}" alt="{{ $sponsor['name'] }}" class="img-fluid">
                      </div>
                    </div>
                    <div class="sponsor-buttons">
                      @foreach($sponsor['buttons'] as $button)
                      <a href="{{ Storage::url($button['url']) }}" class="sponsor-button" target="_blank">
                        @if (app()->getLocale() === 'vi')
                          {{ $button['text_vi'] }}
                        @else
                          {{ $button['text_en'] }}
                        @endif
                      </a>
                      @endforeach
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            @endif

            <!-- Bronze Sponsors -->
            @if(isset($sponsors['bronze']) && count($sponsors['bronze']) > 0)
            <div class='sponsors-section mb-5'>
              <div class="sponsors-banner">
                <h2 class="sponsors-banner-title">
                  @if (app()->getLocale() === 'vi')
                    BRONZE SPONSORS
                  @else
                    BRONZE SPONSORS
                  @endif
                </h2>
              </div>
              <div class="sponsors-cards row">
                @foreach($sponsors['bronze'] as $sponsor)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                  <div class="sponsor-card">
                    <div class="sponsor-logo-section">
                      @if($sponsor['tagline_vi'] || $sponsor['tagline_en'])
                      <p class="sponsor-tagline">
                        @if (app()->getLocale() === 'vi')
                          {{ $sponsor['tagline_vi'] }}
                        @else
                          {{ $sponsor['tagline_en'] }}
                        @endif
                      </p>
                      @endif
                      <div class="sponsor-logo">
                        <img src="{{ Storage::url($sponsor['logo']) }}" alt="{{ $sponsor['name'] }}" class="img-fluid">
                      </div>
                    </div>
                    <div class="sponsor-buttons">
                      @foreach($sponsor['buttons'] as $button)
                      <a href="{{ Storage::url($button['url']) }}" class="sponsor-button" target="_blank">
                        @if (app()->getLocale() === 'vi')
                          {{ $button['text_vi'] }}
                        @else
                          {{ $button['text_en'] }}
                        @endif
                      </a>
                      @endforeach
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            @endif

            <!-- Co-Sponsors -->
            @if(isset($sponsors['co_sponsor']) && count($sponsors['co_sponsor']) > 0)
            <div class='sponsors-section'>
              <div class="sponsors-banner">
                <h2 class="sponsors-banner-title">
                  @if (app()->getLocale() === 'vi')
                    CO-SPONSORS
                  @else
                    CO-SPONSORS
                  @endif
                </h2>
              </div>
              <div class="sponsors-cards row">
                @foreach($sponsors['co_sponsor'] as $sponsor)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                  <div class="sponsor-card">
                    <div class="sponsor-logo-section">
                      @if($sponsor['tagline_vi'] || $sponsor['tagline_en'])
                      <p class="sponsor-tagline">
                        @if (app()->getLocale() === 'vi')
                          {{ $sponsor['tagline_vi'] }}
                        @else
                          {{ $sponsor['tagline_en'] }}
                        @endif
                      </p>
                      @endif
                      <div class="sponsor-logo">
                        <img src="{{ Storage::url($sponsor['logo']) }}" alt="{{ $sponsor['name'] }}" class="img-fluid">
                      </div>
                    </div>
                    <div class="sponsor-buttons">
                      @foreach($sponsor['buttons'] as $button)
                      <a href="{{ Storage::url($button['url']) }}" class="sponsor-button" target="_blank">
                        @if (app()->getLocale() === 'vi')
                          {{ $button['text_vi'] }}
                        @else
                          {{ $button['text_en'] }}
                        @endif
                      </a>
                      @endforeach
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            @endif
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection

@section('head')
  <style>
    /* Diamond Sponsors Banner */
    .sponsors-banner {
      background: linear-gradient(135deg, #6cbb6a 0%, #5aa857 100%);
      padding: 0.75rem 2rem;
      margin-bottom: 3rem;
      border-radius: 3px;
      text-align: center;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .sponsors-banner-title {
      color: white;
      font-weight: 700;
      font-size: 1.2rem;
      margin: 0;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    /* Sponsor Cards */
    .sponsor-card {
      background: white;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
      padding: 2rem;
      height: 100%;
      display: flex;
      flex-direction: column;
      transition: all 0.3s ease;
    }

    .sponsor-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.12);
      /* background-color: #ecffec; */
    }

    .sponsor-logo-section {
      text-align: center;
      margin-bottom: 2rem;
      flex-grow: 1;
    }

    .sponsor-tagline {
      color: #666;
      font-size: 0.9rem;
      margin-bottom: 1rem;
      font-style: italic;
    }

    .sponsor-logo {
      margin: 1rem 0;
    }

    .sponsor-logo img {
      max-width: 100%;
      max-height: 80px;
      object-fit: contain;
    }

    .sponsor-buttons {
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
    }

    .sponsor-button {
      background: #6cbb6a;
      color: white;
      padding: 0.75rem 1rem;
      border-radius: 6px;
      text-decoration: none;
      font-weight: 600;
      text-align: center;
      transition: all 0.3s ease;
      font-size: 0.9rem;
    }

    .sponsor-button:hover {
      background: #5aa857;
      color: white;
      text-decoration: none;
      transform: translateY(-2px);
    }

    /* All Sponsors Sections */
    .sponsors-section {
      margin-bottom: 3rem;
      border-radius: 3px;
      box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
      border: 1px solid #e9ecef;
      padding: 2rem;
      background-color: #fcfcfc;
    }

    .sponsors-cards {
      margin-top: 2rem;
    }

    @media (max-width: 768px) {
      .sponsors-banner {
        padding: 0.5rem 1.5rem;
      }

      .sponsors-banner-title {
        font-size: 1rem;
      }

      .sponsor-card {
        padding: 1.5rem;
      }
    }

    @media (max-width: 576px) {
      .sponsors-banner {
        padding: 0.5rem 1rem;
      }

      .sponsors-banner-title {
        font-size: 0.9rem;
      }

      .sponsor-card {
        padding: 1rem;
      }
    }
  </style>
@endsection

@section('scripts')
  <script>
    $(document).ready(function() {
      // Add hover effects to sponsor logos
      $('.fGalleryItem img').hover(
        function() {
          $(this).addClass('animate__animated animate__pulse');
        },
        function() {
          $(this).removeClass('animate__animated animate__pulse');
        }
      );

      // Lazy loading for images
      if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              const img = entry.target;
              img.src = img.dataset.src || img.src;
              img.classList.remove('lazy');
              imageObserver.unobserve(img);
            }
          });
        });

        document.querySelectorAll('img[loading="lazy"]').forEach(img => {
          imageObserver.observe(img);
        });
      }
    });
  </script>
@endsection
