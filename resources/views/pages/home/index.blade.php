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
                <p>Chúng tôi trân trọng kính mời Quý vị tham dự Hội nghị Khoa học Quốc tế Bệnh viện Hữu nghị Việt Đức năm 2025, diễn ra tại Hà Nội ngày 01 tháng 11 năm 2025. Đây là
                  lần đầu tiên Bệnh viện Hữu nghị Việt Đức vinh dự đăng cai sự kiện quan trọng này, và chúng tôi rất vui mừng được chào đón sự tham dự của các chuyên gia và các bác
                  sĩ đến từ khắp nơi trên thế giới.</p>
                <p>Hội nghị sẽ mang đến một chương trình khoa học đa dạng và toàn diện, bao gồm 04 phiên chuyên đề với khoảng 40 bài tham luận. Nội dung thảo luận trải dài nhiều lĩnh
                  vực bao gồm: ghép tạng, tim mạch, tiêu hóa, chấn thương chỉnh hình chỉnh hình…</p>
                <p>Chúng tôi tin rằng hội nghị lần này sẽ là một cơ hội đặc biệt để học hỏi, nâng cao kỹ năng chuyên môn và mở rộng kết nối quốc tế, thúc đẩy những trao đổi và hợp
                  tác giữa các chuyên gia hàng đầu. Từ đó, áp dụng những tiến bộ khoa học để cải thiện dịch vụ y tế và nâng cao sức khỏe toàn cầu.</p>
                <p>Chúng tôi rất mong được đón tiếp Quý vị tại Hà Nội và cùng nhau tạo nên một hội nghị thành công, ý nghĩa.</p>
                <p><strong>Trân trọng,</strong><br>
                  <strong>Dương Đức Hùng</strong><br>
                  <strong>Giám đốc</strong><br>
                  <strong>Bệnh viện Hữu nghị Việt Đức</strong>
                </p>
              @else
                <p><strong>Dear Colleagues and Friends,</strong></p>
                <p>It is our great pleasure to welcome you to the Viet Duc University Hospital Scientific Congress 2025, taking place in Hanoi on November 1, 2025. This marks the
                  very first time that Viet Duc University Hospital has the honor of hosting this distinguished event, and we are delighted to bring together leading experts,
                  researchers, and practitioners from across the globe.</p>
                <p>The Congress will feature a diverse and comprehensive scientific program, including four sessions with approximately 40 presentations. The discussions will span
                  multiple specialties — with a special focus on organ transplantation, alongside important topics in cardiovascular, gastrointestinal, and orthopedic, among others.
                </p>
                <p>We believe that this congress will be a unique opportunity for training, skill enhancement, and global networking, fostering meaningful exchanges among leading
                  professionals. Ultimately, our shared goal is to translate these advancements into better patient care and improved health outcomes worldwide.</p>
                <p>We warmly look forward to welcoming you to Hanoi and to an inspiring and productive conference experience.</p>
                <p><strong>Warm regards,</strong><br>
                  <strong>DUONG Duc Hung</strong><br>
                  <strong>Director</strong><br>
                  <strong>Viet Duc University Hospital</strong>
                </p>
              @endif
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
