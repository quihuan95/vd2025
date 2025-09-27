@extends('layouts.app')
@php use Illuminate\Support\Facades\Storage; @endphp

@section('title', __('promotional.title'))
@section('description', __('promotional.description'))
@section('keywords', __('promotional.keywords'))

@section('og_title', __('promotional.title'))
@section('og_description', __('promotional.description'))
@section('og_image', Storage::url('images/og/wces2025-promotional-toolkit-og.jpg'))

@section('body_class', 'com-pages view-module alias- path-promotional-toolkit- cva-pages-module no-user not-home width-full')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ __('promotional.page_title') }}</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section id="fMatter" class="col-12">
        <div id="f-messages"></div>

        <!-- Promotional Toolkit Content -->
        <div class='fModule f-promotional-toolkit pb-0 f-module f-module-pages-custom'>
          <div class="f-module-content fModuleContent">
            <div class="container bg-light p-4">
              <h3 class="text-center mb-4">
                <span style="color: var(--brand-color-1);">
                  <strong>{{ __('promotional.content.header.title') }}</strong>
                </span>
              </h3>

              <!-- Navigation Tabs -->
              <ul class="nav nav-tabs nav-tabs-main d-flex flex-wrap justify-content-center mb-4" id="nav-tabs-main" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="brochure-tab" data-bs-toggle="tab" data-bs-target="#brochure" type="button" role="tab" aria-controls="brochure"
                    aria-selected="true">
                    {{ __('promotional.content.tabs.brochure') }}
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="header-tab" data-bs-toggle="tab" data-bs-target="#header" type="button" role="tab" aria-controls="header" aria-selected="false">
                    {{ __('promotional.content.tabs.header') }}
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="social-tab" data-bs-toggle="tab" data-bs-target="#social" type="button" role="tab" aria-controls="social" aria-selected="false">
                    {{ __('promotional.content.tabs.social') }}
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="email-tab" data-bs-toggle="tab" data-bs-target="#email" type="button" role="tab" aria-controls="email" aria-selected="false">
                    {{ __('promotional.content.tabs.email') }}
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="powerpoint-tab" data-bs-toggle="tab" data-bs-target="#powerpoint" type="button" role="tab" aria-controls="powerpoint"
                    aria-selected="false">
                    {{ __('promotional.content.tabs.powerpoint') }}
                  </button>
                </li>
              </ul>

              <!-- Tab Content -->
              <div class="tab-content" id="nav-tabContent">
                <!-- Brochure Tab -->
                <div class="tab-pane fade show active" id="brochure" role="tabpanel" aria-labelledby="brochure-tab">
                  <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-4">
                      <div class="card h-100">
                        <div class="card-img-top">
                          <img src="https://storage.unitedwebnetwork.com/files/1212/brochure-image_269670.jpg" alt="Comprehensive Brochure WCES 2025" class="img-fluid">
                        </div>
                        <div class="card-body d-flex flex-column">
                          <h5 class="card-title">Comprehensive Brochure WCES 2025</h5>
                          <p class="card-text flex-grow-1">Complete information about WCES 2025 in a comprehensive brochure format.</p>
                          <a href="https://storage.unitedwebnetwork.com/files/1212/WCES 4 Folded 2_compressed_311761.pdf" target="_blank" class="btn btn-primary download-pdf-word">
                            <i class="fas fa-download me-2"></i>Download PDF
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- General Header Tab -->
                <div class="tab-pane fade" id="header" role="tabpanel" aria-labelledby="header-tab">
                  <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                      <div class="card h-100">
                        <div class="card-img-top">
                          <img src="https://storage.unitedwebnetwork.com/files/1212/WCES%20Web%20Banner-01_269668.jpg" alt="WCES 2025 Website Banner 1" class="img-fluid">
                        </div>
                        <div class="card-body d-flex flex-column">
                          <h5 class="card-title">WCES 2025 Website Banner 1</h5>
                          <p class="card-text flex-grow-1">Professional website banner for online promotion.</p>
                          <a href="https://storage.unitedwebnetwork.com/files/1212/WCES%20Web%20Banner-01_269668.jpg" target="_blank" class="btn btn-primary download-kit">
                            <i class="fas fa-download me-2"></i>Download
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                      <div class="card h-100">
                        <div class="card-img-top">
                          <img src="https://storage.unitedwebnetwork.com/files/1212/WCES%20Website%20Banner%201920X750_269667.jpg" alt="WCES 2025 Website Banner 2"
                            class="img-fluid">
                        </div>
                        <div class="card-body d-flex flex-column">
                          <h5 class="card-title">WCES 2025 Website Banner 2</h5>
                          <p class="card-text flex-grow-1">Alternative website banner design for different layouts.</p>
                          <a href="https://storage.unitedwebnetwork.com/files/1212/WCES%20Website%20Banner%201920X750_269667.jpg" target="_blank"
                            class="btn btn-primary download-kit">
                            <i class="fas fa-download me-2"></i>Download
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Social Media Post Tab -->
                <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                  <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                      <div class="card h-100">
                        <div class="card-img-top">
                          <img src="https://storage.unitedwebnetwork.com/files/1212/Social%20Media%20Toolkit%201_269665.jpg" alt="I am Attending - Attendee" class="img-fluid">
                        </div>
                        <div class="card-body d-flex flex-column">
                          <h5 class="card-title">I am Attending - Attendee</h5>
                          <p class="card-text flex-grow-1">Social media post template for attendees to share their participation.</p>
                          <a href="https://storage.unitedwebnetwork.com/files/1212/Social%20Media%20Toolkit%201_269665.jpg" target="_blank" class="btn btn-primary download-kit">
                            <i class="fas fa-download me-2"></i>Download
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                      <div class="card h-100">
                        <div class="card-img-top">
                          <img src="https://storage.unitedwebnetwork.com/files/1212/Social%20Media%20Toolkit%202_269666.jpg" alt="I am Attending - Sponsor" class="img-fluid">
                        </div>
                        <div class="card-body d-flex flex-column">
                          <h5 class="card-title">I am Attending - Sponsor</h5>
                          <p class="card-text flex-grow-1">Social media post template for sponsors to promote their involvement.</p>
                          <a href="https://storage.unitedwebnetwork.com/files/1212/Social%20Media%20Toolkit%202_269666.jpg" target="_blank" class="btn btn-primary download-kit">
                            <i class="fas fa-download me-2"></i>Download
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                      <div class="card h-100">
                        <div class="card-img-top">
                          <img src="https://storage.unitedwebnetwork.com/files/1212/Social%20Media%20Toolkit%203_269664.jpg" alt="I am Attending - Speaker" class="img-fluid">
                        </div>
                        <div class="card-body d-flex flex-column">
                          <h5 class="card-title">I am Attending - Speaker</h5>
                          <p class="card-text flex-grow-1">Social media post template for speakers to announce their participation.</p>
                          <a href="https://storage.unitedwebnetwork.com/files/1212/Social%20Media%20Toolkit%203_269664.jpg" target="_blank" class="btn btn-primary download-kit">
                            <i class="fas fa-download me-2"></i>Download
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Email Signature Tab -->
                <div class="tab-pane fade" id="email" role="tabpanel" aria-labelledby="email-tab">
                  <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-4">
                      <div class="card h-100">
                        <div class="card-img-top">
                          <img src="https://storage.unitedwebnetwork.com/files/1212/Email%20Signature_269663.jpg" alt="Email Signature" class="img-fluid">
                        </div>
                        <div class="card-body d-flex flex-column">
                          <h5 class="card-title">Email Signature</h5>
                          <p class="card-text flex-grow-1">Professional email signature template to promote WCES 2025.</p>
                          <a href="https://storage.unitedwebnetwork.com/files/1212/Email%20Signature_269663.jpg" target="_blank" class="btn btn-primary download-kit">
                            <i class="fas fa-download me-2"></i>Download
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Powerpoint Tab -->
                <div class="tab-pane fade" id="powerpoint" role="tabpanel" aria-labelledby="powerpoint-tab">
                  <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-4">
                      <div class="card h-100">
                        <div class="card-img-top">
                          <img src="https://storage.unitedwebnetwork.com/files/1212/WCES%202025%20PPT%20Template_282066.png" alt="Powerpoint" class="img-fluid">
                        </div>
                        <div class="card-body d-flex flex-column">
                          <h5 class="card-title">Powerpoint Template</h5>
                          <p class="card-text flex-grow-1">Professional PowerPoint template for presentations about WCES 2025.</p>
                          <a href="https://storage.unitedwebnetwork.com/files/1212/WCES 2025 PPT Template_282064.pptx" target="_blank" class="btn btn-primary download-kit">
                            <i class="fas fa-download me-2"></i>Download PPTX
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Usage Guidelines -->
              <div class="mt-5">
                <h4 class="text-center mb-4">Usage Guidelines</h4>
                <div class="row">
                  <div class="col-md-6">
                    <h5>Do's</h5>
                    <ul>
                      <li>Use materials for WCES 2025 promotion only</li>
                      <li>Maintain the original design integrity</li>
                      <li>Include proper attribution when required</li>
                      <li>Share on your social media platforms</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <h5>Don'ts</h5>
                    <ul>
                      <li>Don't modify the logos or branding</li>
                      <li>Don't use for commercial purposes without permission</li>
                      <li>Don't alter the color schemes</li>
                      <li>Don't use outdated materials</li>
                    </ul>
                  </div>
                </div>
              </div>
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
      // Download functionality for images
      $('.download-kit').on('click', function(e) {
        e.preventDefault();

        var imageUrl = $(this).attr('href');
        if (imageUrl.match(/\.(jpg|png|webp|avif)$/i)) {
          var proxyUrl = 'https://api.allorigins.win/raw?url=';

          fetch(proxyUrl + encodeURIComponent(imageUrl))
            .then(response => {
              if (!response.ok) {
                console.error('Network response was not OK:', response.status, response.statusText);
                throw new Error('Network response was not OK');
              }
              return response.blob();
            })
            .then(blob => {
              if (!blob || blob.size === 0) {
                console.error('Download failed: Blob is empty.');
                throw new Error('Download failed');
              }

              var url = URL.createObjectURL(blob);
              var a = document.createElement('a');
              a.href = url;
              a.download = imageUrl.split('/').pop();
              document.body.appendChild(a);
              a.click();
              document.body.removeChild(a);
              URL.revokeObjectURL(url);
              console.log('Download successful:', imageUrl);
            })
            .catch(error => {
              console.error('Download failed:', error.message);
              // Fallback to direct download
              window.open(imageUrl, '_blank');
            });
        } else {
          // For non-image files, open in new tab
          window.open(imageUrl, '_blank');
        }
      });

      // Tab switching animation
      $('.nav-tabs-main button').on('click', function() {
        $('.nav-tabs-main button').removeClass('active');
        $(this).addClass('active');
      });
    });
  </script>
@endsection

@section('head')
  <style>
    .f-promotional-toolkit .nav-tabs-main {
      border-bottom: 2px solid var(--brand-color-1);
    }

    .f-promotional-toolkit .nav-tabs-main .nav-link {
      background-color: var(--brand-color-1);
      color: white;
      border: none;
      border-radius: 8px 8px 0 0;
      margin-right: 0.5rem;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .f-promotional-toolkit .nav-tabs-main .nav-link:hover {
      background-color: var(--brand-color-2);
      color: white;
    }

    .f-promotional-toolkit .nav-tabs-main .nav-link.active {
      background-color: white;
      color: var(--brand-color-1);
      border-bottom: 2px solid white;
    }

    .f-promotional-toolkit .card {
      border: none;
      border-radius: 12px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .f-promotional-toolkit .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }

    .f-promotional-toolkit .card-img-top {
      border-radius: 12px 12px 0 0;
      overflow: hidden;
    }

    .f-promotional-toolkit .card-img-top img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .f-promotional-toolkit .card:hover .card-img-top img {
      transform: scale(1.05);
    }

    .f-promotional-toolkit .btn-primary {
      background-color: var(--brand-color-1);
      border-color: var(--brand-color-1);
      border-radius: 8px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .f-promotional-toolkit .btn-primary:hover {
      background-color: var(--brand-color-2);
      border-color: var(--brand-color-2);
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .f-promotional-toolkit .tab-content {
      min-height: 400px;
    }

    .f-promotional-toolkit .tab-pane {
      animation: fadeIn 0.3s ease-in;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(10px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .f-promotional-toolkit h4 {
      color: var(--brand-color-1);
      font-weight: 600;
    }

    .f-promotional-toolkit h5 {
      color: var(--brand-color-1);
      font-weight: 600;
    }

    .f-promotional-toolkit ul li {
      margin-bottom: 0.5rem;
    }

    @media (max-width: 768px) {
      .f-promotional-toolkit .nav-tabs-main {
        flex-direction: column;
      }

      .f-promotional-toolkit .nav-tabs-main .nav-link {
        margin-right: 0;
        margin-bottom: 0.5rem;
        border-radius: 8px;
      }
    }
  </style>
@endsection
