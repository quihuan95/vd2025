
@extends('layouts.app')
@php 
use Illuminate\Support\Facades\Storage;

// Helper function to get video URL (returns the URL as-is)
function getVideoUrl($url) {
    if (empty($url)) {
        return null;
    }
    return $url;
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
                      <button type="button" class="sponsor-button sponsor-video-button" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-url="{{ getVideoUrl($sponsor['youtube_video']) }}" data-sponsor-name="{{ $sponsor['name'] }}">
                        
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
                      <button type="button" class="sponsor-button sponsor-video-button" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-url="{{ getVideoUrl($sponsor['youtube_video']) }}" data-sponsor-name="{{ $sponsor['name'] }}">
                        
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
                      <button type="button" class="sponsor-button sponsor-video-button" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-url="{{ getVideoUrl($sponsor['youtube_video']) }}" data-sponsor-name="{{ $sponsor['name'] }}">
                        
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
                      <button type="button" class="sponsor-button sponsor-video-button" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-url="{{ getVideoUrl($sponsor['youtube_video']) }}" data-sponsor-name="{{ $sponsor['name'] }}">
                        
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
                      <button type="button" class="sponsor-button sponsor-video-button" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-url="{{ getVideoUrl($sponsor['youtube_video']) }}" data-sponsor-name="{{ $sponsor['name'] }}">
                        
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
                      <button type="button" class="sponsor-button sponsor-video-button" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-url="{{ getVideoUrl($sponsor['youtube_video']) }}" data-sponsor-name="{{ $sponsor['name'] }}">
                        
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

  <!-- Video Modal -->
  <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-body">
          <div class="video-container-wrapper">
            <div class="ratio ratio-16x9">
              <video
                id="videoPlayer"
                class="video-js vjs-default-skin vjs-big-play-centered"
                preload="auto"
                data-setup="{}">
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider upgrading to a web browser that
                  <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>.
                </p>
              </video>
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

    /* Video Modal Styles */
    #videoModal .modal-content {
      border-radius: 0px !important;
      overflow: hidden;
      background: transparent !important;
      border: none !important;
    }

    #videoModal {
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

    #videoModal .modal-body {
      padding: 0;
      background: transparent;
    }

    /* Container wrapper cho video và nút đóng */
    #videoModal .video-container-wrapper {
      position: relative;
      display: flex;
      align-items: flex-start;
      gap: 10px;
    }

    /* Video container chiếm phần lớn không gian */
    #videoModal .video-container-wrapper .ratio {
      position: relative;
      flex: 1;
      background: #000;
    }

    /* Nút đóng modal - đặt ở góc trên bên phải */
    #videoModal .modal-close-btn,
    #videoModal .btn-close {
      position: absolute;
      top: 10px;
      right: 10px;
      z-index: 1000;
      width: 30px;
      height: 30px;
      background: rgba(0, 0, 0, 0.5) !important;
      background-color: rgba(0, 0, 0, 0.5) !important;
      border-radius: 4px;
      opacity: 0.8;
      transition: all 0.3s ease;
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: none !important;
      filter: brightness(0) invert(1); /* Đảm bảo icon X màu trắng */
    }

    #videoModal .modal-close-btn:hover,
    #videoModal .btn-close:hover {
      opacity: 1;
      background: rgba(0, 0, 0, 0.7) !important;
      background-color: rgba(0, 0, 0, 0.7) !important;
      border-color: rgba(255, 255, 255, 0.4);
      box-shadow: none !important;
    }

    #videoModal .modal-close-btn:focus,
    #videoModal .btn-close:focus {
      background: rgba(0, 0, 0, 0.5) !important;
      background-color: rgba(0, 0, 0, 0.5) !important;
      box-shadow: none !important;
      outline: none;
    }

    #videoModal .modal-close-btn::before,
    #videoModal .btn-close::before,
    #videoModal .modal-close-btn::after,
    #videoModal .btn-close::after {
      background-color: rgba(255, 255, 255, 0.8) !important;
    }

    /* Video.js Customization */
    #videoModal .video-container-wrapper {
      position: relative;
    }

    #videoModal .video-container-wrapper .ratio {
      position: relative;
      background: #000;
    }

    #videoModal .video-js {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #000;
    }

    /* Customize Video.js controls to match theme */
    #videoModal .video-js .vjs-control-bar {
      display: flex !important;
      background: linear-gradient(to top, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.5) 100%);
      opacity: 1 !important;
      visibility: visible !important;
    }

    #videoModal .video-js:hover .vjs-control-bar {
      opacity: 1 !important;
    }

    #videoModal .video-js .vjs-play-progress,
    #videoModal .video-js .vjs-volume-level {
      background-color: #6cbb6a !important;
    }

    #videoModal .video-js .vjs-play-progress .vjs-play-progress-bar {
      background-color: #6cbb6a !important;
    }

    #videoModal .video-js .vjs-big-play-button {
      background-color: rgba(108, 187, 106, 0.8) !important;
      border-color: #6cbb6a !important;
      border-radius: 50% !important;
      width: 80px !important;
      height: 80px !important;
      line-height: 80px !important;
      margin-top: -40px !important;
      margin-left: -40px !important;
      font-size: 2.5em !important;
    }

    #videoModal .video-js .vjs-big-play-button:hover {
      background-color: rgba(108, 187, 106, 0.9) !important;
      border-color: #5aa857 !important;
    }

    #videoModal .video-js .vjs-control:focus,
    #videoModal .video-js .vjs-control:focus:before,
    #videoModal .video-js .vjs-control:hover:before {
      color: #6cbb6a !important;
    }

    /* Ensure controls are always visible */
    #videoModal .video-js.vjs-user-inactive .vjs-control-bar {
      opacity: 1 !important;
      visibility: visible !important;
    }

    /* Make sure Video.js has proper dimensions */
    #videoModal .video-js {
      min-width: 640px;
      min-height: 360px;
    }

    /* Force controls to show */
    #videoModal .video-js.vjs-has-started .vjs-control-bar {
      opacity: 1 !important;
      visibility: visible !important;
      display: flex !important;
    }

    #videoModal .video-js.vjs-playing .vjs-control-bar {
      opacity: 1 !important;
      visibility: visible !important;
      display: flex !important;
    }

    #videoModal .video-js.vjs-paused .vjs-control-bar {
      opacity: 1 !important;
      visibility: visible !important;
      display: flex !important;
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

      // Video.js Modal Handler
      const videoModal = document.getElementById('videoModal');
      if (!videoModal) return;

      let videojsPlayer = null;
      const videoContainer = videoModal.querySelector('.video-container-wrapper .ratio');

      // Wait for Video.js to be loaded
      function initVideoJS(videoUrl) {
        if (typeof videojs === 'undefined') {
          console.error('Video.js is not loaded');
          return;
        }

        // Check if video element exists, if not create it
        let videoEl = document.getElementById('videoPlayer');
        
        // If video element doesn't exist (was removed by dispose), recreate it
        if (!videoEl && videoContainer) {
          videoEl = document.createElement('video');
          videoEl.id = 'videoPlayer';
          videoEl.className = 'video-js vjs-default-skin vjs-big-play-centered';
          videoEl.setAttribute('preload', 'auto');
          videoEl.setAttribute('data-setup', '{}');
          
          const noJsMsg = document.createElement('p');
          noJsMsg.className = 'vjs-no-js';
          noJsMsg.innerHTML = 'To view this video please enable JavaScript, and consider upgrading to a web browser that ' +
            '<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>.';
          videoEl.appendChild(noJsMsg);
          
          videoContainer.appendChild(videoEl);
        }

        if (!videoEl) {
          console.error('Video element not found and could not be created');
          return;
        }

        // Destroy existing player if any
        if (videojsPlayer) {
          try {
            // Check if player is still attached to an element
            if (videojsPlayer.el() && videojsPlayer.el().parentNode) {
              videojsPlayer.dispose();
            }
          } catch (e) {
            console.log('Error disposing player:', e);
          }
          videojsPlayer = null;
        }

        // Get container dimensions
        const container = videoEl.closest('.ratio');
        const width = container ? container.offsetWidth : 640;
        const height = container ? container.offsetHeight : 360;

        // Initialize Video.js player
        try {
          videojsPlayer = videojs(videoEl, {
            controls: true,
            autoplay: false,
            preload: 'auto',
            fluid: false,
            responsive: false,
            width: width,
            height: height,
            playbackRates: [0.5, 0.75, 1, 1.25, 1.5, 2],
            userActions: {
              hotkeys: true
            }
          });

          // Set video source when ready
          videojsPlayer.ready(function() {
            this.src({
              type: 'video/mp4',
              src: videoUrl
            });
            
            // Load the video
            this.load();
            
            // Try to autoplay (may be blocked by browser)
            this.play().catch(function(error) {
              console.log('Autoplay prevented:', error);
            });
          });

          // Error handling
          videojsPlayer.on('error', function() {
            console.error('Video.js error:', this.error());
          });
        } catch (e) {
          console.error('Error initializing Video.js:', e);
        }
      }

      // Initialize Video.js when modal opens
      videoModal.addEventListener('shown.bs.modal', function (event) {
        const button = event.relatedTarget;
        const videoUrl = button.getAttribute('data-video-url');
        
        if (videoUrl) {
          // Wait a bit for modal animation to complete
          setTimeout(() => {
            initVideoJS(videoUrl);
          }, 300);
        }
      });

      // Cleanup when modal closes
      videoModal.addEventListener('hide.bs.modal', function () {
        if (videojsPlayer) {
          try {
            // Pause and reset video
            videojsPlayer.pause();
            videojsPlayer.currentTime(0);
            
            // Get the video element before dispose
            const playerEl = videojsPlayer.el();
            const videoElement = playerEl && playerEl.tagName === 'VIDEO' ? playerEl : playerEl.querySelector('video');
            
            // Dispose player with preserveEl option to keep the element
            try {
              videojsPlayer.dispose({ preserveEl: true });
            } catch (disposeError) {
              // If preserveEl doesn't work, try standard dispose
              try {
                videojsPlayer.dispose();
              } catch (e) {
                console.log('Error disposing player:', e);
              }
            }
            
            videojsPlayer = null;
            
            // Ensure video element still exists, if not recreate it
            if (!document.getElementById('videoPlayer') && videoContainer) {
              const newVideoEl = document.createElement('video');
              newVideoEl.id = 'videoPlayer';
              newVideoEl.className = 'video-js vjs-default-skin vjs-big-play-centered';
              newVideoEl.setAttribute('preload', 'auto');
              newVideoEl.setAttribute('data-setup', '{}');
              
              const noJsMsg = document.createElement('p');
              noJsMsg.className = 'vjs-no-js';
              noJsMsg.innerHTML = 'To view this video please enable JavaScript, and consider upgrading to a web browser that ' +
                '<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>.';
              newVideoEl.appendChild(noJsMsg);
              
              videoContainer.appendChild(newVideoEl);
            } else if (videoElement && videoElement.id === 'videoPlayer') {
              // Clean up the video element: remove sources and restore classes
              const sources = videoElement.querySelectorAll('source');
              sources.forEach(src => src.remove());
              videoElement.className = 'video-js vjs-default-skin vjs-big-play-centered';
              videoElement.removeAttribute('src');
              videoElement.removeAttribute('data-setup');
            }
          } catch (e) {
            console.log('Error cleaning up player:', e);
            // Force cleanup and recreate element if needed
            videojsPlayer = null;
            if (!document.getElementById('videoPlayer') && videoContainer) {
              const newVideoEl = document.createElement('video');
              newVideoEl.id = 'videoPlayer';
              newVideoEl.className = 'video-js vjs-default-skin vjs-big-play-centered';
              newVideoEl.setAttribute('preload', 'auto');
              newVideoEl.setAttribute('data-setup', '{}');
              videoContainer.appendChild(newVideoEl);
            }
          }
        }
      });
    });
  </script>
@endsection
