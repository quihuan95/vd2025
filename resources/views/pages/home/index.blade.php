@extends('layouts.app')
@php use Illuminate\Support\Facades\Storage; @endphp

@section('title', __('home.title'))
@section('description', __('home.description'))
@section('keywords', __('home.keywords'))

@section('og_title', __('home.hero.title'))
@section('og_description', __('home.hero.description'))
@section('og_image', Storage::url('images/og/wces2025-og-image.jpg'))

@section('body_class', 'com-pages view-module alias- path-home- cva-pages-module no-user is-home width-full title-off')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ __('common.nav.home') }}</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section id="fMatter" class="col-12">
        <div id="f-messages"></div>

        <!-- 1. Banner Section -->
        <div class='fModule f-banner py-0 f-module f-module-gallery-list'>
          <div class="f-module-content fModuleContent">
            <img src="{{ Storage::url('images/BVVD-KV.jpg') }}" alt="VDUHSC 2025 Banner" />
          </div>
        </div>

        <!-- Countdown Section -->
        <div class='fModule f-countdown pb-0 col-xs-12 col-12 col-lg-6 f-module f-module--_root/countdown'>
          <div class="f-module-content fModuleContent">
            <div class="row">
              <div class="col-count fCountText">
                <h4 class="fDay">42</h4>
                <p class="fCountText">{{ __('home.countdown.days') }}</p>
              </div>
              <div class="col-count fCountText fCountHrs">
                <h4 class="fDay">10</h4>
                <p class="fCountText">{{ __('home.countdown.hours') }}</p>
              </div>
              <div class="col-count fCountText fCountMin">
                <h4 class="fDay">52</h4>
                <p class="fCountText">{{ __('home.countdown.minutes') }}</p>
              </div>
              <div class="col-count fCountText fCountSec">
                <h4 class="fDay">11</h4>
                <p class="fCountText">{{ __('home.countdown.seconds') }}</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Registration Button -->
        <div class='fModule f-countdown-btn pb-0 col-xs-12 col-12 col-sm-10 col-md-8 col-lg-6 f-module f-module-pages-custom'>
          <div class="f-module-title fModuleTitle">
            <h3>{{ __('home.countdown.title') }}</h3>
          </div>
          <div class="f-module-content fModuleContent">
            <div>
              <div>
                <a class="fButton" href="{{ locale_route('registration.form') }}">{{ __('home.cta.register_button') }}</a>
              </div>
            </div>
          </div>
        </div>

        <!-- 2. Welcome Message Section -->
        <div class='fModule container-function f-welcome pb-0 f-module f-module-pages-custom'>
          <div class="f-module-title fModuleTitle">
            <h3>{{ app()->getLocale() === 'vi' ? 'Thư chào mừng' : 'Welcome Message' }}</h3>
          </div>
          <div class="f-module-content fModuleContent">
            <div></div>
            <div class="info">
              @if (app()->getLocale() === 'vi')
                <p><strong>Kính gửi Quý Đồng nghiệp,</strong></p>
                <p>Chúng tôi trân trọng kính mời Quý vị tham dự <strong>Hội nghị Khoa học Quốc tế Bệnh viện Hữu nghị Việt Đức năm 2025</strong>, diễn ra tại Hà Nội ngày <strong>01 tháng 11 năm 2025</strong>. Đây là
                  lần đầu tiên Bệnh viện Hữu nghị Việt Đức vinh dự đăng cai sự kiện quan trọng này, và chúng tôi rất vui mừng được chào đón sự tham dự của các chuyên gia và các bác
                  sĩ đến từ khắp nơi trên thế giới.</p>
                <p>Hội nghị sẽ mang đến một chương trình khoa học đa dạng và toàn diện, bao gồm <strong>04 phiên chuyên đề</strong> với <strong>khoảng 40 bài tham luận</strong>. Nội dung thảo luận trải dài nhiều lĩnh
                  vực bao gồm: ghép tạng, tim mạch, tiêu hóa, chấn thương chỉnh hình chỉnh hình…</p>
                <p>Chúng tôi tin rằng hội nghị lần này sẽ là một cơ hội đặc biệt để học hỏi, nâng cao kỹ năng chuyên môn và mở rộng kết nối quốc tế, thúc đẩy những trao đổi và hợp
                  tác giữa các chuyên gia hàng đầu. Từ đó, áp dụng những tiến bộ khoa học để cải thiện dịch vụ y tế và nâng cao sức khỏe toàn cầu.</p>
                <p>Chúng tôi rất mong được đón tiếp Quý vị tại Hà Nội và cùng nhau tạo nên một hội nghị thành công, ý nghĩa.</p>
                <p>Trân trọng<br>
                  <br>
                  <p><strong>Dương Đức Hùng</strong><br></p>
                  <p><strong>Giám đốc</strong><br></p>
                  <p><strong>Bệnh viện Hữu nghị Việt Đức</strong></p>
                </p>
              @else
                <p><strong>Dear Colleagues and Friends,</strong></p>
                <p>It is our great pleasure to welcome you to the <strong>Viet Duc University Hospital Scientific Congress 2025</strong>, taking place in <strong>Hanoi on November 1, 2025</strong>. This marks the
                  very first time that Viet Duc University Hospital has the honor of hosting this distinguished event, and we are delighted to bring together leading experts,
                  researchers, and practitioners from across the globe.</p>
                <p>The Congress will feature a diverse and comprehensive scientific program, including <strong>four sessions with approximately 40 presentations</strong>. The discussions will span
                  multiple specialties — with a special focus on organ transplantation, alongside important topics in cardiovascular, gastrointestinal, and orthopedic, among others.
                </p>
                <p>We believe that this congress will be a unique opportunity for training, skill enhancement, and global networking, fostering meaningful exchanges among leading
                  professionals. Ultimately, our shared goal is to translate these advancements into better patient care and improved health outcomes worldwide.</p>
                <p>We warmly look forward to welcoming you to Hanoi and to an inspiring and productive conference experience.</p>
                <p>Warm regards<br>
                  <br>
                  <p><strong>DUONG Duc Hung</strong><br></p>
                  <strong>Director</strong><br>
                  <p><strong>Viet Duc University Hospital</strong></p>
                </p>
              @endif
            </div>
          </div>
        </div>

        <!-- 3. Venue Information Section -->
        <div class='fModule container-function f-venue pb-0 f-module f-module-pages-custom'>
          <div class="f-module-title fModuleTitle">
            <h3>{{ __('singapore.venue_info.title') }}</h3>
          </div>
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

      </section>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    $(document).ready(function() {
      // Countdown functionality
      setInterval(function() {
        countdown()
      }, 1000);

      function countdown() {
        s = $(".fCountSec h4");
        m = $(".fCountMin h4");
        h = $(".fCountHrs h4");
        var sec = s.html();
        var min = m.html();
        var hrs = h.html();
        if (sec > 0) {
          sec = sec - 1;
        } else if (sec == 0) {
          sec = 59;
          if (min > 0) {
            min = min - 1;
          } else {
            min = 59;
          }
        }

        s.html(sec);
        m.html(min);
      }

      // bxSlider for banner (if multiple images)
      if ($('.f-banner .fGalleryImages').length > 0) {
        $('.f-banner .fGalleryImages').bxSlider({
          mode: 'fade',
          auto: true,
          controls: false,
          pager: true,
          speed: 1500,
          pause: 3000
        });
      }
    });
  </script>
@endsection

@push('styles')
  <style>
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
    
    @media (max-width: 991px) {
      .venue-info {
        margin-top: 1rem;
      }
    }
  </style>
@endpush
