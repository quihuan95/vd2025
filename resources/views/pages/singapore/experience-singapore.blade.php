@extends('layouts.app')
@php use Illuminate\Support\Facades\Storage; @endphp

@section('title', __('singapore.experience_singapore.title'))
@section('description', __('singapore.experience_singapore.description'))
@section('keywords', __('singapore.experience_singapore.keywords'))

@section('og_title', __('singapore.experience_singapore.title'))
@section('og_description', __('singapore.experience_singapore.description'))
@section('og_image', Storage::url('images/og/wces2025-experience-singapore-og.jpg'))

@section('body_class', 'com-pages view-module alias- path-singapore-experience-singapore- cva-pages-module no-user not-home width-full')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ __('singapore.experience_singapore.page_title') }}</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section id="fMatter" class="col-12">
        <div id="f-messages"></div>

        <!-- Experience Singapore Content -->
        <div class='fModule f-experience-singapore pb-0 f-module f-module-pages-custom'>
          <div class="f-module-content fModuleContent">
            <div class="container bg-light p-4">
              <h3 class="text-center mb-4">
                <span style="color: var(--brand-color-1);">
                  <strong>Discover Singapore</strong>
                </span>
              </h3>

              <p>Make the most of your visit to Hanoi during VDUHSC 2025. Explore the city's rich culture, world-class attractions, and diverse culinary scene.</p>

              <div class="row">
                <div class="col-md-4 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Gardens by the Bay</h5>
                      <p class="card-text">Iconic futuristic gardens with the famous Supertree Grove.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Marina Bay Sands</h5>
                      <p class="card-text">Luxury resort with stunning rooftop infinity pool and city views.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Singapore Botanic Gardens</h5>
                      <p class="card-text">UNESCO World Heritage site with beautiful tropical gardens.</p>
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
