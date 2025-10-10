# Phân tích dự án VDUHSC 2025

## Tổng quan dự án

Dự án VDUHSC 2025 là một website cho World Congress of Endoscopic Surgeons 2025, được xây dựng bằng Laravel với các views HTML tĩnh.

## Cấu trúc Views đã phân tích

### 1. Trang chủ và About

-   `resources/views/pages/home/index.html` - Trang chủ
-   `resources/views/pages/about/wces2025.html` - Giới thiệu về VDUHSC 2025

### 2. Chương trình (Programme)

-   `resources/views/pages/programme/6-nov.html` - Chương trình ngày 6/11
-   `resources/views/pages/programme/7-nov.html` - Chương trình ngày 7/11
-   `resources/views/pages/programme/8-nov.html` - Chương trình ngày 8/11
-   `resources/views/pages/programme/day-1.html` - Chương trình ngày 1
-   `resources/views/pages/programme/isopes.html` - Chương trình ISOPES
-   `resources/views/pages/programme/mis-championship.html` - MIS Championship
-   `resources/views/pages/programme/obes.html` - Chương trình OBES
-   `resources/views/pages/programme/precongressworkshops.html` - Workshop trước hội nghị

### 3. Diễn giả mời

-   `resources/views/pages/invited/speakers.html` - Danh sách diễn giả mời

### 4. Nhà tài trợ

-   `resources/views/pages/sponsors/official.html` - Nhà tài trợ chính thức

### 5. Quản lý người dùng

-   `resources/views/pages/user/login.html` - Đăng nhập
-   `resources/views/pages/user/create.html` - Đăng ký
-   `resources/views/pages/user/window.html` - Cửa sổ người dùng
-   `resources/views/pages/user/account/recover.html` - Khôi phục tài khoản
-   `resources/views/pages/user/view/` - 156 files view người dùng

## Routes đã tạo

### Web Routes (`routes/web.php`)

```php
// Trang chủ
Route::get('/', function () {
    return view('pages.home.index');
})->name('home');

// About
Route::get('/about/wces2025', function () {
    return view('pages.about.wces2025');
})->name('about.wces2025');

// Programme
Route::prefix('programme')->group(function () {
    Route::get('/6-nov', function () {
        return view('pages.programme.6-nov');
    })->name('programme.6-nov');
    // ... các routes khác
});

// Invited speakers
Route::get('/invited/speakers', function () {
    return view('pages.invited.speakers');
})->name('invited.speakers');

// Sponsors
Route::get('/sponsors/official', function () {
    return view('pages.sponsors.official');
})->name('sponsors.official');

// User authentication
Route::prefix('user')->group(function () {
    Route::get('/login', function () {
        return view('pages.user.login');
    })->name('user.login');
    // ... các routes khác
});
```

### API Routes (`routes/api.php`)

```php
Route::prefix('wces2025')->group(function () {
    // Programme API
    Route::prefix('programme')->group(function () {
        Route::get('/sessions', function () {
            return response()->json(['message' => 'Programme sessions API endpoint']);
        });
    });

    // User management API
    Route::prefix('user')->group(function () {
        Route::post('/register', function () {
            return response()->json(['message' => 'User registration API endpoint']);
        });
    });
});
```

## CDN và thư viện đã sử dụng

### CDN đã có trong dự án:

1. **Bootstrap 5.1.3**

    - CSS: `https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css`
    - JS: `https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js`

2. **jQuery 3.2.1**

    - `https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js`

3. **jQuery UI 1.12.1**

    - CSS: `../storage.unitedwebnetwork.com/asset/jqueryui/1.12.1/jquery-ui.min.css`
    - JS: `../storage.unitedwebnetwork.com/asset/jqueryui/1.12.1/jqueryui-min.js`

4. **Magnific Popup 1.1.0**

    - CSS: `https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/magnific-popup.min.css`
    - JS: `https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/jquery.magnific-popup.min.js`

5. **International Telephone Input 11.0.3**

    - CSS: `https://cdn.jsdelivr.net/npm/intl-tel-input@11.0.3/build/css/intlTelInput.css`
    - JS: `https://cdn.jsdelivr.net/npm/intl-tel-input@11.0.3/build/js/intlTelInput.min.js`

6. **Font Awesome 6.2.1**

    - CSS: `https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/all.min.css`

7. **Google Fonts**
    - `https://fonts.googleapis.com/`
    - `https://fonts.gstatic.com/`

### CDN còn thiếu (được comment hoặc chưa được sử dụng):

1. **Swiper 11** (đã comment)

    ```html
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->
    ```

2. **bxSlider** (được sử dụng trong code nhưng chưa có CDN)

    ```javascript
    // Được sử dụng trong: modules/gallery/list.script/bxSlider.js
    ```

3. **Owl Carousel** (được sử dụng trong code nhưng chưa có CDN)

    ```javascript
    // Được sử dụng trong: $('.numbers-carousel').owlCarousel({...})
    ```

4. **WOW.js** (được sử dụng trong code nhưng chưa có CDN)
    ```html
    <!-- Được sử dụng trong: class="nav-up wow pulse" -->
    ```

## Khuyến nghị bổ sung CDN

### 1. Thêm Swiper (nếu cần slider)

```html
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
```

### 2. Thêm bxSlider

```html
<script src="https://cdn.jsdelivr.net/npm/bxslider@4.2.15/dist/jquery.bxslider.min.js"></script>
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bxslider@4.2.15/dist/jquery.bxslider.min.css"
/>
```

### 3. Thêm Owl Carousel

```html
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css"
/>
```

### 4. Thêm WOW.js

```html
<script src="https://cdn.jsdelivr.net/npm/wowjs@1.2.2/dist/wow.min.js"></script>
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css"
/>
```

## Cấu trúc thư mục đề xuất

```
resources/views/
├── layouts/
│   ├── app.blade.php          # Layout chính
│   ├── header.blade.php       # Header
│   └── footer.blade.php       # Footer
├── pages/
│   ├── home/
│   ├── about/
│   ├── programme/
│   ├── invited/
│   ├── sponsors/
│   └── user/
└── components/
    ├── navigation.blade.php
    ├── countdown.blade.php
    └── gallery.blade.php
```

## Lưu ý quan trọng

1. **Chuyển đổi từ HTML sang Blade**: Các file HTML hiện tại cần được chuyển đổi thành Blade templates để tận dụng các tính năng của Laravel.

2. **Tối ưu hóa CDN**: Một số CDN đang sử dụng đường dẫn tương đối, nên chuyển sang CDN công khai để tăng tốc độ tải.

3. **Responsive Design**: Đảm bảo tất cả các views đều responsive và tương thích với mobile.

4. **SEO Optimization**: Thêm meta tags, structured data và tối ưu hóa SEO.

5. **Performance**: Tối ưu hóa hình ảnh và lazy loading cho các gallery lớn.
