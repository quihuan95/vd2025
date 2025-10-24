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

        <!-- Speakers List -->
        <div class='fModule f-speakers-list f-module f-module-pages-custom'>
          <div class="f-module-content fModuleContent">              
              <div class="row speakers-grid">
                @foreach($speakers as $index => $speaker)
                  <div class="col-lg-6 col-md-12 mb-4">
                    <div class="speaker-card">
                      <div class="speaker-image">
                        @if($speaker['image'])
                          <img src="{{ Storage::url('images/speakers/' . $speaker['image']) }}" 
                               alt="{{ $speaker['name_vi'] }}" 
                               class="img-fluid">
                        @else
                          <div class="speaker-placeholder">
                            <i class="fas fa-user"></i>
                          </div>
                        @endif
                      </div>
                      <div class="speaker-info">
                        <h4 class="speaker-name">
                          <div class="speaker-name-vi">{{ $speaker['name_vi'] }}</div>
                          <div class="speaker-name-en">{{ $speaker['name_en'] }}</div>
                        </h4>
                        <div style="margin-top: 10px;" class="speaker-title-vi">{{ $speaker['title_vi'] }}</div>
                        <div class="speaker-title-en">{{ $speaker['title_en'] }}</div>
                        <div style="margin-top: 10px;" class="speaker-organization-vi">{{ $speaker['organization_vi'] }}</div>
                        <div class="speaker-organization-en">{{ $speaker['organization_en'] }}</div>
                      </div>
                    </div>
                  </div>
                @endforeach
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
    .speakers-container {
      padding: 2rem 0;
    }

    .speakers-title {
      color: var(--brand-color-1);
      font-weight: 700;
      text-align: center;
      margin-bottom: 3rem;
    }

    .speaker-card {
      background: white;
      border-radius: 1rem;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: all 0.3s ease;
      height: 100%;
      display: flex;
      flex-direction: row;
      border: 1px solid #ddd;
    }
    .speaker-image {
      position: relative;
      width: 200px;
      height: 100%;
      overflow: hidden;
      background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
      flex-shrink: 0;
    }

    .speaker-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: top;
      transition: transform 0.3s ease;
    }

    .speaker-placeholder {
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, var(--brand-color-1) 0%, #2c5aa0 100%);
      color: white;
    }

    .speaker-placeholder i {
      font-size: 4rem;
      opacity: 0.7;
    }

    .speaker-info {
      padding: 1.5rem;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .speaker-name {
      color: var(--brand-color-1);
      font-weight: 600;
      font-size: 1.2rem;
      margin-bottom: 0.5rem;
      line-height: 1.3;
    }

    .speaker-name-vi {
      font-weight: 700;
      color: var(--brand-color-1);
      margin-bottom: 0.25rem;
    }

    .speaker-name-en {
      font-style: italic;
      color: var(--brand-color-1);
      font-size: 0.95rem;
      opacity: 0.9;
    }

    .speaker-title-vi {
      font-weight: 600;
      color: #495057;
      margin-bottom: 0.25rem;
    }

    .speaker-title-en {
      font-style: italic;
      color: #495057;
      font-size: 0.9rem;
      opacity: 0.8;
    }

    .speaker-organization-vi {
      font-weight: 600;
      color: #6c757d;
      margin-bottom: 0.25rem;
    }

    .speaker-organization-en {
      font-style: italic;
      color: #6c757d;
      font-size: 0.85rem;
      opacity: 0.8;
    }

    .speakers-grid {
      margin: 0 -15px;
    }

    .speakers-grid > [class*="col-"] {
      padding: 0 15px;
    }
  </style>
@endsection
