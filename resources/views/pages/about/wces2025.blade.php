@extends('layouts.app')
@php use Illuminate\Support\Facades\Storage; @endphp

@section('title', __('about.title'))
@section('description', __('about.description'))
@section('keywords', __('about.keywords'))

@section('og_title', __('about.title'))
@section('og_description', __('about.description'))
@section('og_image', Storage::url('images/og/wces2025-about-og.jpg'))

@section('body_class', 'com-pages view-module alias- path-about-wces2025- cva-pages-module no-user not-home width-full')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ __('about.page_title') }}</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section id="fMatter" class="col-12">
        <div id="f-messages"></div>

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
                <!-- Morning Session Diagram -->
                <div class="diagram-section">
                  <h4 class="diagram-title">{{ __('about.sections.conference_diagram.morning.title') }}</h4>
                  <div class="diagram-image">
                    <img src="{{ Storage::url('images/layout_sang_1.11.jpg') }}" alt="{{ __('about.sections.conference_diagram.morning.title') }}" class="img-fluid rounded shadow">
                  </div>
                </div>

                <!-- Afternoon Session Diagram -->
                <div class="diagram-section">
                  <h4 class="diagram-title">{{ __('about.sections.conference_diagram.afternoon.title') }}</h4>
                  <div class="diagram-image">
                    <img src="{{ Storage::url('images/layout_chieu_1.11.jpg') }}" alt="{{ __('about.sections.conference_diagram.afternoon.title') }}"
                      class="img-fluid rounded shadow">
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

@section('head')
  <style>
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
    }
  </style>
@endsection
