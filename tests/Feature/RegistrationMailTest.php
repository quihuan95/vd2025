<?php

namespace Tests\Feature;

use App\Mail\RegistrationConfirmationMail;
use App\Models\Registration;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class RegistrationMailTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_confirmation_mail_is_sent_after_registration()
    {
        // Fake mail để không thực sự gửi mail
        Mail::fake();

        // Tạo dữ liệu đăng ký
        $registrationData = [
            'full_name' => 'Nguyễn Văn A',
            'gender' => 'male',
            'date_of_birth' => '1990-01-01',
            'organization' => 'Bệnh viện Hữu nghị Việt Đức',
            'department' => 'Khoa Ngoại',
            'title' => 'Bác sĩ',
            'email' => 'test@example.com',
            'phone' => '0123456789',
            'event_type' => 'both',
            'gala_dinner' => true,
        ];

        // Gửi request đăng ký
        $response = $this->post(route('registration.store', ['locale' => 'vi']), $registrationData);

        // Kiểm tra response redirect thành công
        $response->assertRedirect();
        $response->assertSessionHas('success');

        // Kiểm tra đăng ký được tạo trong database
        $this->assertDatabaseHas('registrations', [
            'email' => 'test@example.com',
            'full_name' => 'Nguyễn Văn A',
        ]);

        // Kiểm tra mail đã được gửi
        Mail::assertSent(RegistrationConfirmationMail::class, function ($mail) {
            return $mail->registration->email === 'test@example.com';
        });
    }

    public function test_registration_confirmation_mail_contains_correct_data()
    {
        // Tạo registration trong database
        $registration = Registration::create([
            'registration_code' => 'VD-0001',
            'full_name' => 'Nguyễn Văn A',
            'gender' => 'male',
            'date_of_birth' => '1990-01-01',
            'organization' => 'Bệnh viện Hữu nghị Việt Đức',
            'department' => 'Khoa Ngoại',
            'title' => 'Bác sĩ',
            'email' => 'test@example.com',
            'phone' => '0123456789',
            'event_type' => 'both',
            'gala_dinner' => true,
            'status' => 'pending',
        ]);

        // Tạo mail instance
        $mail = new RegistrationConfirmationMail($registration);

        // Kiểm tra subject
        $this->assertStringContainsString('VD-0001', $mail->envelope()->subject);

        // Kiểm tra content
        $content = $mail->content();
        $this->assertEquals('mail.admin-message', $content->view);
        $this->assertEquals($registration, $content->with['registration']);
        $this->assertArrayHasKey('qrCodeUrl', $content->with);
        $this->assertArrayHasKey('content', $content->with);
    }

    public function test_registration_continues_even_if_mail_fails()
    {
        // Fake mail để throw exception
        Mail::fake();
        Mail::shouldReceive('to->send')
            ->andThrow(new \Exception('Mail service unavailable'));

        // Tạo dữ liệu đăng ký
        $registrationData = [
            'full_name' => 'Nguyễn Văn A',
            'gender' => 'male',
            'date_of_birth' => '1990-01-01',
            'organization' => 'Bệnh viện Hữu nghị Việt Đức',
            'department' => 'Khoa Ngoại',
            'title' => 'Bác sĩ',
            'email' => 'test@example.com',
            'phone' => '0123456789',
            'event_type' => 'both',
            'gala_dinner' => true,
        ];

        // Gửi request đăng ký
        $response = $this->post(route('registration.store', ['locale' => 'vi']), $registrationData);

        // Kiểm tra response vẫn thành công mặc dù mail fail
        $response->assertRedirect();
        $response->assertSessionHas('success');

        // Kiểm tra đăng ký vẫn được tạo trong database
        $this->assertDatabaseHas('registrations', [
            'email' => 'test@example.com',
            'full_name' => 'Nguyễn Văn A',
        ]);
    }
}
