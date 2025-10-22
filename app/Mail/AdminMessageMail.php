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
use Symfony\Component\Mime\Email;

class AdminMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public $registration;
    public $subject;
    public $content;
    public $qrCodeUrl;
    public $ccEmails;
    public ?string $logoCid = null;
    public ?string $qrCodeCid = null;

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
        $this->logoCid = '';
        $this->qrCodeCid = '';
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

        // Tạo QR code dưới dạng SVG (không cần imagick)
        $qrCodeSvg = QrCode::format('svg')
            ->size(300)
            ->margin(1)
            ->generate($qrData);

        // Chuyển đổi SVG thành data URL để sử dụng trong email
        return 'data:image/svg+xml;base64,' . base64_encode($qrCodeSvg);
    }

    /**
     * Generate QR code SVG file for CID attachment
     */
    private function generateQrCodeSvg(): string
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

        // Tạo QR code dưới dạng SVG (không cần imagick)
        $qrCodeSvg = QrCode::format('svg')
            ->size(300)
            ->margin(1)
            ->generate($qrData);

        // Lưu vào file tạm
        $tempPath = storage_path('app/temp/qr_' . $this->registration->id . '.svg');
        file_put_contents($tempPath, $qrCodeSvg);

        return $tempPath;
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
     * Build the message.
     */
    public function build()
    {
        // Tạo QR code SVG file
        $qrCodePath = $this->generateQrCodeSvg();
        
        // Nhúng logo và QR code, lấy CID từ Symfony Email
        $logoCid = '';
        $qrCodeCid = '';
        $this->withSymfonyMessage(function (Email $email) use (&$logoCid, &$qrCodeCid, $qrCodePath) {
            $logoCid = $email->embedFromPath(
                public_path('images/Logo BV - No Text.png'),
                'logo.png',
                'image/png'
            );
            $qrCodeCid = $email->embedFromPath(
                $qrCodePath,
                'qrcode.svg',
                'image/svg+xml'
            );
        });
        $this->logoCid = $logoCid;
        $this->qrCodeCid = $qrCodeCid;

        return $this->subject($this->subject)
                    ->view('mail.admin-message')
                    ->with([
                        'registration' => $this->registration,
                        'subject' => $this->subject,
                        'content' => $this->content,
                        'qrCodeUrl' => $this->qrCodeUrl,
                        'ccEmails' => $this->ccEmails,
                        'logoCid' => $this->logoCid,
                        'qrCodeCid' => $this->qrCodeCid,
                    ]);
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
                'logoCid' => $this->logoCid,
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
