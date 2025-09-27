@extends('layouts.app')
@php use Illuminate\Support\Facades\Storage; @endphp

@section('title', __('singapore.venue.title'))
@section('description', __('singapore.venue.description'))
@section('keywords', __('singapore.venue.keywords'))

@section('og_title', __('singapore.venue.title'))
@section('og_description', __('singapore.venue.description'))
@section('og_image', Storage::url('images/og/wces2025-venue-og.jpg'))

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

        <!-- Venue Content -->
        <div class='fModule f-venue pb-0 f-module f-module-pages-custom'>
          <div class="f-module-content fModuleContent">
            <div class="container bg-light p-4">
              <h3 class="text-center mb-4">
                <span style="color: var(--brand-color-1);">
                  <strong>Suntec Singapore Convention & Exhibition Centre</strong>
                </span>
              </h3>

              <div class="row">
                <div class="col-md-8">
                  <p>The WCES 2025 will be held at the prestigious Suntec Singapore Convention & Exhibition Centre, one of Asia's most advanced and well-equipped convention
                    facilities.</p>

                  <h5>Key Features:</h5>
                  <ul>
                    <li>State-of-the-art meeting rooms and exhibition halls</li>
                    <li>Advanced audio-visual and technical support</li>
                    <li>Central location in Singapore's business district</li>
                    <li>Easy access to public transportation</li>
                    <li>Adjacent to shopping and dining options</li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-body">
                      <h6 class="card-title">Address</h6>
                      <p class="card-text">
                        1 Raffles Boulevard<br>
                        Suntec City<br>
                        Singapore 039593
                      </p>
                    </div>
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
