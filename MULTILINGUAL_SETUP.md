# Hệ thống Đa ngôn ngữ VDUHSC 2025

## Tổng quan

Website VDUHSC 2025 đã được cấu hình để hỗ trợ đa ngôn ngữ (Anh-Việt) sử dụng Laravel Localization.

## Cấu trúc thư mục

```
lang/
├── en/                 # Tiếng Anh
│   ├── common.php      # Các từ/cụm từ chung
│   └── home.php        # Nội dung trang chủ
└── vi/                 # Tiếng Việt
    ├── common.php      # Các từ/cụm từ chung
    └── home.php        # Nội dung trang chủ
```

## Các tính năng đã triển khai

### 1. Language Switcher

-   **Vị trí**: Header của website
-   **Chức năng**: Chuyển đổi giữa tiếng Anh và tiếng Việt
-   **URL**: `/lang/{locale}` (en/vi)
-   **Style**: Bootstrap buttons với flag icons

### 2. Route Structure

-   **Format**: `/{locale}/{page}`
-   **Ví dụ**:
    -   `/en/about/wces2025` (Tiếng Anh)
    -   `/vi/about/wces2025` (Tiếng Việt)
-   **Fallback**: Tự động redirect về `/en/` nếu không có locale

### 3. Middleware

-   **File**: `app/Http/Middleware/SetLocale.php`
-   **Chức năng**: Tự động set locale dựa trên URL segment đầu tiên
-   **Đăng ký**: Trong `bootstrap/app.php`

### 4. Translation Keys

-   **Navigation**: `__('common.nav.home')`, `__('common.nav.about_wces2025')`
-   **Home Page**: `__('home.title')`, `__('home.hero.title')`
-   **Common**: `__('common.buttons.register')`, `__('common.messages.success')`

## Cách sử dụng

### 1. Thêm translation mới

```php
// Trong lang/en/common.php
'new_key' => 'English Text',

// Trong lang/vi/common.php
'new_key' => 'Văn bản tiếng Việt',
```

### 2. Sử dụng trong Blade

```blade
{{ __('common.new_key') }}
```

### 3. Tạo URL với locale

```php
// Sử dụng helper
route('home', ['locale' => 'vi'])

// Hoặc trong Blade
{{ route('home', ['locale' => app()->getLocale()]) }}
```

## Files đã được cập nhật

### 1. Routes (`routes/web.php`)

-   Thêm locale prefix cho tất cả routes
-   Language switcher route
-   Fallback redirect

### 2. Middleware (`app/Http/Middleware/SetLocale.php`)

-   Xử lý locale từ URL
-   Set app locale

### 3. Views

-   **Header** (`resources/views/layouts/header.blade.php`): Language switcher + translation keys
-   **Home** (`resources/views/pages/home/index.blade.php`): Translation keys cho meta tags và content
-   **Layout** (`resources/views/layouts/app.blade.php`): CSS cho language switcher

### 4. CSS (`public/css/language-switcher.css`)

-   Style cho language switcher
-   Responsive design
-   Dark mode support

## Cách test

### 1. Truy cập website

```
http://localhost:8000/en/     # Tiếng Anh
http://localhost:8000/vi/     # Tiếng Việt
```

### 2. Test language switcher

-   Click vào button "🇺🇸 English" hoặc "🇻🇳 Tiếng Việt"
-   Kiểm tra URL thay đổi và nội dung được dịch

### 3. Test navigation

-   Kiểm tra tất cả menu items được dịch
-   Kiểm tra active state vẫn hoạt động

## Mở rộng

### 1. Thêm ngôn ngữ mới

1. Tạo thư mục `lang/{locale}/`
2. Copy và dịch các file từ `lang/en/`
3. Cập nhật middleware để hỗ trợ locale mới
4. Thêm button vào language switcher

### 2. Thêm translation cho trang mới

1. Tạo file `lang/{locale}/{page}.php`
2. Thêm translation keys
3. Cập nhật view để sử dụng `__('{page}.key')`

### 3. SEO Optimization

-   Thêm hreflang tags
-   Cập nhật sitemap với các locale
-   Cấu hình canonical URLs

## Lưu ý

-   Tất cả routes hiện tại đã được cập nhật để hỗ trợ locale
-   Language switcher giữ nguyên route hiện tại khi chuyển ngôn ngữ
-   Fallback về tiếng Anh nếu locale không hợp lệ
-   CSS responsive cho mobile devices
