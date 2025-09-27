@extends('layouts.app')
@php use Illuminate\Support\Facades\Storage; @endphp

@section('title', __('singapore.yellow_fever_vaccination.title'))
@section('description', __('singapore.yellow_fever_vaccination.description'))
@section('keywords', __('singapore.yellow_fever_vaccination.keywords'))

@section('og_title', __('singapore.yellow_fever_vaccination.title'))
@section('og_description', __('singapore.yellow_fever_vaccination.description'))
@section('og_image', Storage::url('images/og/wces2025-yellow-fever-og.jpg'))

@section('body_class', 'com-pages view-module alias- path-singapore-yellow-fever-vaccination- cva-pages-module no-user not-home width-full')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ __('singapore.yellow_fever_vaccination.page_title') }}</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section id="fMatter" class="col-12">
        <div id="f-messages"></div>

        <!-- Yellow Fever Vaccination Content -->
        <div class='fModule f-yellow-fever-vaccination pb-0 f-module f-module-pages-custom'>
          <div class="f-module-content fModuleContent">
            <div class="container bg-light p-4">
              <h3 class="text-center mb-4">
                <span style="color: var(--brand-color-1);">
                  <strong>Yellow Fever Vaccination Requirements</strong>
                </span>
              </h3>

              <p>Singapore requires yellow fever vaccination for travelers arriving from countries with risk of yellow fever transmission.</p>

              <div class="alert alert-warning">
                <h6>Important:</h6>
                <p>Please consult with your healthcare provider and check the latest requirements before traveling to Singapore.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection
