
@extends('layouts.app')
@php 
use Illuminate\Support\Facades\Storage;

// Helper function to extract YouTube video ID from URL
function getYouTubeVideoId($url) {
    if (empty($url)) {
        return null;
    }
    
    // If it's already just a video ID (no URL)
    if (preg_match('/^[a-zA-Z0-9_-]{11}$/', $url)) {
        return $url;
    }
    
    // Extract from various YouTube URL formats
    $patterns = [
        '/youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/',
        '/youtu\.be\/([a-zA-Z0-9_-]+)/',
        '/youtube\.com\/embed\/([a-zA-Z0-9_-]+)/',
        '/youtube\.com\/v\/([a-zA-Z0-9_-]+)/',
    ];
    
    foreach ($patterns as $pattern) {
        if (preg_match($pattern, $url, $matches)) {
            return $matches[1];
        }
    }
    
    return null;
}
@endphp

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
                      @if(!empty($sponsor['youtube_video']))
                      <button type="button" class="sponsor-button sponsor-video-button" data-bs-toggle="modal" data-bs-target="#youtubeModal" data-video-id="{{ getYouTubeVideoId($sponsor['youtube_video']) }}" data-sponsor-name="{{ $sponsor['name'] }}">
                        
                        @if (app()->getLocale() === 'vi')
                          Video giới thiệu
                        @else
                          Introduction video
                        @endif
                      </button>
                      @endif
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
                      @if(!empty($sponsor['youtube_video']))
                      <button type="button" class="sponsor-button sponsor-video-button" data-bs-toggle="modal" data-bs-target="#youtubeModal" data-video-id="{{ getYouTubeVideoId($sponsor['youtube_video']) }}" data-sponsor-name="{{ $sponsor['name'] }}">
                        
                        @if (app()->getLocale() === 'vi')
                          Video giới thiệu
                        @else
                          Introduction video
                        @endif
                      </button>
                      @endif
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
                      @if(!empty($sponsor['youtube_video']))
                      <button type="button" class="sponsor-button sponsor-video-button" data-bs-toggle="modal" data-bs-target="#youtubeModal" data-video-id="{{ getYouTubeVideoId($sponsor['youtube_video']) }}" data-sponsor-name="{{ $sponsor['name'] }}">
                        
                        @if (app()->getLocale() === 'vi')
                          Video giới thiệu
                        @else
                          Introduction video
                        @endif
                      </button>
                      @endif
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
                      @if(!empty($sponsor['youtube_video']))
                      <button type="button" class="sponsor-button sponsor-video-button" data-bs-toggle="modal" data-bs-target="#youtubeModal" data-video-id="{{ getYouTubeVideoId($sponsor['youtube_video']) }}" data-sponsor-name="{{ $sponsor['name'] }}">
                        
                        @if (app()->getLocale() === 'vi')
                          Video giới thiệu
                        @else
                          Introduction video
                        @endif
                      </button>
                      @endif
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
                      @if(!empty($sponsor['youtube_video']))
                      <button type="button" class="sponsor-button sponsor-video-button" data-bs-toggle="modal" data-bs-target="#youtubeModal" data-video-id="{{ getYouTubeVideoId($sponsor['youtube_video']) }}" data-sponsor-name="{{ $sponsor['name'] }}">
                        
                        @if (app()->getLocale() === 'vi')
                          Video giới thiệu
                        @else
                          Introduction video
                        @endif
                      </button>
                      @endif
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
                      @if(!empty($sponsor['youtube_video']))
                      <button type="button" class="sponsor-button sponsor-video-button" data-bs-toggle="modal" data-bs-target="#youtubeModal" data-video-id="{{ getYouTubeVideoId($sponsor['youtube_video']) }}" data-sponsor-name="{{ $sponsor['name'] }}">
                        
                        @if (app()->getLocale() === 'vi')
                          Video giới thiệu
                        @else
                          Introduction video
                        @endif
                      </button>
                      @endif
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

  <!-- YouTube Video Modal -->
  <div class="modal fade" id="youtubeModal" tabindex="-1" aria-labelledby="youtubeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-body">
          <div class="video-container-wrapper">
            <div class="ratio ratio-16x9">
              <iframe id="youtubePlayer" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <button type="button" class="btn-close modal-close-btn" data-bs-dismiss="modal" aria-label="Close">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('head')
  <style>
    /* Diamond Sponsors Banner */
    .sponsors-banner {
      background: linear-gradient(135deg, #5aa857 0%, #95e994 100%);
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
      background-color: #f3f3f3;
    }

    .sponsor-logo-section {
      text-align: center;
      margin-bottom: 2rem;
      flex-grow: 1;
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

    .sponsor-video-button {
      background: #6cbb6a !important;
      border: none;
      cursor: pointer;
    }

    .sponsor-video-button:hover {
      background: #5aa857 !important;
    }

    /* YouTube Modal Styles */
    #youtubeModal .modal-content {
      border-radius: 0px !important;
      overflow: hidden;
      background: transparent !important;
      border: none !important;
    }

    #youtubeModal {
      z-index: 999999 !important;
    }

    /* Modal backdrop (overlay) - đảm bảo hiển thị trên cùng */
    .modal-backdrop {
      z-index: 999998 !important;
    }

    .modal-backdrop.show {
      z-index: 999998 !important;
      opacity: 0.5;
    }

    /* Đảm bảo modal backdrop khi modal đang mở */
    body.modal-open .modal-backdrop {
      z-index: 999998 !important;
    }

    #youtubeModal .modal-body {
      padding: 0;
      background: transparent;
    }

    /* Container wrapper cho video và nút đóng */
    #youtubeModal .video-container-wrapper {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      /* padding: 10px; */
    }

    /* Video container chiếm phần lớn không gian */
    #youtubeModal .video-container-wrapper .ratio {
      flex: 1;
      background: #000;
    }

    /* Nút đóng modal - đặt bên ngoài, bên cạnh video */
    #youtubeModal .modal-close-btn,
    #youtubeModal .btn-close {
      flex-shrink: 0;
      width: 20px;
      height: 20px;
      background: transparent !important;
      background-color: transparent !important;
      border-radius: 4px;
      opacity: 0.8;
      transition: all 0.3s ease;
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: none !important;
      filter: brightness(0) invert(1); /* Đảm bảo icon X màu trắng */
    }

    #youtubeModal .modal-close-btn:hover,
    #youtubeModal .btn-close:hover {
      opacity: 1;
      background: transparent !important;
      background-color: transparent !important;
      border-color: rgba(255, 255, 255, 0.4);
      box-shadow: none !important;
    }

    #youtubeModal .modal-close-btn:focus,
    #youtubeModal .btn-close:focus {
      background: transparent !important;
      background-color: transparent !important;
      box-shadow: none !important;
      outline: none;
    }

    #youtubeModal .modal-close-btn::before,
    #youtubeModal .btn-close::before,
    #youtubeModal .modal-close-btn::after,
    #youtubeModal .btn-close::after {
      background-color: rgba(255, 255, 255, 0.8) !important;
    }

    #youtubeModal iframe {
      width: 100%;
      height: 100%;
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

      // YouTube Modal Handler
      const youtubeModal = document.getElementById('youtubeModal');
      const youtubePlayer = document.getElementById('youtubePlayer');

      if (youtubeModal) {
        youtubeModal.addEventListener('show.bs.modal', function (event) {
          const button = event.relatedTarget;
          const videoId = button.getAttribute('data-video-id');
          
          // Set iframe src with autoplay
          youtubePlayer.src = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0';
        });

        youtubeModal.addEventListener('hide.bs.modal', function () {
          // Stop video when modal is closed
          youtubePlayer.src = '';
        });
      }
    });
  </script>
@endsection
