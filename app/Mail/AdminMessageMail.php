<?php

namespace App\Mail;

use App\Models\Registration;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AdminMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public $registration;
    public $subject;
    public $content;
    public $qrCodeUrl;
    public $ccEmails;

    /**
     * Create a new message instance.
     */
    public function __construct(Registration $registration, string $subject, string $content, array $ccEmails = [])
    {
        $this->registration = $registration;
        $this->subject = $subject;
        $this->content = $content;
        $this->ccEmails = $ccEmails;
        $this->qrCodeUrl = $this->generateQrCode();
    }

    /**
     * Generate QR code for the registration
     */
    private function generateQrCode(): string
    {
        // Tạo nội dung QR code với thông tin registration
        $qrData = json_encode([
            'registration_code' => $this->registration->registration_code,
            'full_name' => $this->registration->full_name,
            'email' => $this->registration->email,
            'organization' => $this->registration->organization,
            'event' => 'VDUHSC 2025',
            'date' => '2025-11-01',
            'venue' => 'Lotte Hotel Hanoi'
        ]);

        // Đường dẫn file QR code
        $qrCodePath = public_path('images/' . $this->registration->registration_code . '.svg');
        
        // Kiểm tra nếu file đã tồn tại thì sử dụng lại
        if (file_exists($qrCodePath)) {
            return asset('images/' . $this->registration->registration_code . '.svg');
        }

        // Tạo QR code dưới dạng SVG (không cần imagick)
        $qrCodeSvg = QrCode::format('svg')
            ->size(300)
            ->margin(1)
            ->generate($qrData);

        // Lưu vào public/images
        file_put_contents($qrCodePath, $qrCodeSvg);

        // Trả về URL của QR code
        return asset('images/' . $this->registration->registration_code . '.svg');
    }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }


    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.admin-message',
            with: [
                'registration' => $this->registration,
                'subject' => $this->subject,
                'content' => $this->content,
                'qrCodeUrl' => $this->qrCodeUrl,
                'ccEmails' => $this->ccEmails,
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
