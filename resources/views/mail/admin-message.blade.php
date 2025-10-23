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
            font-family: 'Times New Roman', serif;
            background-color: #f5f5f5;
        }
        
        .email-wrapper {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
        }
        
        /* Header với gradient xanh lá */
        .header-gradient-1 {
            background: linear-gradient(135deg, #2e7d32 0%, #4caf50 50%, #66bb6a 100%);
            height: 20px;
            width: 100%;
        }
        
        .header-gradient-2 {
            background: linear-gradient(135deg, #4caf50 0%, #66bb6a 50%, #8bc34a 100%);
            height: 20px;
            width: 100%;
        }
        
        .header-gradient-3 {
            background: linear-gradient(135deg, #66bb6a 0%, #8bc34a 50%, #a5d6a7 100%);
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
            display: table;
            width: 100%;
        }
        
        .logo-circle {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: table-cell;
            vertical-align: middle;
            text-align: center;
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
            display: table-cell;
            vertical-align: middle;
            line-height: 1.2;
            padding-left: 15px;
        }
        
        .logo-text .hospital-name {
            font-size: 12px;
            font-weight: bold;
            color: #2e7d32;
            font-style: italic;
            margin: 0;
        }
        
        .logo-text .viet-duc {
            font-size: 18px;
            font-weight: bold;
            color: #2e7d32;
            margin: 0;
        }
        
        .logo-text .university {
            font-size: 12px;
            color: #2e7d32;
            font-weight: bold;
            font-style: italic;
            margin: 0;
        }
        
        .main-title {
            font-family: 'Times New Roman', serif;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin: 0;
            line-height: 1.1;
        }
        
        .sub-title {
            font-family: 'Times New Roman', serif;
            font-size: 24px;
            font-weight: bold;
            font-style: italic;
            color: #333;
            margin: 5px 0 0 0;
        }
        
        /* Nội dung chính */
        .main-content {
            padding: 40px;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
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
        
        .info-label {
            font-weight: bold;
            color: #333;
        }
        
        .info-value {
            color: #1976d2;
            font-weight: bold;
        }
        
        .thank-you {
            margin: 4px 0;
            font-size: 16px;
            color: #333;
        }
        
        .conference-title {
            font-family: 'Times New Roman', serif;
            font-size: 22px;
            font-weight: bold;
            color: #333;
            margin: 10px 0;
            line-height: 1.3;
        }

        .thank-you-en {
            margin: 4px 0;
            font-size: 16px;
            font-style: italic;
            color: #333;
        }

        
        .conference-title-en {
            font-family: 'Times New Roman', serif;
            font-size: 22px;
            font-weight: bold;
            font-style: italic;
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
            margin-top: 80px;
            font-style: italic;
            color: #333;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .website-info {
            margin: 30px 0;
            color: #333;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .website-info a {
            color: #1976d2;
            text-decoration: none;
        }
        
        /* Footer với gradient xanh lá */
        .footer-gradient-1 {
            background: linear-gradient(135deg, #2e7d32 0%, #4caf50 50%, #66bb6a 100%);
            height: 20px;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .footer-gradient-2 {
            background: linear-gradient(135deg, #4caf50 0%, #66bb6a 50%, #8bc34a 100%);
            height: 20px;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .footer-gradient-3 {
            background: linear-gradient(135deg, #66bb6a 0%, #8bc34a 50%, #a5d6a7 100%);
            height: 20px;
            max-width: 800px;
            margin: 0 auto;
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
            
            .logo-container {
                display: block;
            }
            
            .logo-circle,
            .logo-text {
                display: block;
                text-align: center;
                margin: 0 auto;
            }
            
            .logo-text {
                padding-left: 0;
                margin-top: 10px;
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
        <div class="header-gradient-1"></div>
        <div class="header-gradient-2"></div>
        <div class="header-gradient-3"></div>
        
        <!-- Header Content -->
        <div class="header-content">
            <div class="logo-section">
                <div class="logo-container" style="display: table; width: 100%;">
                    <div class="logo-circle">
                        <img src='https://vduhsc2025.org/images/Logo%20BV%20-%20No%20Text.png' alt="Logo Bệnh viện Hữu nghị Việt Đức" style="width: 100px; height: 100px; object-fit: contain;">
                    </div>
                    <div class="logo-text">
                        <p class="hospital-name">BỆNH VIỆN HỮU NGHỊ</p>
                        <p class="viet-duc">VIỆT ĐỨC</p>
                        <p class="university">UNIVERSITY HOSPITAL</p>
                    </div>
                </div>
            </div>
            <div class="title-section">
                <h1 class="main-title">THƯ XÁC NHẬN</h1>
                <p class="sub-title">CONFIRMATION EMAIL</p>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="main-content">
            <!-- QR Code -->
            <div class="qr-code">
                <img src="https://vduhsc2025.org/images/{{ $registration->registration_code }}.png" alt="QR Code" style="width: 150px; height: 150px; border: 2px solid #ddd; display: block; margin: 0 auto;" />
            </div>
            
            <!-- Participant Information -->
            <div class="participant-info">
                <div class="info-row">
                    <span class="info-label">Họ tên:</span> <b style="color: #1976d2">{{ $registration->full_name }}</b><br>
                    <span class="info-label" style="font-style: italic;">Full name:</span> <b style="color: #1976d2">{{ $registration->full_name }}</b>
                </div>
                <div class="info-row">
                    <span class="info-label">Ngày tháng năm sinh:</span> <b style="color: #1976d2">{{ date('d/m/Y', strtotime($registration->date_of_birth)) }}</b><br>
                    <span class="info-label" style="font-style: italic;">Date of birth:</span> <b style="color: #1976d2">{{ date('d/m/Y', strtotime($registration->date_of_birth)) }}</b>
                </div>
                <div class="info-row">
                    <span class="info-label">Đơn vị công tác:</span> <b style="color: #1976d2">{{ $registration->organization }}</b><br>
                    <span class="info-label" style="font-style: italic;">Organization:</span> <b style="color: #1976d2">{{ $registration->organization }}</b>
                </div>
            </div>
            
            <!-- Thank You Message -->
            <div class="thank-you">
                Trân trọng cảm ơn Quý khách đã đăng ký tham dự
            </div>
            
            <!-- Conference Title -->
            <div class="conference-title">
                HỘI NGHỊ KHOA HỌC QUỐC TẾ
                BỆNH VIỆN HỮU NGHỊ VIỆT ĐỨC NĂM 2025
            </div>
            
            <div class="thank-you-en">
                Thank you for joining us at the
            </div>
            <div class="conference-title-en">
                VIET DUC UNIVERSITY HOSPITAL<br>
                INTERNATIONAL SCIENTIFIC CONFERENCE 2025
            </div>
            
            <!-- Event Details -->
            <div class="event-details">
                <div class="detail-row">
                    <span class="detail-label">Thời gian:</span> 08h00 – 20h00, thứ Bảy, ngày 01 tháng 11 năm 2025<br>
                    <span class="detail-label">Địa điểm:</span> Tầng 6, Khách sạn Lotte Hà Nội, 54 Liễu Giai, Giảng Võ, Hà Nội<br>
                </div>
                <div class="detail-row">
                    <span class="detail-label" style="font-style: italic;">Time:</span> 8:00 AM – 8:00 PM, Saturday, November 1st, 2025<br>
                    <span class="detail-label" style="font-style: italic;">Venue:</span> 6th Floor, Lotte Hotel Hanoi, 54 Lieu Giai St, Giang Vo Ward, Hanoi
                </div>
            </div>
            
            <!-- Check-in Instructions -->
            <div class="checkin-instructions">
                <strong>Quý khách vui lòng mang theo thư xác nhận tham dự (kèm mã vạch - QR code) để làm thủ tục <br> check-in nhanh tại sự kiện.<br>
                <em>Please bring your confirmation email (with the QR code) for a quick check-in at the event.</em></strong>
            </div>
            
            <!-- Website Information -->
            <div class="website-info" style="font-style: italic;">
                Để biết thêm thông tin chi tiết, vui lòng truy cập website (<a href="https://vduhsc2025.org/vi">https://vduhsc2025.org/vi</a>)<br>
                For more information, please visit us at (<a href="https://vduhsc2025.org/en">https://vduhsc2025.org/en</a>)
            </div>
        </div>
        
        <!-- Footer Gradient -->
        <div class="footer-gradient-1"></div>
        <div class="footer-gradient-2"></div>
        <div class="footer-gradient-3"></div>
    </div>
</body>
</html>
