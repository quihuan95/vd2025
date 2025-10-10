<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập Admin - VDUHSC 2025</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
    :root {
      --brand-color-1: #dc3545;
    }

    body {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .login-container {
      background: white;
      border-radius: 20px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      max-width: 400px;
      width: 100%;
      margin: 20px;
    }

    .login-header {
      background: linear-gradient(135deg, var(--brand-color-1) 0%, #e74c3c 100%);
      color: white;
      padding: 2rem;
      text-align: center;
    }

    .login-header h1 {
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 0.5rem;
    }

    .login-header p {
      margin-bottom: 0;
      opacity: 0.9;
    }

    .login-body {
      padding: 2rem;
    }

    .form-floating {
      margin-bottom: 1.5rem;
    }

    .form-control {
      border: 2px solid #e9ecef;
      border-radius: 12px;
      padding: 1rem 0.75rem;
      font-size: 1rem;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      border-color: var(--brand-color-1);
      box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }

    .form-floating>label {
      padding: 1rem 0.75rem;
    }

    .btn-login {
      background: linear-gradient(135deg, var(--brand-color-1) 0%, #e74c3c 100%);
      border: none;
      border-radius: 12px;
      padding: 1rem;
      font-size: 1.1rem;
      font-weight: 600;
      color: white;
      width: 100%;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(220, 53, 69, 0.3);
    }

    .btn-login:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(220, 53, 69, 0.4);
      color: white;
    }

    .btn-login:active {
      transform: translateY(0);
    }

    .form-check-input:checked {
      background-color: var(--brand-color-1);
      border-color: var(--brand-color-1);
    }

    .form-check-input:focus {
      box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }

    .alert {
      border-radius: 12px;
      border: none;
    }

    .alert-danger {
      background: #f8d7da;
      color: #721c24;
    }

    .login-footer {
      text-align: center;
      padding: 1rem 2rem 2rem;
      color: #6c757d;
      font-size: 0.9rem;
    }

    .login-footer a {
      color: var(--brand-color-1);
      text-decoration: none;
    }

    .login-footer a:hover {
      text-decoration: underline;
    }

    .loading {
      position: relative;
      color: transparent;
    }

    .loading::after {
      content: '';
      position: absolute;
      width: 20px;
      height: 20px;
      top: 50%;
      left: 50%;
      margin-left: -10px;
      margin-top: -10px;
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

    @media (max-width: 480px) {
      .login-container {
        margin: 10px;
        border-radius: 15px;
      }

      .login-header,
      .login-body {
        padding: 1.5rem;
      }

      .login-header h1 {
        font-size: 1.25rem;
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
