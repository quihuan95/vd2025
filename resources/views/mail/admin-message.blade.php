<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject }}</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        
        .email-wrapper {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
        }
        
        /* Header với gradient xanh lá */
        .header-gradient {
            background: linear-gradient(135deg, #2e7d32 0%, #4caf50 50%, #66bb6a 100%);
            height: 20px;
            width: 100%;
        }
        
        /* Logo và tiêu đề */
        .header-content {
            padding: 20px 40px;
            display: table;
            width: 100%;
            box-sizing: border-box;
        }
        
        .logo-section {
            display: table-cell;
            vertical-align: top;
            width: 60%;
        }
        
        .title-section {
            display: table-cell;
            vertical-align: top;
            width: 40%;
            text-align: right;
        }
        
        .logo-container {
            display: flex;
            align-items: center;
        }
        
        .logo-circle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, #2e7d32, #4caf50);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            padding: 5px;
            box-sizing: border-box;
        }
        
        .logo-circle img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            border-radius: 50%;
        }
        
        .logo-text {
            line-height: 1.2;
        }
        
        .logo-text .hospital-name {
            font-size: 14px;
            font-weight: bold;
            color: #333;
            margin: 0;
        }
        
        .logo-text .viet-duc {
            font-size: 18px;
            font-weight: bold;
            color: #d32f2f;
            margin: 0;
        }
        
        .logo-text .university {
            font-size: 12px;
            color: #333;
            margin: 0;
        }
        
        .main-title {
            font-family: 'Times New Roman', serif;
            font-size: 28px;
            font-weight: bold;
            color: #333;
            margin: 0;
            line-height: 1.1;
        }
        
        .sub-title {
            font-family: 'Times New Roman', serif;
            font-size: 16px;
            font-style: italic;
            color: #333;
            margin: 5px 0 0 0;
        }
        
        /* Nội dung chính */
        .main-content {
            padding: 40px;
            text-align: center;
        }
        
        .qr-code {
            margin: 30px 0;
        }
        
        .qr-code img {
            width: 150px;
            height: 150px;
            border: 2px solid #ddd;
            display: block;
            margin: 0 auto;
        }
        
        .participant-info {
            margin: 30px 0;
            line-height: 1.8;
        }
        
        .info-row {
            margin: 8px 0;
        }
        
        .info-label {
            font-weight: bold;
            color: #333;
        }
        
        .info-value {
            color: #1976d2;
            font-weight: bold;
        }
        
        .thank-you {
            margin: 40px 0;
            font-size: 16px;
            color: #333;
        }
        
        .conference-title {
            font-family: 'Times New Roman', serif;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin: 20px 0;
            line-height: 1.3;
        }
        
        .conference-title-en {
            font-family: 'Times New Roman', serif;
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin: 10px 0;
            line-height: 1.3;
        }
        
        .event-details {
            margin: 30px 0;
            line-height: 1.8;
        }
        
        .detail-row {
            margin: 10px 0;
        }
        
        .detail-label {
            font-weight: bold;
            color: #333;
        }
        
        .checkin-instructions {
            margin: 30px 0;
            font-style: italic;
            color: #333;
            line-height: 1.6;
        }
        
        .website-info {
            margin: 30px 0;
            color: #333;
            line-height: 1.6;
        }
        
        .website-info a {
            color: #1976d2;
            text-decoration: none;
        }
        
        /* Footer với gradient xanh lá */
        .footer-gradient {
            background: linear-gradient(135deg, #2e7d32 0%, #4caf50 50%, #66bb6a 100%);
            height: 20px;
            width: 100%;
        }
        
        /* Responsive */
        @media (max-width: 600px) {
            .header-content {
                padding: 15px 20px;
            }
            
            .main-content {
                padding: 20px;
            }
            
            .logo-section,
            .title-section {
                display: block;
                width: 100%;
                text-align: center;
            }
            
            .title-section {
                margin-top: 20px;
            }
            
            .main-title {
                font-size: 24px;
            }
            
            .conference-title {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <!-- Header Gradient -->
        <div class="header-gradient"></div>
        
        <!-- Header Content -->
        <div class="header-content">
            <div class="logo-section">
                <div class="logo-container">
                    <div class="logo-circle">
                        <img src="{{ $logoCid }}" alt="Logo Bệnh viện Hữu nghị Việt Đức" style="width: 50px; height: 50px; object-fit: contain;">
                    </div>
                    <div class="logo-text">
                        <p class="hospital-name">BỆNH VIỆN HỮU NGHỊ</p>
                        <p class="viet-duc">VIỆT ĐỨC</p>
                        <p class="university">UNIVERSITY HOSPITAL</p>
                    </div>
                </div>
            </div>
            <div class="title-section"></div>
                <h1 class="main-title">THƯ XÁC NHẬN</h1>
                <p class="sub-title">CONFIRMATION EMAIL</p>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="main-content">
            <!-- QR Code -->
            <div class="qr-code">
                <img src="{{ $qrCodeCid }}" alt="QR Code" style="width: 150px; height: 150px; border: 2px solid #ddd; display: block; margin: 0 auto;" />
            </div>
            
            <!-- Participant Information -->
            <div class="participant-info">
                <div class="info-row">
                    <span class="info-label">Họ tên / Full name:</span>
                    <span class="info-value">{{ $registration->full_name }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Đơn vị công tác / Organization:</span>
                    <span class="info-value">{{ $registration->organization }}</span>
                </div>
            </div>
            
            <!-- Thank You Message -->
            <div class="thank-you">
                Trân trọng cảm ơn Quý khách đã đăng ký tham dự
            </div>
            
            <!-- Conference Title -->
            <div class="conference-title">
                HỘI NGHỊ KHOA HỌC QUỐC TẾ<br>
                BỆNH VIỆN HỮU NGHỊ VIỆT ĐỨC NĂM 2025
            </div>
            
            <div class="conference-title-en">
                Thank you for joining us at the<br>
                VIET DUC UNIVERSITY HOSPITAL<br>
                INTERNATIONAL SCIENTIFIC CONFERENCE 2025
            </div>
            
            <!-- Event Details -->
            <div class="event-details"></div>
                <div class="detail-row">
                    <span class="detail-label">Thời gian / Time:</span>
                    08h00 – 20h00, thứ Bảy, ngày 01 tháng 11 năm 2025<br>
                    8:00 AM – 8:00 PM, Saturday, November 1st, 2025
                </div>
                <div class="detail-row">
                    <span class="detail-label">Địa điểm / Venue:</span>
                    Tầng 6, Khách sạn Lotte Hà Nội, 54 Liễu Giai, Giảng Võ, Hà Nội<br>
                    6th Floor, Lotte Hotel Hanoi, 54 Lieu Giai St, Giang Vo Ward, Hanoi
                </div>
            </div>
            
            <!-- Check-in Instructions -->
            <div class="checkin-instructions">
                Quý khách vui lòng mang theo thư xác nhận tham dự (kèm mã vạch - QR code) để làm thủ tục check-in nhanh tại sự kiện.<br>
                Please bring your confirmation email (with the QR code) for a quick check-in at the event.
            </div>
            
            <!-- Website Information -->
            <div class="website-info">
                Để biết thêm thông tin chi tiết, vui lòng truy cập website <a href="https://vduhsc2025.org/vi">https://vduhsc2025.org/vi</a><br>
                For more information, please visit us at <a href="https://vduhsc2025.org/en">https://vduhsc2025.org/en</a>
            </div>
            
            <!-- Custom Message -->
            @if($content)
            <div style="margin-top: 40px; padding: 20px; background-color: #f8f9fa; border-left: 4px solid #2e7d32; border-radius: 4px;">
                <p style="margin: 0; white-space: pre-line; color: #333;">{{ $content }}</p>
            </div>
            @endif
            
            <!-- CC Information -->
            @if(!empty($ccEmails))
            <div style="margin-top: 20px; padding: 15px; background-color: #e8f5e8; border-left: 4px solid #4caf50; border-radius: 4px;">
                <p style="margin: 0; color: #2e7d32; font-size: 14px;">
                    <strong>Email này cũng được gửi đến:</strong><br>
                    {{ implode(', ', $ccEmails) }}
                </p>
            </div>
            @endif
        </div>
        
        <!-- Footer Gradient -->
        <div class="footer-gradient"></div>
    </div>
</body>
</html>
