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
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

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
