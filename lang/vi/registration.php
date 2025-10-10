<?php

return [
  'title' => 'Đăng ký tham dự - VDUHSC 2025',
  'description' => 'Đăng ký tham dự Hội nghị Khoa học Quốc tế Bệnh viện Hữu nghị Việt Đức 2025. Điền đầy đủ thông tin để hoàn tất đăng ký.',
  'keywords' => 'VDUHSC 2025, đăng ký, tham dự, hội nghị, bệnh viện Việt Đức',

  'page_title' => 'Đăng ký tham dự',
  'page_subtitle' => 'Registration Form',

  'form' => [
    'title' => 'Form đăng ký tham dự',
    'subtitle' => 'Registration Form',
    'required_note' => 'Yêu cầu điền đầy đủ tất cả các trường thông tin',
    'required_note_en' => 'Please fill in all required fields',

    'fields' => [
      'full_name' => [
        'label' => 'Họ và tên',
        'label_en' => 'Full name',
        'placeholder' => 'Nhập họ và tên đầy đủ',
        'placeholder_en' => 'Enter your full name',
      ],
      'gender' => [
        'label' => 'Giới tính',
        'label_en' => 'Gender',
        'options' => [
          'male' => 'Nam',
          'female' => 'Nữ',
          'other' => 'Khác',
        ],
      ],
      'date_of_birth' => [
        'label' => 'Ngày tháng năm sinh',
        'label_en' => 'Date of birth',
        'placeholder' => 'DD/MM/YYYY',
      ],
      'organization' => [
        'label' => 'Cơ quan',
        'label_en' => 'Organization',
        'placeholder' => 'Nhập tên cơ quan làm việc',
        'placeholder_en' => 'Enter your organization name',
      ],
      'department' => [
        'label' => 'Khoa/Phòng',
        'label_en' => 'Department',
        'placeholder' => 'Nhập tên khoa/phòng',
        'placeholder_en' => 'Enter your department name',
      ],
      'title' => [
        'label' => 'Chức vụ',
        'label_en' => 'Title',
        'placeholder' => 'Nhập chức vụ hiện tại',
        'placeholder_en' => 'Enter your current title',
      ],
      'email' => [
        'label' => 'Email',
        'placeholder' => 'Nhập địa chỉ email',
        'placeholder_en' => 'Enter your email address',
      ],
      'phone' => [
        'label' => 'Số điện thoại',
        'label_en' => 'Tel',
        'placeholder' => 'Nhập số điện thoại',
        'placeholder_en' => 'Enter your phone number',
      ],
    ],

    'buttons' => [
      'submit' => 'Đăng ký tham dự',
      'submit_en' => 'Register',
      'reset' => 'Làm mới',
      'reset_en' => 'Reset',
    ],

    'messages' => [
      'success' => 'Đăng ký thành công! Chúng tôi sẽ liên hệ với bạn sớm nhất.',
      'success_en' => 'Registration successful! We will contact you soon.',
      'error' => 'Có lỗi xảy ra. Vui lòng thử lại.',
      'error_en' => 'An error occurred. Please try again.',
    ],
  ],

  'success' => [
    'title' => 'Đăng ký thành công!',
    'message' => 'Cảm ơn bạn đã đăng ký tham gia VDUHSC 2025. Đơn đăng ký của bạn đã được tiếp nhận và đang được xử lý.',
    'registration_code' => 'Mã đăng ký của bạn',
    'next_steps' => 'Các bước tiếp theo',
    'email_confirmation' => 'Bạn sẽ nhận được email xác nhận trong thời gian sớm nhất',
    'phone_contact' => 'Đội ngũ của chúng tôi sẽ liên hệ qua điện thoại để xác nhận thông tin',
    'event_updates' => 'Bạn sẽ nhận được cập nhật về lịch trình sự kiện',
    'back_home' => 'Về trang chủ',
    'register_another' => 'Đăng ký người khác',
    'contact_title' => 'Cần hỗ trợ?',
    'contact_message' => 'Nếu bạn có bất kỳ câu hỏi nào hoặc cần hỗ trợ, vui lòng liên hệ với chúng tôi:',
  ],
];
