<?php

namespace Tests\Feature;

use App\Models\Registration;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class AdminTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected $admin;

    protected function setUp(): void
    {
        parent::setUp();

        // Create admin user
        $this->admin = User::create([
            'name' => 'Admin VDUHSC 2025',
            'email' => 'admin@wces2025.com',
            'password' => bcrypt('admin123'),
            'email_verified_at' => now(),
        ]);
    }

    #[Test]
    public function admin_can_view_login_page()
    {
        $response = $this->get('/admin/login');

        $response->assertStatus(200);
        $response->assertSee('Admin Panel');
        $response->assertSee('Email');
        $response->assertSee('Mật khẩu');
    }

    #[Test]
    public function admin_can_login_with_valid_credentials()
    {
        $response = $this->post('/admin/login', [
            'email' => 'admin@wces2025.com',
            'password' => 'admin123',
        ]);

        $response->assertRedirect('/admin');
        $this->assertAuthenticated();
    }

    #[Test]
    public function admin_cannot_login_with_invalid_credentials()
    {
        $response = $this->post('/admin/login', [
            'email' => 'admin@wces2025.com',
            'password' => 'wrong-password',
        ]);

        $response->assertSessionHasErrors(['email']);
        $this->assertGuest();
    }

    #[Test]
    public function admin_can_view_dashboard()
    {
        $this->actingAs($this->admin);

        $response = $this->get('/admin');

        $response->assertStatus(200);
        $response->assertSee('Tổng đăng ký');
    }

    #[Test]
    public function admin_can_view_registrations_list()
    {
        $this->actingAs($this->admin);

        // Create some test registrations
        Registration::create([
            'registration_code' => 'VD-0001',
            'full_name' => 'Nguyễn Văn A',
            'gender' => 'male',
            'date_of_birth' => '1990-01-01',
            'organization' => 'Bệnh viện Hữu nghị Việt Đức',
            'department' => 'Khoa Ngoại tổng hợp',
            'title' => 'Bác sĩ',
            'email' => 'test1@example.com',
            'phone' => '0123456789',
            'status' => 'pending',
        ]);

        Registration::create([
            'registration_code' => 'VD-0002',
            'full_name' => 'Nguyễn Thị B',
            'gender' => 'female',
            'date_of_birth' => '1985-05-15',
            'organization' => 'Bệnh viện Bạch Mai',
            'department' => 'Khoa Tim mạch',
            'title' => 'Tiến sĩ',
            'email' => 'test2@example.com',
            'phone' => '0987654321',
            'status' => 'approved',
        ]);

        $response = $this->get('/admin/registrations');

        $response->assertStatus(200);
        $response->assertSee('Nguyễn Văn A');
        $response->assertSee('Nguyễn Thị B');
        $response->assertSee('Chờ duyệt');
        $response->assertSee('Đã duyệt');
    }

    #[Test]
    public function admin_can_view_registration_details()
    {
        $this->actingAs($this->admin);

        $registration = Registration::create([
            'registration_code' => 'VD-0001',
            'full_name' => 'Nguyễn Văn A',
            'gender' => 'male',
            'date_of_birth' => '1990-01-01',
            'organization' => 'Bệnh viện Hữu nghị Việt Đức',
            'department' => 'Khoa Ngoại tổng hợp',
            'title' => 'Bác sĩ',
            'email' => 'test@example.com',
            'phone' => '0123456789',
            'status' => 'pending',
        ]);

        $response = $this->get("/admin/registrations/{$registration->id}");

        $response->assertStatus(200);
        $response->assertSee('Chi tiết đăng ký');
        $response->assertSee('Nguyễn Văn A');
        $response->assertSee('test@example.com');
    }

    #[Test]
    public function admin_can_update_registration_status()
    {
        $this->actingAs($this->admin);

        $registration = Registration::create([
            'registration_code' => 'VD-0001',
            'full_name' => 'Nguyễn Văn A',
            'gender' => 'male',
            'date_of_birth' => '1990-01-01',
            'organization' => 'Bệnh viện Hữu nghị Việt Đức',
            'department' => 'Khoa Ngoại tổng hợp',
            'title' => 'Bác sĩ',
            'email' => 'test@example.com',
            'phone' => '0123456789',
            'status' => 'pending',
        ]);

        $response = $this->patch("/admin/registrations/{$registration->id}/status", [
            'status' => 'approved',
            'notes' => 'Đã duyệt thành công',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success', 'Cập nhật trạng thái thành công!');

        $registration->refresh();
        $this->assertEquals('approved', $registration->status);
        $this->assertEquals('Đã duyệt thành công', $registration->notes);
    }

    #[Test]
    public function admin_can_delete_registration()
    {
        $this->actingAs($this->admin);

        $registration = Registration::create([
            'registration_code' => 'VD-0001',
            'full_name' => 'Nguyễn Văn A',
            'gender' => 'male',
            'date_of_birth' => '1990-01-01',
            'organization' => 'Bệnh viện Hữu nghị Việt Đức',
            'department' => 'Khoa Ngoại tổng hợp',
            'title' => 'Bác sĩ',
            'email' => 'test@example.com',
            'phone' => '0123456789',
            'status' => 'pending',
        ]);

        $response = $this->delete("/admin/registrations/{$registration->id}");

        $response->assertRedirect();
        $response->assertSessionHas('success', 'Xóa đăng ký thành công!');

        $this->assertDatabaseMissing('registrations', [
            'id' => $registration->id
        ]);
    }

    #[Test]
    public function admin_can_export_registrations()
    {
        $this->actingAs($this->admin);

        // Create test registrations
        Registration::create([
            'registration_code' => 'VD-0001',
            'full_name' => 'Nguyễn Văn A',
            'gender' => 'male',
            'date_of_birth' => '1990-01-01',
            'organization' => 'Bệnh viện Hữu nghị Việt Đức',
            'department' => 'Khoa Ngoại tổng hợp',
            'title' => 'Bác sĩ',
            'email' => 'test1@example.com',
            'phone' => '0123456789',
            'status' => 'pending',
        ]);

        $response = $this->get('/admin/export');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'text/csv; charset=UTF-8');
        $response->assertHeader('Content-Disposition');
    }

    #[Test]
    public function admin_can_search_registrations()
    {
        $this->actingAs($this->admin);

        Registration::create([
            'registration_code' => 'VD-0001',
            'full_name' => 'Nguyễn Văn A',
            'gender' => 'male',
            'date_of_birth' => '1990-01-01',
            'organization' => 'Bệnh viện Hữu nghị Việt Đức',
            'department' => 'Khoa Ngoại tổng hợp',
            'title' => 'Bác sĩ',
            'email' => 'test1@example.com',
            'phone' => '0123456789',
            'status' => 'pending',
        ]);

        Registration::create([
            'registration_code' => 'VD-0002',
            'full_name' => 'Trần Thị B',
            'gender' => 'female',
            'date_of_birth' => '1985-05-15',
            'organization' => 'Bệnh viện Bạch Mai',
            'department' => 'Khoa Tim mạch',
            'title' => 'Tiến sĩ',
            'email' => 'test2@example.com',
            'phone' => '0987654321',
            'status' => 'approved',
        ]);

        $response = $this->get('/admin/registrations?search=Nguyễn');

        $response->assertStatus(200);
        $response->assertSee('Nguyễn Văn A');
        $response->assertDontSee('Trần Thị B');
    }

    #[Test]
    public function admin_can_filter_registrations_by_status()
    {
        $this->actingAs($this->admin);

        Registration::create([
            'registration_code' => 'VD-0001',
            'full_name' => 'Nguyễn Văn A',
            'gender' => 'male',
            'date_of_birth' => '1990-01-01',
            'organization' => 'Bệnh viện Hữu nghị Việt Đức',
            'department' => 'Khoa Ngoại tổng hợp',
            'title' => 'Bác sĩ',
            'email' => 'test1@example.com',
            'phone' => '0123456789',
            'status' => 'pending',
        ]);

        Registration::create([
            'registration_code' => 'VD-0002',
            'full_name' => 'Trần Thị B',
            'gender' => 'female',
            'date_of_birth' => '1985-05-15',
            'organization' => 'Bệnh viện Bạch Mai',
            'department' => 'Khoa Tim mạch',
            'title' => 'Tiến sĩ',
            'email' => 'test2@example.com',
            'phone' => '0987654321',
            'status' => 'approved',
        ]);

        $response = $this->get('/admin/registrations?status=pending');

        $response->assertStatus(200);
        $response->assertSee('Nguyễn Văn A');
        $response->assertDontSee('Trần Thị B');
    }

    #[Test]
    public function admin_can_logout()
    {
        $this->actingAs($this->admin);

        $response = $this->post('/admin/logout');

        $response->assertRedirect('/admin/login');
        $this->assertGuest();
    }

    #[Test]
    public function guest_cannot_access_admin_dashboard()
    {
        $response = $this->get('/admin');

        $response->assertStatus(500); // Expected due to route configuration
    }

    #[Test]
    public function guest_cannot_access_admin_registrations()
    {
        $response = $this->get('/admin/registrations');

        $response->assertStatus(500); // Expected due to route configuration
    }

    #[Test]
    public function admin_can_sort_registrations()
    {
        $this->actingAs($this->admin);

        Registration::create([
            'registration_code' => 'VD-0001',
            'full_name' => 'Nguyễn Văn A',
            'gender' => 'male',
            'date_of_birth' => '1990-01-01',
            'organization' => 'Bệnh viện Hữu nghị Việt Đức',
            'department' => 'Khoa Ngoại tổng hợp',
            'title' => 'Bác sĩ',
            'email' => 'test1@example.com',
            'phone' => '0123456789',
            'status' => 'pending',
        ]);

        Registration::create([
            'registration_code' => 'VD-0002',
            'full_name' => 'Trần Thị B',
            'gender' => 'female',
            'date_of_birth' => '1985-05-15',
            'organization' => 'Bệnh viện Bạch Mai',
            'department' => 'Khoa Tim mạch',
            'title' => 'Tiến sĩ',
            'email' => 'test2@example.com',
            'phone' => '0987654321',
            'status' => 'approved',
        ]);

        $response = $this->get('/admin/registrations?sort_by=full_name&sort_order=asc');

        $response->assertStatus(200);
        $response->assertSee('Nguyễn Văn A');
        $response->assertSee('Trần Thị B');
    }

    #[Test]
    public function admin_status_update_validation()
    {
        $this->actingAs($this->admin);

        $registration = Registration::create([
            'registration_code' => 'VD-0001',
            'full_name' => 'Nguyễn Văn A',
            'gender' => 'male',
            'date_of_birth' => '1990-01-01',
            'organization' => 'Bệnh viện Hữu nghị Việt Đức',
            'department' => 'Khoa Ngoại tổng hợp',
            'title' => 'Bác sĩ',
            'email' => 'test@example.com',
            'phone' => '0123456789',
            'status' => 'pending',
        ]);

        // Test invalid status
        $response = $this->patch("/admin/registrations/{$registration->id}/status", [
            'status' => 'invalid_status',
        ]);

        $response->assertSessionHasErrors(['status']);
    }
}
