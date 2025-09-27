@extends('layouts.app')
@php use Illuminate\Support\Facades\Storage; @endphp

@section('title', __('sponsors.title'))
@section('description', __('sponsors.description'))
@section('keywords', __('sponsors.keywords'))

@section('og_title', __('sponsors.title'))
@section('og_description', __('sponsors.description'))
@section('og_image', Storage::url('images/og/wces2025-sponsors-og.jpg'))

@section('body_class', 'com-pages view-module alias- path-sponsors-official- cva-pages-module no-user not-home')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ __('sponsors.page_title') }}</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section id="fMatter" class="col-12">
        <div id="f-messages"></div>

        <!-- Sponsors Section -->
        <div class='fModule f-organised f-module f-module-gallery-list'>
          <div class="f-module-content fModuleContent">
            <!-- Bronze Sponsor -->
            <div class='fGalleryContainer mb-5'>
              <h4 class="text-center mb-4">Bronze Sponsor</h4>
              <ul class="fGalleryImages row justify-content-center fGalleryList">
                <li class="fGalleryItem col-12 col-sm-6 col-md-3 col-lg-2 mb-3">
                  <a class="fGalleryImage d-block text-center">
                    <img alt="Miconvey" src="https://storage.unitedwebnetwork.com/files/1212/Miconvey_322712.png" class="img-fluid" loading="lazy" />
                  </a>
                </li>
              </ul>
            </div>

            <!-- Other Sponsors -->
            <div class='fGalleryContainer'>
              <h4 class="text-center mb-4">Other Sponsors</h4>
              <ul class="fGalleryImages row justify-content-center fGalleryList">
                <li class="fGalleryItem col-12 col-sm-6 col-md-3 col-lg-2 mb-3">
                  <a class="fGalleryImage d-block text-center">
                    <img alt="Aldaver" src="https://storage.unitedwebnetwork.com/files/1212/Aldaver_322713.png" class="img-fluid" loading="lazy" />
                  </a>
                </li>
                <li class="fGalleryItem col-12 col-sm-6 col-md-3 col-lg-2 mb-3">
                  <a class="fGalleryImage d-block text-center">
                    <img alt="Biocer" src="https://storage.unitedwebnetwork.com/files/1212/Biocer_322498.png" class="img-fluid" loading="lazy" />
                  </a>
                </li>
                <li class="fGalleryItem col-12 col-sm-6 col-md-3 col-lg-2 mb-3">
                  <a class="fGalleryImage d-block text-center">
                    <img alt="Healnoc" src="https://storage.unitedwebnetwork.com/files/1212/Healnoc_322587.png" class="img-fluid" loading="lazy" />
                  </a>
                </li>
                <li class="fGalleryItem col-12 col-sm-6 col-md-3 col-lg-2 mb-3">
                  <a class="fGalleryImage d-block text-center">
                    <img alt="KOTOBUKI" src="https://storage.unitedwebnetwork.com/files/1212/KOTOBUKI_331072.png" class="img-fluid" loading="lazy" />
                  </a>
                </li>
                <li class="fGalleryItem col-12 col-sm-6 col-md-3 col-lg-2 mb-3">
                  <a class="fGalleryImage d-block text-center">
                    <img alt="SonoScape Medical Corp." src="https://storage.unitedwebnetwork.com/files/1212/SonoScape%20Medical%20Corp._322521.png" class="img-fluid"
                      loading="lazy" />
                  </a>
                </li>
                <li class="fGalleryItem col-12 col-sm-6 col-md-3 col-lg-2 mb-3">
                  <a class="fGalleryImage d-block text-center">
                    <img alt="Teleflex Medical" src="https://storage.unitedwebnetwork.com/files/1212/Teleflex%20Medical_322520.png" class="img-fluid" loading="lazy" />
                  </a>
                </li>
                <li class="fGalleryItem col-12 col-sm-6 col-md-3 col-lg-2 mb-3">
                  <a class="fGalleryImage d-block text-center">
                    <img alt="VHMed" src="https://storage.unitedwebnetwork.com/files/1212/VHMed_322711.jpg" class="img-fluid" loading="lazy" />
                  </a>
                </li>
              </ul>
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
      // Add hover effects to sponsor logos
      $('.fGalleryItem img').hover(
        function() {
          $(this).addClass('animate__animated animate__pulse');
        },
        function() {
          $(this).removeClass('animate__animated animate__pulse');
        }
      );

      // Lazy loading for images
      if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              const img = entry.target;
              img.src = img.dataset.src || img.src;
              img.classList.remove('lazy');
              imageObserver.unobserve(img);
            }
          });
        });

        document.querySelectorAll('img[loading="lazy"]').forEach(img => {
          imageObserver.observe(img);
        });
      }
    });
  </script>
@endsection
