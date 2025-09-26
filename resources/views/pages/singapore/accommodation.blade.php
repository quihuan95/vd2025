@extends('layouts.app')

@section('title', __('singapore.accommodation.title'))
@section('description', __('singapore.accommodation.description'))
@section('keywords', __('singapore.accommodation.keywords'))

@section('og_title', __('singapore.accommodation.title'))
@section('og_description', __('singapore.accommodation.description'))
@section('og_image', asset('images/wces2025-accommodation-og.jpg'))

@section('body_class', 'com-pages view-module alias- path-singapore-accommodation- cva-pages-module no-user not-home width-full')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ __('singapore.accommodation.page_title') }}</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section id="fMatter" class="col-12">
        <div id="f-messages"></div>

        <!-- Accommodation Content -->
        <div class='fModule f-accommodation pb-0 f-module f-module-pages-custom'>
          <div class="f-module-content fModuleContent">
            <div class="container bg-light p-4">
              <h3 class="text-center mb-4">
                <span style="color: var(--brand-color-1);">
                  <strong>Recommended Accommodation</strong>
                </span>
              </h3>

              <p>We have negotiated special rates with several hotels near the Suntec Singapore Convention & Exhibition Centre. All recommended hotels are within walking distance or
                a short MRT ride from the venue.</p>

              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Marina Bay Sands</h5>
                      <p class="card-text">Luxury hotel with iconic architecture and stunning views of Singapore's skyline.</p>
                      <p><strong>Distance:</strong> 5 minutes by MRT</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Pan Pacific Singapore</h5>
                      <p class="card-text">Business hotel with excellent facilities and direct access to Marina Square.</p>
                      <p><strong>Distance:</strong> 3 minutes walk</p>
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
