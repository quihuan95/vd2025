@extends('layouts.app')
@php use Illuminate\Support\Facades\Storage; @endphp

@section('title', __('programme.pages.31_oct.title'))
@section('description', __('programme.pages.31_oct.description'))
@section('keywords', __('programme.pages.31_oct.keywords'))

@section('og_title', __('programme.pages.31_oct.title'))
@section('og_description', __('programme.pages.31_oct.description'))
@section('og_image', Storage::url('images/og/wces2025-31oct-og.jpg'))

@section('body_class', 'com-pages view-module alias- path-programme-31-oct- cva-pages-module no-user not-home width-full')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ __('programme.pages.31_oct.page_title') }}</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section id="fMatter" class="col-12">
        <div id="f-messages"></div>

        <!-- Programme Content -->
        <div class='fModule f-programme-content f-module f-module-pages-custom'>
          <div class="f-module-content fModuleContent">
            <div class="programme-container">
              <!-- Image Gallery -->
              <div class="image-gallery">
                @if (count($images) > 0)
                  <div class="row">
                    @foreach ($images as $index => $image)
                      <!-- Desktop: 2 columns, Mobile: 1 column -->
                      <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
                        <div class="gallery-item">
                          <img src="{{ $image['url'] }}" alt="{{ __('programme.pages.31_oct.page_title') }} - {{ $image['filename'] }}" class="img-fluid rounded shadow"
                            loading="lazy">
                          <div class="image-info">
                            <small class="text-muted">{{ $image['filename'] }} ({{ $image['size'] }})</small>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                @else
                  <!-- No images found -->
                  <div class="alert alert-warning">
                    <h5>No Images Found</h5>
                    <p>Please add images to the <code>public/images/programme/</code> directory.</p>
                    <p><strong>Supported formats:</strong> JPG, JPEG, PNG, GIF, WEBP</p>
                  </div>
                @endif
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
    .image-gallery {
      margin-bottom: 2rem;
    }

    .image-gallery .container,
    .programme-container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .gallery-item {
      position: relative;
      overflow: hidden;
      border-radius: 0.5rem;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .gallery-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .gallery-item img {
      width: 100%;
      height: auto;
      transition: transform 0.3s ease;
    }

    .gallery-item:hover img {
      transform: scale(1.05);
    }

    .image-info {
      padding: 0.5rem;
      background-color: rgba(0, 0, 0, 0.7);
      color: white;
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .gallery-item:hover .image-info {
      opacity: 1;
    }

    .alert-info {
      background-color: #e7f3ff;
      border: 1px solid #b3d9ff;
      color: #0066cc;
      border-radius: 0.5rem;
    }

    .alert-info h4 {
      color: var(--brand-color-1);
      margin-bottom: 1rem;
    }

    .programme-placeholder {
      background-color: #f8f9fa;
      border-radius: 0.5rem;
      padding: 2rem;
      margin-top: 2rem;
    }

    .programme-placeholder i {
      color: var(--brand-color-1);
    }

    .programme-placeholder h3 {
      color: var(--brand-color-1);
      margin-bottom: 1rem;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .gallery-item {
        margin-bottom: 1rem;
      }

      .programme-placeholder {
        padding: 1.5rem;
      }
    }
  </style>
@endsection

@section('scripts')
  <script>
    $(document).ready(function() {
      // Add any specific JavaScript for 31 Oct programme page
      console.log('31 Oct Programme page loaded');

      // Add lazy loading for images
      $('.gallery-item img').each(function() {
        $(this).attr('loading', 'lazy');
      });
    });
  </script>
@endsection
