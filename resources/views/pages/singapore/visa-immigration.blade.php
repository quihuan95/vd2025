@extends('layouts.app')
@php use Illuminate\Support\Facades\Storage; @endphp

@section('title', __('singapore.visa_immigration.title'))
@section('description', __('singapore.visa_immigration.description'))
@section('keywords', __('singapore.visa_immigration.keywords'))

@section('og_title', __('singapore.visa_immigration.title'))
@section('og_description', __('singapore.visa_immigration.description'))
@section('og_image', Storage::url('images/og/wces2025-visa-og.jpg'))

@section('body_class', 'com-pages view-module alias- path-singapore-visa-immigration- cva-pages-module no-user not-home width-full')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ __('singapore.visa_immigration.page_title') }}</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section id="fMatter" class="col-12">
        <div id="f-messages"></div>

        <!-- Visa & Immigration Content -->
        <div class='fModule f-visa-immigration pb-0 f-module f-module-pages-custom'>
          <div class="f-module-content fModuleContent">
            <div class="container bg-light p-4">
              <h3 class="text-center mb-4">
                <span style="color: var(--brand-color-1);">
                  <strong>Visa Requirements</strong>
                </span>
              </h3>

              <p>Visa requirements for Singapore depend on your nationality and the purpose of your visit. Please check with the Singapore Immigration & Checkpoints Authority (ICA)
                for the most current information.</p>

              <div class="alert alert-info">
                <h6>Important:</h6>
                <p>It is the responsibility of each delegate to ensure they have the appropriate visa and travel documents for entry into Singapore.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection
