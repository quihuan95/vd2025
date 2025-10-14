<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập Admin - VDUHSC 2025</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: system-ui, -apple-system, sans-serif;
    }

    .login-container {
      background: white;
      border: 1px solid #dee2e6;
      border-radius: 8px;
      max-width: 400px;
      width: 100%;
      margin: 20px;
    }

    .login-header {
      background: #dc3545;
      color: white;
      padding: 1.5rem;
      text-align: center;
      border-radius: 8px 8px 0 0;
    }

    .login-header h1 {
      font-size: 1.25rem;
      font-weight: 500;
      margin: 0;
    }

    .login-header p {
      margin: 0.5rem 0 0;
      font-size: 0.9rem;
      opacity: 0.9;
    }

    .login-body {
      padding: 2rem;
    }

    .form-floating {
      margin-bottom: 1rem;
    }

    .form-control {
      border: 1px solid #ced4da;
      border-radius: 4px;
    }

    .form-control:focus {
      border-color: #dc3545;
      box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }

    .btn-login {
      background: #dc3545;
      border: 1px solid #dc3545;
      border-radius: 4px;
      padding: 0.75rem;
      font-size: 1rem;
      color: white;
      width: 100%;
    }

    .btn-login:hover {
      background: #c82333;
      border-color: #bd2130;
      color: white;
    }

    .form-check-input:checked {
      background-color: #dc3545;
      border-color: #dc3545;
    }

    .alert {
      border-radius: 4px;
    }

    .login-footer {
      text-align: center;
      padding: 1rem 2rem;
      color: #6c757d;
      font-size: 0.85rem;
      border-top: 1px solid #dee2e6;
    }

    .loading {
      position: relative;
      color: transparent;
    }

    .loading::after {
      content: '';
      position: absolute;
      width: 16px;
      height: 16px;
      top: 50%;
      left: 50%;
      margin-left: -8px;
      margin-top: -8px;
      border: 2px solid #ffffff;
      border-radius: 50%;
      border-top-color: transparent;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }
  </style>
</head>

<body>
  <div class="login-container">
    <div class="login-header">
      <h1>
        <i class="fas fa-shield-alt me-2"></i>
        Admin Panel
      </h1>
      <p>VDUHSC 2025 - Quản lý đăng ký</p>
    </div>

    <div class="login-body">
      @if ($errors->any())
        <div class="alert alert-danger">
          <i class="fas fa-exclamation-triangle me-2"></i>
          {{ $errors->first() }}
        </div>
      @endif

      <form method="POST" action="{{ route('admin.login') }}" id="loginForm">
        @csrf

        <div class="form-floating">
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required
            autofocus>
          <label for="email">
            <i class="fas fa-envelope me-2"></i>Email
          </label>
        </div>

        <div class="form-floating">
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Mật khẩu" required>
          <label for="password">
            <i class="fas fa-lock me-2"></i>Mật khẩu
          </label>
        </div>

        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" id="remember" name="remember">
          <label class="form-check-label" for="remember">
            Ghi nhớ đăng nhập
          </label>
        </div>

        <button type="submit" class="btn btn-login" id="loginBtn">
          <i class="fas fa-sign-in-alt me-2"></i>
          Đăng nhập
        </button>
      </form>
    </div>

    <div class="login-footer">
      <p>
        <i class="fas fa-info-circle me-1"></i>
        Chỉ dành cho quản trị viên
      </p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.getElementById('loginForm').addEventListener('submit', function() {
      const btn = document.getElementById('loginBtn');
      btn.classList.add('loading');
      btn.disabled = true;
    });
  </script>
</body>

</html>
