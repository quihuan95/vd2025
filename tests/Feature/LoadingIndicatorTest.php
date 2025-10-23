<?php

namespace Tests\Feature;

use App\Models\Registration;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoadingIndicatorTest extends TestCase
{
    use RefreshDatabase;

    public function test_bulk_send_confirmation_shows_loading_indicator()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        // Tạo 2 đăng ký để test loading
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

        // Test trang admin có loading overlay
        $response = $this->get(route('admin.registrations.index'));
        $response->assertStatus(200);
        $response->assertSee('loading-overlay');
        $response->assertSee('Đang gửi email...');
        $response->assertSee('Vui lòng chờ trong giây lát');
    }

    public function test_loading_overlay_has_correct_structure()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('admin.registrations.index'));
        $response->assertStatus(200);
        
        // Kiểm tra nội dung text của loading overlay
        $response->assertSee('loadingOverlay');
        $response->assertSee('loading-content');
        $response->assertSee('spinner-border text-primary');
        $response->assertSee('Đang gửi email...');
        $response->assertSee('Vui lòng chờ trong giây lát');
    }

    public function test_bulk_actions_have_correct_ids()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('admin.registrations.index'));
        $response->assertStatus(200);
        
        // Kiểm tra các ID cần thiết cho JavaScript
        $response->assertSee('bulkSendEmailBtn');
        $response->assertSee('bulkSendEmailForm');
        $response->assertSee('selectedCount');
        $response->assertSee('selectAll');
    }
}
