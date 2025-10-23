<?php

namespace App\Mail;

use App\Models\Registration;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

class RegistrationConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $registration;
    public $qrCodeUrl;

    /**
     * Create a new message instance.
     */
    public function __construct(Registration $registration)
    {
        $this->registration = $registration;
        $this->qrCodeUrl = $this->generateQrCode();
    }

    /**
     * Generate QR code for the registration
     */
    private function generateQrCode(): string
    {
        // Tạo nội dung QR code chỉ với registration_code
        $qrData = $this->registration->registration_code;

        // Đường dẫn file QR code
        $qrCodePath = public_path('images/' . $this->registration->registration_code . '.png');
        
        // Kiểm tra nếu file đã tồn tại thì sử dụng lại
        if (file_exists($qrCodePath)) {
            return asset('images/' . $this->registration->registration_code . '.png');
        }

        // Tạo QR code dưới dạng PNG (không cần imagick)
        $options = new QROptions([
            'outputType' => QRCode::OUTPUT_IMAGE_PNG,
            'eccLevel'   => QRCode::ECC_L,
            'scale'      => 5,
            'imageBase64' => false,
        ]);
        
        $qrcode = new QRCode($options);
        $qrCodePng = $qrcode->render($qrData);

        // Lưu vào public/images
        file_put_contents($qrCodePath, $qrCodePng);

        // Trả về URL của QR code
        return asset('images/' . $this->registration->registration_code . '.png');
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subject = app()->getLocale() === 'vi' 
            ? 'Xác nhận đăng ký tham gia VDUHSC 2025 - ' . $this->registration->registration_code
            : 'Registration Confirmation for VDUHSC 2025 - ' . $this->registration->registration_code;

        return new Envelope(
            subject: $subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $subject = app()->getLocale() === 'vi' 
            ? 'Xác nhận đăng ký tham gia VDUHSC 2025 - ' . $this->registration->registration_code
            : 'Registration Confirmation for VDUHSC 2025 - ' . $this->registration->registration_code;

        $content = app()->getLocale() === 'vi'
            ? "Xin chào " . $this->registration->full_name . ",\n\nCảm ơn bạn đã đăng ký tham gia Hội nghị Khoa học Quốc tế Bệnh viện Hữu nghị Việt Đức 2025. Đăng ký của bạn đã được tiếp nhận thành công.\n\nMã đăng ký: " . $this->registration->registration_code . "\n\nChúng tôi rất mong được gặp bạn tại sự kiện!"
            : "Dear " . $this->registration->full_name . ",\n\nThank you for registering for the Viet Duc University Hospital International Scientific Conference 2025. Your registration has been successfully received.\n\nRegistration Code: " . $this->registration->registration_code . "\n\nWe look forward to seeing you at the event!";

        return new Content(
            view: 'mail.admin-message',
            with: [
                'registration' => $this->registration,
                'subject' => $subject,
                'content' => $content,
                'qrCodeUrl' => $this->qrCodeUrl,
                'ccEmails' => [],
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
