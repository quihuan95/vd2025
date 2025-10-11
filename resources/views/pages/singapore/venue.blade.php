@extends('layouts.app')
@php use Illuminate\Support\Facades\Storage; @endphp

@section('title', __('singapore.venue.title'))
@section('description', __('singapore.venue.description'))
@section('keywords', __('singapore.venue.keywords'))

@section('og_title', __('singapore.venue.title'))
@section('og_description', __('singapore.venue.description'))
@section('og_image', Storage::url('images/og/vduhsc2025-venue-og.jpg'))

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

        <!-- Venue Information -->
                <!-- 3. Venue Information Section -->
        <div class='fModule container-function f-venue pb-0 f-module f-module-pages-custom'>
          <div class="f-module-content fModuleContent">
            <div class="row">
              <div class="col-12 col-lg-6">
                <img src="{{ Storage::url('images/mai-ltha.webp') }}" alt="{{ __('singapore.venue_info.lotte_hotel') }}" class="img-fluid venue-image" style="width: 100%; height: auto; border-radius: 8px;" />
              </div>
              <div class="col-12 col-lg-6">
                <div class="venue-info">
                  @if (app()->getLocale() === 'vi')
                    <div class="venue-highlight">
                      <h4 class="venue-subtitle">Lotte Hotel Hanoi</h4>
                      <div class="venue-badge">5 SAO</div>
                    </div>
                    <p class="venue-description">Lotte Hà Nội nằm trong tòa nhà <strong>Lotte Center 65 tầng</strong>, là một trong những khách sạn 5 sao hàng đầu tại Hà Nội. Khách sạn cung cấp các phòng hội nghị <strong>sang trọng và hiện đại</strong>, phù hợp cho các sự kiện quốc tế và hội nghị khoa học.</p>
                    <div class="venue-location">
                      <div class="location-item">
                        <i class="location-icon">-</i>
                        <span>Vị trí thuận lợi tại trung tâm thành phố</span>
                      </div>
                      <div class="location-item">
                        <i class="location-icon">-</i>
                        <span>Dễ dàng tiếp cận từ sân bay Nội Bài</span>
                      </div>
                      <div class="location-item">
                        <span>Gần các điểm tham quan nổi tiếng của Hà Nội</span>
                      </div>
                    </div>
                    <div class="venue-link">
                      <button class="btn-venue-link" onclick="window.open('{{ __('singapore.venue_info.website_url') }}', '_blank')">
                        {{ __('singapore.venue_info.website_link') }}
                      </button>
                    </div>
                  @else
                    <div class="venue-highlight">
                      <h4 class="venue-subtitle">Lotte Hotel Hanoi</h4>
                      <div class="venue-badge">5 STAR</div>
                    </div>
                    <p class="venue-description">Located in the heart of Hanoi, Lotte Hotel Hanoi is a <strong>five-star landmark hotel</strong> that serves as the perfect venue for international conferences and events. The hotel is part of the impressive <strong>65-story Lotte Center</strong>, offering modern facilities and exceptional service.</p>
                    <div class="venue-location">
                      <div class="location-item">
                        <i class="location-icon">-</i>
                        <span>Strategic location in the city center</span>
                      </div>
                      <div class="location-item">
                        <i class="location-icon">-</i>
                        <span>Easy access from Noi Bai International Airport</span>
                      </div>
                      <div class="location-item">
                        <i class="location-icon">-</i>
                        <span>Close to major attractions in Hanoi</span>
                      </div>
                    </div>
                    <div class="venue-link">
                      <button class="btn-venue-link" onclick="window.open('{{ __('singapore.venue_info.website_url') }}', '_blank')">
                        Visit website for more
                      </button>
                    </div>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Location and Map Section -->
        <div class='fModule container-function f-location pb-0 f-module f-module-pages-custom'>
          <div class="f-module-content fModuleContent">
            <div class="row">
              <!-- Location Information -->
              <div class="col-12 col-lg-6 mb-4">
                <div class="location-info">
                  <h3 class="section-title mb-4">
                    @if (app()->getLocale() === 'vi')
                      VỊ TRÍ/LOCATION
                    @else
                      LOCATION
                    @endif
                  </h3>
                  
                  <div class="address-info">
                    <div class="address-item">
                      <h5>Khách sạn Lotte Hanoi</h5>
                      <p class="address-text">54 Liễu Giai, Ngọc Hà, Hà Nội, Việt Nam</p>
                    </div>
                    
                    <div class="address-item">
                      <h5>Lotte Hotel Hanoi</h5>
                      <p class="address-text">54 Lieu Giai, Ngoc Ha, Ha Noi, Viet Nam</p>
                    </div>
                  </div>

                  <div class="location-features mt-4">
                    <div class="feature-highlight">
                      <i class="fas fa-map-marker-alt"></i>
                      <span>Trung tâm Hà Nội</span>
                    </div>
                    <div class="feature-highlight">
                      <i class="fas fa-plane"></i>
                      <span>Gần sân bay Nội Bài</span>
                    </div>
                    <div class="feature-highlight">
                      <i class="fas fa-subway"></i>
                      <span>Giao thông thuận tiện</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Google Map -->
              <div class="col-12 col-lg-6 mb-4">
                <div class="map-container">
                  <h3 class="section-title mb-4">
                    @if (app()->getLocale() === 'vi')
                      BẢN ĐỒ/MAP
                    @else
                      MAP
                    @endif
                  </h3>
                  
                  <div class="map-wrapper">
                    <iframe 
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.1234567890!2d105.8123456789!3d21.0123456789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab1234567890%3A0x1234567890abcdef!2sLotte%20Hotel%20Hanoi!5e0!3m2!1sen!2s!4v1234567890"
                      width="100%" 
                      height="300" 
                      style="border:0; border-radius: 8px;" 
                      allowfullscreen="" 
                      loading="lazy" 
                      referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                  </div>
                  
                  <div class="map-actions mt-3">
                    <a href="https://www.google.com/maps/place/Lotte+Hotel+Hanoi" 
                       target="_blank" 
                       class="btn-map-action">
                      <i class="fas fa-external-link-alt"></i>
                      @if (app()->getLocale() === 'vi')
                        Xem bản đồ lớn hơn
                      @else
                        View larger map
                      @endif
                    </a>
                    <a href="https://www.google.com/maps/dir//Lotte+Hotel+Hanoi" 
                       target="_blank" 
                       class="btn-map-action">
                      <i class="fas fa-directions"></i>
                      @if (app()->getLocale() === 'vi')
                        Chỉ đường
                      @else
                        Directions
                      @endif
                    </a>
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

@push('styles')
  <style>
    /* Venue Section - Following Home Page Style */
    .f-venue {
      margin-top: 2rem;
    }
    
    .venue-image {
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }
    
    .venue-image:hover {
      transform: scale(1.02);
    }
    
    .venue-info {
      padding: 1.5rem;
      background: #ffffff;
      border-radius: 5px;
      border: 1px solid #e9ecef;
    }
    
    .venue-highlight {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 1.5rem;
      padding-bottom: 1rem;
      border-bottom: 2px solid #e9ecef;
    }
    
    .venue-subtitle {
      color: #2c3e50;
      font-weight: 700;
      font-size: 1.8rem;
      margin: 0;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    }
    
    .venue-badge {
      background-color: #28a745;
      color: white;
      padding: 0.25rem 0.75rem;
      border-radius: 3px;
      font-weight: 600;
      font-size: 0.8rem;
    }
    
    .venue-description {
      line-height: 1.8;
      margin-bottom: 2rem;
      color: #495057;
      font-size: 1.1rem;
      text-align: justify;
    }
    
    .venue-description strong {
      color: #28a745;
      font-weight: 700;
    }
    
    .venue-location {
      margin-bottom: 2rem;
    }
    
    .location-item {
      display: flex;
      align-items: center;
      margin-bottom: 0.5rem;
      padding: 0.5rem 0;
    }
    
    .location-icon {
      font-size: 1.5rem;
      margin-right: 1rem;
      min-width: 24px;
      color: #28a745;
      font-weight: bold;
    }
    
    .location-item span {
      color: #495057;
      font-weight: 500;
    }
    
    .btn-venue-link {
      background-color: #28a745;
      color: white;
      padding: 0.75rem 1.5rem;
      border-radius: 5px;
      border: 1px solid #28a745;
      font-weight: 500;
      text-align: center;
      transition: all 0.2s ease;
      cursor: pointer;
      outline: none;
      font-size: 1rem;
      text-decoration: none;
      display: inline-block;
    }
    
    .btn-venue-link:hover {
      background-color: #1e7e34;
      border-color: #1e7e34;
      color: white;
      text-decoration: none;
    }
    
    .btn-venue-link:active {
      background-color: #155724;
    }
    
    .btn-venue-link:focus {
      outline: none;
      box-shadow: 0 0 0 2px rgba(40, 167, 69, 0.25);
    }

    /* Location and Map Section - Following Home Page Style */
    .f-location {
      margin-top: 2rem;
    }

    .section-title {
      color: #2c3e50;
      font-weight: 700;
      font-size: 1.5rem;
      margin-bottom: 1.5rem;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    }

    .location-info {
      padding: 1.5rem;
      background: #ffffff;
      border-radius: 5px;
      border: 1px solid #e9ecef;
      height: 100%;
    }

    .address-info {
      margin-bottom: 2rem;
    }

    .address-item {
      margin-bottom: 1.5rem;
      padding-bottom: 1rem;
      border-bottom: 1px solid #e9ecef;
    }

    .address-item:last-child {
      border-bottom: none;
      margin-bottom: 0;
      padding-bottom: 0;
    }

    .address-item h5 {
      color: #2c3e50;
      font-weight: 700;
      margin-bottom: 0.5rem;
      font-size: 1.1rem;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    }

    .address-text {
      color: #495057;
      margin: 0;
      line-height: 1.8;
      font-size: 1rem;
    }

    .location-features {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .feature-highlight {
      display: flex;
      align-items: center;
      padding: 0.75rem 1rem;
      background: #f8f9fa;
      border-radius: 5px;
      border-left: 4px solid #28a745;
      transition: all 0.2s ease;
    }

    .feature-highlight:hover {
      background: #e9ecef;
      transform: translateX(5px);
    }

    .feature-highlight i {
      color: #28a745;
      margin-right: 0.75rem;
      width: 20px;
      text-align: center;
    }

    .feature-highlight span {
      color: #495057;
      font-weight: 500;
    }

    .map-container {
      padding: 1.5rem;
      background: #ffffff;
      border-radius: 5px;
      border: 1px solid #e9ecef;
      height: 100%;
    }

    .map-wrapper {
      position: relative;
      border-radius: 5px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .map-actions {
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .btn-map-action {
      display: inline-flex;
      align-items: center;
      padding: 0.75rem 1.5rem;
      background-color: #28a745;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      border: 1px solid #28a745;
      font-size: 1rem;
      font-weight: 500;
      transition: all 0.2s ease;
    }

    .btn-map-action:hover {
      background-color: #1e7e34;
      border-color: #1e7e34;
      color: white;
      text-decoration: none;
      transform: translateY(-2px);
    }

    .btn-map-action:active {
      background-color: #155724;
    }

    .btn-map-action:focus {
      outline: none;
      box-shadow: 0 0 0 2px rgba(40, 167, 69, 0.25);
    }

    .btn-map-action i {
      margin-right: 0.5rem;
    }

    /* Responsive Design */
    @media (max-width: 991px) {
      .venue-info {
        margin-top: 1rem;
      }
    }

    @media (max-width: 768px) {
      .section-title {
        font-size: 1.25rem;
        text-align: center;
      }

      .location-info,
      .map-container {
        padding: 1rem;
      }

      .address-item h5 {
        font-size: 1rem;
      }

      .address-text {
        font-size: 0.9rem;
      }

      .location-features {
        gap: 0.75rem;
      }

      .feature-highlight {
        padding: 0.5rem 0.75rem;
        font-size: 0.9rem;
      }

      .map-actions {
        flex-direction: column;
        gap: 0.75rem;
      }

      .btn-map-action {
        justify-content: center;
        width: 100%;
      }
    }
  </style>
@endpush
