@extends('layouts.app')
@php use Illuminate\Support\Facades\Storage; @endphp

@section('title', __('programme.pages.1_nov.title'))
@section('description', __('programme.pages.1_nov.description'))
@section('keywords', __('programme.pages.1_nov.keywords'))

@section('og_title', __('programme.pages.1_nov.title'))
@section('og_description', __('programme.pages.1_nov.description'))
@section('og_image', Storage::url('images/og/wces2025-1nov-og.jpg'))

@section('body_class', 'com-pages view-module alias- path-programme-1-nov- cva-pages-module no-user not-home width-full')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ __('programme.pages.1_nov.page_title') }}</h1>
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
              <div class="alert alert-info">
                <h4>{{ __('programme.pages.1_nov.coming_soon') }}</h4>
                <p>{{ __('programme.pages.1_nov.coming_soon_description') }}</p>
              </div>

              <!-- Placeholder for programme content -->
              <div class="programme-placeholder">
                <div class="text-center py-5">
                  <i class="fas fa-calendar-alt fa-3x text-muted mb-3"></i>
                  <h3>{{ __('programme.pages.1_nov.programme_coming_soon') }}</h3>
                  <p class="text-muted">{{ __('programme.pages.1_nov.programme_description') }}</p>
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
      // Add any specific JavaScript for 1 Nov programme page
      console.log('1 Nov Programme page loaded');
    });
  </script>
@endsection
