@extends('layouts.app')
@php use Illuminate\Support\Facades\Storage; @endphp

@section('title', __('singapore.recent_health_advisory_updates.title'))
@section('description', __('singapore.recent_health_advisory_updates.description'))
@section('keywords', __('singapore.recent_health_advisory_updates.keywords'))

@section('og_title', __('singapore.recent_health_advisory_updates.title'))
@section('og_description', __('singapore.recent_health_advisory_updates.description'))
@section('og_image', Storage::url('images/og/wces2025-health-advisory-og.jpg'))

@section('body_class', 'com-pages view-module alias- path-singapore-recent-health-advisory-updates- cva-pages-module no-user not-home width-full')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ __('singapore.recent_health_advisory_updates.page_title') }}</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section id="fMatter" class="col-12">
        <div id="f-messages"></div>

        <!-- Recent Health Advisory Updates Content -->
        <div class='fModule f-recent-health-advisory-updates pb-0 f-module f-module-pages-custom'>
          <div class="f-module-content fModuleContent">
            <div class="container bg-light p-4">
              <h3 class="text-center mb-4">
                <span style="color: var(--brand-color-1);">
                  <strong>Latest Health Advisory Updates</strong>
                </span>
              </h3>

              <p>Stay informed about the latest health and travel advisories for Singapore. We will update this page with any relevant information as it becomes available.</p>

              <div class="alert alert-info">
                <h6>Stay Updated:</h6>
                <p>Please check this page regularly for the most current health and travel information.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection
