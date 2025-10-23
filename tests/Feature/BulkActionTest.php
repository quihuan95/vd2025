<?php

namespace Tests\Feature;

use App\Mail\RegistrationConfirmationMail;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class BulkActionTest extends TestCase
{
    use RefreshDatabase;

    public function test_bulk_send_confirmation_requires_authentication()
    {
        $response = $this->post(route('admin.registrations.bulk-send-confirmation'), [
            'selected_registrations' => [1, 2, 3]
        ]);

        $response->assertRedirect(route('admin.login'));
    }

    public function test_bulk_send_confirmation_requires_selected_registrations()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->post(route('admin.registrations.bulk-send-confirmation'), []);

        $response->assertSessionHasErrors(['selected_registrations']);
    }

    public function test_bulk_send_confirmation_sends_emails_to_selected_registrations()
    {
        Mail::fake();

        $user = User::factory()->create();
        $this->actingAs($user);

        // Tạo 3 đăng ký
        $registration1 = Registration::create([
            'registration_code' => 'VD-0001',
            'full_name' => 'Nguyễn Văn A',
            'gender' => 'male',
            'date_of_birth' => '1990-01-01',
            'organization' => 'Bệnh viện Hữu nghị Việt Đức',
            'department' => 'Khoa Ngoại',
            'title' => 'Bác sĩ',
            'email' => 'test1@example.com',
            'phone' => '0123456789',
            'event_type' => 'both',
            'gala_dinner' => true,
            'status' => 'pending',
        ]);

        $registration2 = Registration::create([
            'registration_code' => 'VD-0002',
            'full_name' => 'Trần Thị B',
            'gender' => 'female',
            'date_of_birth' => '1985-05-15',
            'organization' => 'Bệnh viện Hữu nghị Việt Đức',
            'department' => 'Khoa Nội',
            'title' => 'Bác sĩ',
            'email' => 'test2@example.com',
            'phone' => '0987654321',
            'event_type' => 'university_hospital_international_scientific_conference',
            'gala_dinner' => false,
            'status' => 'pending',
        ]);

        $registration3 = Registration::create([
            'registration_code' => 'VD-0003',
            'full_name' => 'Lê Văn C',
            'gender' => 'male',
            'date_of_birth' => '1988-12-10',
            'organization' => 'Bệnh viện Hữu nghị Việt Đức',
            'department' => 'Khoa Tim mạch',
            'title' => 'Bác sĩ',
            'email' => 'test3@example.com',
            'phone' => '0369852147',
            'event_type' => 'pre_conference_workshop',
            'gala_dinner' => true,
            'status' => 'pending',
        ]);

        // Gửi bulk action
        $response = $this->post(route('admin.registrations.bulk-send-confirmation'), [
            'selected_registrations' => [$registration1->id, $registration3->id]
        ]);

        // Kiểm tra response
        $response->assertRedirect();
        $response->assertSessionHas('success');

        // Kiểm tra mail đã được gửi cho 2 đăng ký được chọn
        Mail::assertSent(RegistrationConfirmationMail::class, 2);
        
        Mail::assertSent(RegistrationConfirmationMail::class, function ($mail) use ($registration1) {
            return $mail->registration->id === $registration1->id;
        });

        Mail::assertSent(RegistrationConfirmationMail::class, function ($mail) use ($registration3) {
            return $mail->registration->id === $registration3->id;
        });

        // Kiểm tra mail KHÔNG được gửi cho đăng ký không được chọn
        Mail::assertNotSent(RegistrationConfirmationMail::class, function ($mail) use ($registration2) {
            return $mail->registration->id === $registration2->id;
        });
    }

    public function test_bulk_send_confirmation_handles_errors_gracefully()
    {
        Mail::fake();
        Mail::shouldReceive('to->send')
            ->andThrow(new \Exception('Mail service unavailable'));

        $user = User::factory()->create();
        $this->actingAs($user);

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

        $response = $this->post(route('admin.registrations.bulk-send-confirmation'), [
            'selected_registrations' => [$registration->id]
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('warning');
        $response->assertSessionHas('warning', function ($message) {
            return str_contains($message, 'Có 1 email gửi thất bại');
        });
    }

    public function test_bulk_send_confirmation_validates_registration_ids()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->post(route('admin.registrations.bulk-send-confirmation'), [
            'selected_registrations' => [999, 1000] // Non-existent IDs
        ]);

        $response->assertSessionHasErrors(['selected_registrations.0', 'selected_registrations.1']);
    }
}
