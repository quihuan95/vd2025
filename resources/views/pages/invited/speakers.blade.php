@extends('layouts.app')
@php use Illuminate\Support\Facades\Storage; @endphp

@section('title', __('speakers.title'))
@section('description', __('speakers.description'))
@section('keywords', __('speakers.keywords'))

@section('og_title', __('speakers.title'))
@section('og_description', __('speakers.description'))
@section('og_image', Storage::url('images/og/vduhsc2025-speakers-og.jpg'))

@section('body_class', 'com-pages view-module alias- path-invited-speakers- cva-pages-module no-user not-home')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ __('speakers.page_title') }}</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section id="fMatter" class="col-12">
        <div id="f-messages"></div>

        <!-- Coming Soon Content -->
        <div class='fModule f-speakers-coming-soon f-module f-module-pages-custom'>
          <div class="f-module-content fModuleContent">
            <div class="coming-soon-container text-center">

              <h2 class="coming-soon-title mb-3">
                @if (app()->getLocale() === 'vi')
                  Diễn giả mời - Sắp ra mắt
                @else
                  Invited Speakers - Coming Soon
                @endif
              </h2>
              <div class="coming-soon-alert alert alert-info">
                <i class="fas fa-info-circle me-2"></i>
                <strong>
                  @if (app()->getLocale() === 'vi')
                    Thông tin diễn giả sẽ được cập nhật liên tục. Vui lòng quay lại sau!
                  @else
                    Speaker information will be updated continuously. Please check back soon!
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
    }

    .coming-soon-icon i {
      animation: pulse 2s infinite;
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

    @keyframes pulse {
      0% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.05);
      }

      100% {
        transform: scale(1);
      }
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
