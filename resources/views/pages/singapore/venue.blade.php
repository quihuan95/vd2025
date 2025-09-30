@extends('layouts.app')
@php use Illuminate\Support\Facades\Storage; @endphp

@section('title', __('singapore.venue.title'))
@section('description', __('singapore.venue.description'))
@section('keywords', __('singapore.venue.keywords'))

@section('og_title', __('singapore.venue.title'))
@section('og_description', __('singapore.venue.description'))
@section('og_image', Storage::url('images/og/vduhsc2025-venue-og.jpg'))

@section('body_class', 'com-pages view-module alias- path-singapore-venue- cva-pages-module no-user not-home width-full')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ __('singapore.venue.page_title') }}</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section id="fMatter" class="col-12">
        <div id="f-messages"></div>

        <!-- Coming Soon Content -->
        <div class='fModule f-venue-coming-soon f-module f-module-pages-custom'>
          <div class="f-module-content fModuleContent">
            <div class="coming-soon-container text-center">
              <h2 class="coming-soon-title mb-3">
                @if (app()->getLocale() === 'vi')
                  Địa điểm tổ chức - Sắp ra mắt
                @else
                  Venue Information - Coming Soon
                @endif
              </h2>

              <p class="coming-soon-description lead mb-4">
                @if (app()->getLocale() === 'vi')
                  Chúng tôi đang chuẩn bị thông tin chi tiết về địa điểm tổ chức VDUHSC 2025 tại Hà Nội.
                  Thông tin về khách sạn, hội trường và hướng dẫn di chuyển sẽ được công bố sớm.
                @else
                  We are preparing detailed information about the VDUHSC 2025 venue in Hanoi.
                  Details about the hotel, conference halls, and transportation guide will be announced soon.
                @endif
              </p>

              <div class="coming-soon-features mb-4">
                <div class="row justify-content-center">
                  <div class="col-md-4 mb-3">
                    <div class="feature-item">
                      <i class="fas fa-hotel fa-2x text-primary mb-2"></i>
                      <h5>
                        @if (app()->getLocale() === 'vi')
                          Khách sạn hội nghị
                        @else
                          Conference Hotel
                        @endif
                      </h5>
                      <p class="small text-muted">
                        @if (app()->getLocale() === 'vi')
                          Thông tin chi tiết về khách sạn địa điểm tổ chức
                        @else
                          Detailed information about the conference hotel
                        @endif
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="feature-item">
                      <i class="fas fa-map-marked-alt fa-2x text-primary mb-2"></i>
                      <h5>
                        @if (app()->getLocale() === 'vi')
                          Sơ đồ hội trường
                        @else
                          Hall Layout
                        @endif
                      </h5>
                      <p class="small text-muted">
                        @if (app()->getLocale() === 'vi')
                          Bản đồ và sơ đồ bố trí các phòng hội nghị
                        @else
                          Maps and layout of conference rooms
                        @endif
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="feature-item">
                      <i class="fas fa-route fa-2x text-primary mb-2"></i>
                      <h5>
                        @if (app()->getLocale() === 'vi')
                          Hướng dẫn di chuyển
                        @else
                          Transportation Guide
                        @endif
                      </h5>
                      <p class="small text-muted">
                        @if (app()->getLocale() === 'vi')
                          Cách di chuyển đến địa điểm từ sân bay và trung tâm thành phố
                        @else
                          How to get to the venue from airport and city center
                        @endif
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="coming-soon-alert alert alert-info">
                <i class="fas fa-info-circle me-2"></i>
                <strong>
                  @if (app()->getLocale() === 'vi')
                    Thông tin địa điểm sẽ được cập nhật liên tục. Vui lòng quay lại sau!
                  @else
                    Venue information will be updated continuously. Please check back soon!
                  @endif
                </strong>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection

@section('head')
  <style>
    .coming-soon-container {
      padding: 4rem 2rem;
      background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
      border-radius: 1rem;
      margin: 2rem 0;
      max-width: 1300px;
      margin-left: auto;
      margin-right: auto;
    }

    .coming-soon-title {
      color: var(--brand-color-1);
      font-weight: 700;
      margin-bottom: 1.5rem;
    }

    .coming-soon-description {
      color: #6c757d;
      font-size: 1.1rem;
      line-height: 1.6;
    }

    .feature-item {
      padding: 1.5rem;
      background: white;
      border-radius: 0.5rem;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
      height: 100%;
    }

    .feature-item:hover {
      transform: translateY(-5px);
    }

    .feature-item h5 {
      color: var(--brand-color-1);
      font-weight: 600;
      margin-bottom: 0.5rem;
    }

    .coming-soon-alert {
      background-color: #e7f3ff;
      border: 1px solid #b3d9ff;
      color: #0066cc;
      border-radius: 0.5rem;
      padding: 1.5rem;
      margin-top: 2rem;
    }

    .coming-soon-alert i {
      color: var(--brand-color-1);
    }

    @media (max-width: 768px) {
      .coming-soon-container {
        padding: 2rem 1rem;
        margin: 1rem 0;
      }

      .coming-soon-title {
        font-size: 1.5rem;
      }

      .coming-soon-description {
        font-size: 1rem;
      }

      .feature-item {
        padding: 1rem;
        margin-bottom: 1rem;
      }
    }
  </style>
@endsection
