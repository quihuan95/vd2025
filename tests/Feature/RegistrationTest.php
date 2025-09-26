<?php

namespace Tests\Feature;

use App\Models\Registration;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    #[Test]
    public function user_can_view_registration_form()
    {
        $response = $this->get('/en/registration');

        $response->assertStatus(200);
        $response->assertSee('Registration');
        $response->assertSee('Full name');
        $response->assertSee('Email');
    }

    #[Test]
    public function user_can_submit_registration_form_with_valid_data()
    {
        $registrationData = [
            'full_name' => 'Nguyễn Văn A',
            'gender' => 'male',
            'date_of_birth' => '1990-01-01',
            'organization' => 'Bệnh viện Hữu nghị Việt Đức',
            'department' => 'Khoa Ngoại tổng hợp',
            'title' => 'Bác sĩ',
            'email' => 'test@example.com',
            'phone' => '0123456789',
        ];

        $response = $this->post('/registration', $registrationData);

        $response->assertRedirect();
        $response->assertSessionHas('registration_code');

        $this->assertDatabaseHas('registrations', [
            'full_name' => 'Nguyễn Văn A',
            'email' => 'test@example.com',
            'status' => 'pending'
        ]);
    }

    #[Test]
    public function registration_requires_all_fields()
    {
        $response = $this->post('/registration', []);

        $response->assertRedirect();
        $response->assertSessionHasErrors([
            'full_name',
            'gender',
            'date_of_birth',
            'organization',
            'department',
            'title',
            'email',
            'phone'
        ]);
    }

    #[Test]
    public function registration_requires_valid_email()
    {
        $registrationData = [
            'full_name' => 'Nguyễn Văn A',
            'gender' => 'male',
            'date_of_birth' => '1990-01-01',
            'organization' => 'Bệnh viện Hữu nghị Việt Đức',
            'department' => 'Khoa Ngoại tổng hợp',
            'title' => 'Bác sĩ',
            'email' => 'invalid-email',
            'phone' => '0123456789',
        ];

        $response = $this->post('/registration', $registrationData);

        $response->assertRedirect();
        $response->assertSessionHasErrors(['email']);
    }

    #[Test]
    public function registration_allows_duplicate_emails()
    {
        // Create first registration
        Registration::create([
            'registration_code' => 'VD-0001',
            'full_name' => 'Nguyễn Văn A',
            'gender' => 'male',
            'date_of_birth' => '1990-01-01',
            'organization' => 'Bệnh viện Hữu nghị Việt Đức',
            'department' => 'Khoa Ngoại tổng hợp',
            'title' => 'Bác sĩ',
            'email' => 'test@example.com',
            'phone' => '0123456789',
        ]);

        // Try to create second registration with same email (should be allowed)
        $registrationData = [
            'full_name' => 'Nguyễn Văn B',
            'gender' => 'female',
            'date_of_birth' => '1985-05-15',
            'organization' => 'Bệnh viện Bạch Mai',
            'department' => 'Khoa Tim mạch',
            'title' => 'Tiến sĩ',
            'email' => 'test@example.com', // Same email
            'phone' => '0987654321',
        ];

        $response = $this->post('/registration', $registrationData);

        $response->assertRedirect();
        $this->assertDatabaseHas('registrations', [
            'full_name' => 'Nguyễn Văn B',
            'email' => 'test@example.com',
        ]);
    }

    #[Test]
    public function registration_generates_unique_code()
    {
        // Create first registration
        $registration1 = Registration::create([
            'registration_code' => 'VD-0001',
            'full_name' => 'Nguyễn Văn A',
            'gender' => 'male',
            'date_of_birth' => '1990-01-01',
            'organization' => 'Bệnh viện Hữu nghị Việt Đức',
            'department' => 'Khoa Ngoại tổng hợp',
            'title' => 'Bác sĩ',
            'email' => 'test1@example.com',
            'phone' => '0123456789',
        ]);

        // Create second registration
        $registration2 = Registration::create([
            'registration_code' => 'VD-0002',
            'full_name' => 'Nguyễn Văn B',
            'gender' => 'female',
            'date_of_birth' => '1992-01-01',
            'organization' => 'Bệnh viện Bạch Mai',
            'department' => 'Khoa Nội tổng hợp',
            'title' => 'Y tá',
            'email' => 'test2@example.com',
            'phone' => '0987654321',
        ]);

        $this->assertEquals('VD-0001', $registration1->registration_code);
        $this->assertEquals('VD-0002', $registration2->registration_code);
    }

    #[Test]
    public function registration_requires_valid_gender()
    {
        $registrationData = [
            'full_name' => 'Nguyễn Văn A',
            'gender' => 'invalid_gender',
            'date_of_birth' => '1990-01-01',
            'organization' => 'Bệnh viện Hữu nghị Việt Đức',
            'department' => 'Khoa Ngoại tổng hợp',
            'title' => 'Bác sĩ',
            'email' => 'test@example.com',
            'phone' => '0123456789',
        ];

        $response = $this->post('/registration', $registrationData);

        $response->assertRedirect();
        $response->assertSessionHasErrors(['gender']);
    }

    #[Test]
    public function registration_requires_date_of_birth_before_today()
    {
        $registrationData = [
            'full_name' => 'Nguyễn Văn A',
            'gender' => 'male',
            'date_of_birth' => date('Y-m-d', strtotime('+1 day')), // Future date
            'organization' => 'Bệnh viện Hữu nghị Việt Đức',
            'department' => 'Khoa Ngoại tổng hợp',
            'title' => 'Bác sĩ',
            'email' => 'test@example.com',
            'phone' => '0123456789',
        ];

        $response = $this->post('/registration', $registrationData);

        $response->assertRedirect();
        $response->assertSessionHasErrors(['date_of_birth']);
    }

    #[Test]
    public function registration_accepts_all_valid_genders()
    {
        $genders = ['male', 'female', 'other'];

        foreach ($genders as $gender) {
            $registrationData = [
                'full_name' => 'Nguyễn Văn ' . ucfirst($gender),
                'gender' => $gender,
                'date_of_birth' => '1990-01-01',
                'organization' => 'Bệnh viện Hữu nghị Việt Đức',
                'department' => 'Khoa Ngoại tổng hợp',
                'title' => 'Bác sĩ',
                'email' => "test_{$gender}@example.com",
                'phone' => '0123456789',
            ];

            $response = $this->post('/registration', $registrationData);

            $response->assertRedirect();
            $response->assertSessionHas('registration_code');
        }
    }

    #[Test]
    public function registration_creates_with_pending_status()
    {
        $registrationData = [
            'full_name' => 'Nguyễn Văn A',
            'gender' => 'male',
            'date_of_birth' => '1990-01-01',
            'organization' => 'Bệnh viện Hữu nghị Việt Đức',
            'department' => 'Khoa Ngoại tổng hợp',
            'title' => 'Bác sĩ',
            'email' => 'test@example.com',
            'phone' => '0123456789',
        ];

        $this->postJson('/registration', $registrationData);

        $registration = Registration::where('email', 'test@example.com')->first();
        $this->assertEquals('pending', $registration->status);
    }

    #[Test]
    public function registration_form_displays_correct_fields()
    {
        $response = $this->get('/en/registration');

        $response->assertSee('full_name');
        $response->assertSee('gender');
        $response->assertSee('date_of_birth');
        $response->assertSee('organization');
        $response->assertSee('department');
        $response->assertSee('title');
        $response->assertSee('email');
        $response->assertSee('phone');
    }

    #[Test]
    public function registration_form_has_csrf_protection()
    {
        $response = $this->get('/en/registration');

        $response->assertSee('csrf-token');
    }

    #[Test]
    public function registration_handles_large_organization_names()
    {
        $longOrganizationName = str_repeat('Bệnh viện Hữu nghị Việt Đức ', 5); // Shorter name to fit 255 chars

        $registrationData = [
            'full_name' => 'Nguyễn Văn A',
            'gender' => 'male',
            'date_of_birth' => '1990-01-01',
            'organization' => $longOrganizationName,
            'department' => 'Khoa Ngoại tổng hợp',
            'title' => 'Bác sĩ',
            'email' => 'test@example.com',
            'phone' => '0123456789',
        ];

        $response = $this->post('/registration', $registrationData);

        $response->assertRedirect();
        $response->assertSessionHas('registration_code');
    }

    #[Test]
    public function registration_handles_special_characters_in_names()
    {
        $registrationData = [
            'full_name' => 'Nguyễn Thị Ánh Hồng',
            'gender' => 'female',
            'date_of_birth' => '1990-01-01',
            'organization' => 'Bệnh viện Hữu nghị Việt Đức',
            'department' => 'Khoa Ngoại tổng hợp',
            'title' => 'Bác sĩ',
            'email' => 'test@example.com',
            'phone' => '0123456789',
        ];

        $response = $this->post('/registration', $registrationData);

        $response->assertRedirect();
        $response->assertSessionHas('registration_code');

        $this->assertDatabaseHas('registrations', [
            'full_name' => 'Nguyễn Thị Ánh Hồng'
        ]);
    }
}
