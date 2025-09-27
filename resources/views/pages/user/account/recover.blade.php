@extends('layouts.app')
@php use Illuminate\Support\Facades\Storage; @endphp

@section('title', __('user.recover.title'))
@section('description', __('user.recover.description'))
@section('keywords', __('user.recover.keywords'))

@section('og_title', __('user.recover.title'))
@section('og_description', __('user.recover.description'))
@section('og_image', Storage::url('images/og/wces2025-recover-og.jpg'))

@section('body_class', 'com-user view-account-recover alias- path-user-account-recover- cva-user-account-recover no-user not-home')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ __('user.recover.page_title') }}</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section id="fMatter" class="col-12">
        <div id="f-messages"></div>

        <!-- Password Recovery Form -->
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm">
              <div class="card-body p-4">
                <h3 class="card-title text-center mb-4">Reset Password</h3>

                <div class="text-center mb-4">
                  <i class="fas fa-lock fa-3x text-primary mb-3"></i>
                  <p class="text-muted">Enter your email address and we'll send you a link to reset your password.</p>
                </div>

                <form method="POST" id="frm" class="fForm" action="{{ locale_route('user.account.recover') }}">
                  @csrf

                  <div class='form-item form-item-type-email mb-3' id='form-item-email'>
                    <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" maxlength="255" value="{{ old('email') }}"
                      autofocus="on" required placeholder="Enter your email address" />
                    @error('email')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="d-grid">
                    <button name="submit" type="submit" class="btn btn-primary btn-lg">
                      <i class="fas fa-paper-plane me-2"></i>Send Reset Link
                    </button>
                  </div>
                </form>

                <div class="text-center mt-4">
                  <p class="mb-2">Remember your password?
                    <a href="{{ locale_route('user.login') }}" class="text-decoration-none fw-bold">
                      Back to Login
                    </a>
                  </p>
                  <p class="mb-0">Don't have an account?
                    <a href="{{ locale_route('user.create') }}" class="text-decoration-none fw-bold">
                      Register here
                    </a>
                  </p>
                </div>
              </div>
            </div>

            <!-- Help Information -->
            <div class="card mt-4">
              <div class="card-body p-3">
                <h6 class="card-title">Need Help?</h6>
                <ul class="list-unstyled mb-0 small">
                  <li class="mb-2">
                    <i class="fas fa-envelope text-primary me-2"></i>
                    Check your spam/junk folder if you don't receive the email
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-clock text-primary me-2"></i>
                    Reset links expire after 24 hours
                  </li>
                  <li class="mb-0">
                    <i class="fas fa-phone text-primary me-2"></i>
                    Contact support: <a href="mailto:support@wces2025.com" class="text-decoration-none">support@wces2025.com</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    $(document).ready(function() {
      // Form validation
      $('#frm').on('submit', function(e) {
        var isValid = true;

        // Clear previous error states
        $('.form-control').removeClass('is-invalid');
        $('.invalid-feedback').remove();

        // Validate email
        var email = $('#email').val();
        if (!email || !isValidEmail(email)) {
          $('#email').addClass('is-invalid');
          $('#email').after('<div class="invalid-feedback">Please enter a valid email address.</div>');
          isValid = false;
        }

        if (!isValid) {
          e.preventDefault();
        }
      });

      function isValidEmail(email) {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
      }

      // Auto-focus on email field
      $('#email').focus();

      // Show success message if password reset was sent
      @if (session('status'))
        $('#f-messages').html('<div class="alert alert-success alert-dismissible fade show" role="alert">' +
          '<i class="fas fa-check-circle me-2"></i>{{ session('status') }}' +
          '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
          '</div>');
      @endif

      // Show error message if there was an error
      @if (session('error'))
        $('#f-messages').html('<div class="alert alert-danger alert-dismissible fade show" role="alert">' +
          '<i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}' +
          '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
          '</div>');
      @endif
    });
  </script>
@endsection

@section('head')
  <style>
    .card {
      border: none;
      border-radius: 12px;
    }

    .card-body {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
    }

    .btn-primary {
      background-color: var(--brand-color-1);
      border-color: var(--brand-color-1);
      padding: 0.75rem 2rem;
      font-weight: 600;
      border-radius: 8px;
    }

    .btn-primary:hover {
      background-color: var(--brand-color-2);
      border-color: var(--brand-color-2);
      transform: translateY(-1px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .form-control {
      border-radius: 8px;
      border: 1px solid #ddd;
      padding: 0.75rem 1rem;
    }

    .form-control:focus {
      border-color: var(--brand-color-1);
      box-shadow: 0 0 0 0.2rem rgba(186, 21, 49, 0.25);
    }

    .text-primary {
      color: var(--brand-color-1) !important;
    }

    .fa-lock {
      color: var(--brand-color-1);
    }
  </style>
@endsection
