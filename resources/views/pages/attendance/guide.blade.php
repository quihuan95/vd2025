@extends('layouts.app')
@php use Illuminate\Support\Facades\Storage; @endphp

@section('title', __('common.nav.attendance_guide'))
@section('description', 'Hướng dẫn tham dự hội nghị WCES 2025')
@section('keywords', 'hướng dẫn tham dự, attendance guide, WCES 2025')

@section('og_title', __('common.nav.attendance_guide'))
@section('og_description', 'Hướng dẫn tham dự hội nghị WCES 2025')
@section('og_image', Storage::url('images/og/wces2025-attendance-guide-og.jpg'))

@section('body_class', 'com-pages view-module alias- path-attendance-guide- cva-pages-module no-user not-home width-full')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ __('common.nav.attendance_guide') }}</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section id="fMatter" class="col-12">
        <div id="f-messages"></div>

        <!-- Attendance Guide Section -->
        <div class='fModule f-attendance-guide f-module f-module-pages-custom'>
          <div class="f-module-content fModuleContent">
            <div class="container bg-light p-4">
              @if (app()->getLocale() === 'vi')
                <h3>Hướng dẫn tham dự Hội nghị Khoa học Quốc tế Bệnh viện Hữu nghị Việt Đức 2025</h3>

                <h4>1. Trước Hội nghị</h4>
                <ul>
                  <li>Quý Đại biểu được yêu cầu phải đăng ký tham dự trước khi diễn ra Hội nghị.</li>
                  <li>Sau khi đăng ký thành công, quý đại biểu sẽ nhận được email xác nhận từ Ban Tổ chức, trong đó có mã QR dùng cho toàn bộ quá trình check-in trong suốt thời gian
                    hội thảo.</li>
                  <li>Email xác nhận sẽ được gửi cho quý đại biểu trong vòng 5-7 ngày trước Hội nghị.</li>
                  <li>Quý đại biểu vui lòng lưu lại email và mã QR để thuận tiện check in tại Hội nghị.</li>
                </ul>

                <div class="alert alert-info">
                  <strong>Lưu ý:</strong> Chỉ những đại biểu đã đăng ký tham dự mới được cấp chứng chỉ Đào tạo Y khoa liên tục (CME).
                </div>

                <h4>2. Trong Ngày Hội nghị</h4>
                <ul>
                  <li>Ngày hội thảo, xin vui lòng mang theo mã QR đến quầy lễ tân để làm thủ tục check-in, nhận thẻ đeo và các thông tin cần thiết cho Hội nghị.</li>
                  <li>Để được tính điểm CME chính xác, trước khi vào mỗi phiên báo cáo, quý đại biểu vui lòng quét mã QR tại cửa ra vào hội trường. Quý đại biểu vui lòng đảm bảo
                    check-in đầy đủ ở tất cả các phiên mà quý vị tham dự.</li>
                  <li>Sau khi bế mạc Hội nghị, quý đại biểu vui lòng quay lại quầy lễ tân để ký xác nhận danh sách CME. Quầy ký xác nhận danh sách CME sẽ được mở lúc 15h30.</li>
                </ul>

                <h4>3. Sau Hội nghị</h4>
                <ul>
                  <li>Chứng chỉ CME sẽ được phát hành dưới dạng bản điện tử (PDF) và được gửi trực tiếp vào email đã đăng ký của đại biểu.</li>
                </ul>
              @else
                <h3>Attendance Guide for Viet Duc University Hospital Scientific Congress 2025</h3>

                <h4>1. Before the Congress</h4>
                <ul>
                  <li>All delegates are required to complete their registration on the congress date.</li>
                  <li>Upon successful registration, delegates will receive a confirmation email from the Organizing Committee, which will include a QR code that will be used for the
                    entire check-in process during the congress.</li>
                  <li>Confirmation Email will be sent to your registered email from 5-7 days before the Congress.</li>
                  <li>Please keep your confirmation email and the QR code ready for a quick check-in at the event.</li>
                </ul>

                <div class="alert alert-info">
                  <strong>Note:</strong> Only registered participants will be eligible to receive CME (Continuing Medical Education) credits.
                </div>

                <h4>2. On the Day of the Congress</h4>
                <ul>
                  <li>Upon arrival please proceed to the registration desk to scan the QR code for check-in, receive your delegate badge and further instruction for the day.</li>
                  <li>To ensure proper CME accreditation, delegates are kindly reminded to check in at the entrance of each scientific session by presenting their QR code to staff
                    members. Make sure to check in for every session attended, as this will be used to verify participation.</li>
                  <li>After the congress concludes, please return to the registration desk to sign the CME confirmation list. Delegates can proceed to sign the CME confirmation list
                    from 3:30 PM.</li>
                </ul>

                <h4>3. After the Congress</h4>
                <p>Certificates will be provided in electronic PDF format and sent directly to the registered email address of each delegate.</p>
              @endif
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection

@section('head')
  <style>
    .f-attendance-guide h3 {
      color: var(--brand-color-1);
      margin-bottom: 2rem;
      font-weight: 600;
    }

    .f-attendance-guide h4 {
      color: var(--brand-color-1);
      margin-top: 2rem;
      margin-bottom: 1rem;
      font-weight: 500;
    }

    .f-attendance-guide h5 {
      color: var(--brand-color-1);
      margin-top: 1.5rem;
      margin-bottom: 1rem;
      font-weight: 500;
      font-size: 1.1rem;
    }

    .f-attendance-guide p {
      margin-bottom: 1rem;
      line-height: 1.6;
    }

    .f-attendance-guide ul {
      margin-bottom: 1.5rem;
      padding-left: 2rem;
    }

    .f-attendance-guide li {
      margin-bottom: 0.8rem;
      line-height: 1.6;
    }

    .f-attendance-guide .alert {
      background-color: #e7f3ff;
      border: 1px solid #b3d9ff;
      color: #0066cc;
      padding: 1rem;
      border-radius: 0.5rem;
      margin: 1.5rem 0;
    }
  </style>
@endsection
