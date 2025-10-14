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

                <!-- About the Congress Section -->
        <div class='fModule f-about f-module f-module-pages-custom'>
          {{-- <div class="f-module-title fModuleTitle">
            <h3>{{ __('about.sections.about_congress.title') }}</h3>
          </div> --}}
          <div class="f-module-content fModuleContent">
            <div class="container bg-light p-4">
              @if (app()->getLocale() === 'vi')
                <p><strong><i>Hội nghị Khoa học Quốc tế Bệnh viện Hữu nghị Việt Đức 2025</i></strong> diễn ra vào ngày <strong><i>01 tháng 11 năm 2025 tại Hà Nội</i></strong>. Hội nghị dự kiến sẽ có sự tham gia của hơn 500 đại
                  biểu là những chuyên gia, bác sĩ và các nhà nghiên cứu hàng đầu tại Việt Nam và trên thế giới, nhằm trao đổi và cập nhật những tiến bộ mới nhất trong lĩnh vực ngoại
                  khoa và ghép tạng.</p>

                <p>Với chủ đề "<strong><i>Vai trò của Ngoại khoa và Ghép tạng trong Kỷ nguyên Hội nhập Toàn cầu</i></strong>", hội nghị sẽ kéo dài trong một ngày với bốn phiên báo cáo, tập trung vào các
                  lĩnh vực: ghép tạng, phẫu thuật gan mật, tiết niệu, phẫu thuật tim mạch và lồng ngực, liền thương, phẫu thuật tiêu hóa, sản phụ khoa và chỉnh hình.</p>

                <p>Hội nghị hứa hẹn sẽ là diễn đàn để trao đổi kiến thức chuyên môn và kết nối cho các chuyên gia. Đây là cơ hội đặc biệt để thúc đẩy đổi mới, tăng cường hợp tác và
                  cùng hướng tới mục tiêu nâng cao hiệu quả điều trị, cải thiện kết quả cho người bệnh trong lĩnh vực ngoại khoa và ghép tạng.</p>
              @else
                <p><strong><i>Viet Duc University Hospital Scientific Congress 2025</i></strong> will take place on <strong><i>November 1, 2025 in Hanoi</i></strong>. Hosted for the first time by Viet Duc University Hospital, this
                  international event will gather leading experts, surgeons, and researchers to explore the latest frontiers of surgery and transplantation.</p>

                <p>Under the theme "<strong><i>The Role of Surgery and Transplantation in the Era of Global Integration</i></strong>", Congress will feature a full-day scientific program including an
                  overview plenary and four parallel sessions, covering hepato-pancreato-biliary surgery and liver transplantation, kidney and urology, cardiothoracic and lung
                  transplantation, wound healing, gastrointestinal and metabolic surgery, obstetrics and gynecology, and orthopedics.</p>

                <p>The Congress is designed as a platform for knowledge sharing, professional training, and global networking. It represents a unique opportunity to foster
                  innovation, strengthen collaborations, and ultimately enhance patient outcomes in surgical and transplant medicine.</p>
              @endif
            </div>
          </div>
        </div>

        <!-- Conference Diagram Section -->
        <div class='fModule f-conference-diagram f-module f-module-pages-custom'>
          <div class="f-module-title fModuleTitle">
            <h3>{{ __('about.sections.conference_diagram.title') }}</h3>
          </div>
          <div class="f-module-content fModuleContent">
            <div class="container bg-light p-4">
              <div class="conference-diagram-container">
                <!-- Diagram Image -->
                <div class="diagram-section">
                  <div class="diagram-image">
                    <img style="max-width: 500px;" src="{{ Storage::url('images/so-do.png') }}" alt="{{ __('about.sections.conference_diagram.morning.title') }}" class="rounded shadow">
                  </div>
                  
                  <!-- Simple Text Legend -->
                  <div class="diagram-legend mt-4">
                    @if (app()->getLocale() === 'vi')
                      <p><strong>Nội dung thể hiện trên sơ đồ:</strong></p>
                      <p>Hội trường 1/Hall 1 - Crystal Grand Ballroom</p>
                      <p>Hội trường 2/Hall 2 - Emerald Room</p>
                      <p>Hội trường 3/Hall 3 - Charlotte</p>
                      <p>Khu vực check-in</p>
                      <p>Gian hàng của Nhà Tài trợ</p>
                    @else
                      <p><strong>Content shown on the diagram:</strong></p>
                      <p>Hall 1 - Crystal Grand Ballroom</p>
                      <p>Hall 2 - Emerald Room</p>
                      <p>Hall 3 - Charlotte</p>
                      <p>Check-in Area</p>
                      <p>Sponsor Exhibition</p>
                    @endif
                  </div>
                </div>
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

    
    .f-about-wces .fGalleryImages .ItemfinnerGallery .fGalleryText h5 {
      text-align: center;
      font-size: 1.5rem;
      font-weight: 600;
      color: var(--brand-color-1);
      margin-top: 0;
    }

    .f-about-wces .fGalleryItem {
      position: relative;
    }

    .f-about-wces {
      overflow: visible !important;
    }

    @media(min-width:992px) {
      .f-why-submit .row .row-one ul li {
        width: 100%;
      }
    }

    .f-about-wces .fGalleryImages .fGalleryItem {
      background: linear-gradient(90deg, #efefef, #ffffffcc 90%);
      border-radius: 45px;
      display: flex;
      align-items: start;
      height: 100%;
    }

    .f-about-wces .fGalleryImages .fGalleryItem::before {
      content: "";
      background: linear-gradient(90deg, rgba(44, 86, 41, 0.24), transparent 100%);
      border-radius: 45px;
      position: absolute;
      inset: -2px;
      z-index: -1;
    }

    .f-about-wces .fGalleryImages .fGalleryItem .fGalleryImage img {
      margin-left: -4rem;
      height: 6.5rem;
      aspect-ratio: 1 / 1;
      background: var(--brand-color-1);
      border-radius: 50%;
      padding: 1rem;
      width: 7rem;
      object-fit: contain;
      margin-top: 1rem;
    }

    .f-about-wces .fGalleryImages .fGalleryItem .fGalleryText {
      padding: 1rem;
      margin-top: -55px;
    }

    /* Conference Diagram Styles */
    .f-conference-diagram h3 {
      color: var(--brand-color-1);
      margin-bottom: 0.5rem;
      font-weight: 600;
    }

    .f-conference-diagram .text-muted {
      font-size: 1rem;
      margin-bottom: 1.5rem;
    }

    .conference-diagram-container {
      text-align: center;
    }

    .diagram-section {
      margin-bottom: 3rem;
    }

    .diagram-section:last-child {
      margin-bottom: 0;
    }

    .diagram-title {
      color: var(--brand-color-1);
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 0.5rem;
    }

    .diagram-subtitle {
      font-size: 1rem;
      margin-bottom: 1.5rem;
    }

    .diagram-image {
      margin-bottom: 1rem;
    }

    .diagram-image img {
      max-width: 100%;
      height: auto;
      border-radius: 0.5rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .diagram-image img:hover {
      transform: scale(1.02);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    }

    /* Simple Text Legend */
    .diagram-legend {
      text-align: center;
    }

    .diagram-legend p {
      margin-bottom: 0.5rem;
      color: #495057;
    }

    .diagram-legend p:first-child {
      margin-bottom: 1rem;
    }

    @media (max-width: 768px) {
      .diagram-section {
        margin-bottom: 2rem;
      }

      .diagram-title {
        font-size: 1.25rem;
      }

      .diagram-subtitle {
        font-size: 0.9rem;
      }

      .diagram-image img {
        border-radius: 0.25rem;
      }

      .diagram-legend p {
        font-size: 0.9rem;
      }
    }
  </style>
@endpush
