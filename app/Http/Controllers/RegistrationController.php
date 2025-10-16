<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'gender' => 'required|in:male,female,other',
            'date_of_birth' => 'required|date|before:today',
            'organization' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'event_type' => 'required|in:pre_conference_workshop,university_hospital_international_scientific_conference,both',
        ], [
            'full_name.required' => 'Vui lòng nhập họ và tên.',
            'gender.required' => 'Vui lòng chọn giới tính.',
            'date_of_birth.required' => 'Vui lòng nhập ngày sinh.',
            'date_of_birth.before' => 'Ngày sinh phải trước ngày hiện tại.',
            'organization.required' => 'Vui lòng nhập tên cơ quan.',
            'department.required' => 'Vui lòng nhập khoa/phòng.',
            'title.required' => 'Vui lòng nhập chức vụ.',
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không hợp lệ.',
            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'event_type.required' => 'Vui lòng chọn sự kiện tham dự.',
            'event_type.in' => 'Sự kiện được chọn không hợp lệ.',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', app()->getLocale() === 'vi'
                    ? 'Vui lòng kiểm tra lại thông tin.'
                    : 'Please check your information.');
        }

        try {
            // Generate registration code
            $registrationCode = Registration::generateRegistrationCode();

            // Create registration with code
            $registrationData = $request->all();
            $registrationData['registration_code'] = $registrationCode;
            $registrationData['status'] = 'pending';
            
            $registration = Registration::create($registrationData);

            // Redirect to success page with registration code
            return redirect()->route('registration.success', ['locale' => app()->getLocale()])
                ->with('registration_code', $registrationCode)
                ->with('success', app()->getLocale() === 'vi'
                    ? 'Đăng ký thành công! Cảm ơn bạn đã đăng ký tham gia VDUHSC 2025.'
                    : 'Registration successful! Thank you for registering for VDUHSC 2025.');
        } catch (\Exception $e) {
            // dd($e);
            return response()->json([
                'success' => false,
                'message' => app()->getLocale() === 'vi'
                    ? 'Có lỗi xảy ra. Vui lòng thử lại.'
                    : 'An error occurred. Please try again.'
            ], 500);
        }
    }
}
