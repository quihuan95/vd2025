@extends('layouts.app')

@section('title', __('user.login.title'))
@section('description', __('user.login.description'))
@section('keywords', __('user.login.keywords'))

@section('og_title', __('user.login.title'))
@section('og_description', __('user.login.description'))
@section('og_image', asset('images/wces2025-login-og.jpg'))

@section('body_class', 'com-user view-login alias- path-user-login- cva-user-login no-user not-home')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ __('user.login.page_title') }}</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section id="fMatter" class="col-12">
        <div id="f-messages"></div>

        <!-- Login Form -->
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm">
              <div class="card-body p-4">
                <h3 class="card-title text-center mb-4">Sign In</h3>

                <form method="POST" id="frm" class="fForm" action="{{ locale_route('user.login') }}">
                  @csrf

                  <div class='form-item form-item-type-text mb-3' id='form-item-username'>
                    <label for="username" class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" name="username" id="username" class="form-control @error('username') is-invalid @enderror" maxlength="255" value="{{ old('username') }}"
                      autofocus="on" required />
                    @error('username')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class='form-item form-item-type-password mb-3' id='form-item-password'>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" maxlength="255" value="" required />
                    @error('password')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class='hint mt-2' id='hint-password'>
                      <span>
                        <a href='{{ locale_route('user.account.recover') }}' class="text-decoration-none">
                          Forgot your Password?
                        </a>
                      </span>
                    </div>
                  </div>

                  <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                      Remember me
                    </label>
                  </div>

                  <div class="d-grid">
                    <button name="submit" type="submit" class="btn btn-primary btn-lg">
                      Login
                    </button>
                  </div>
                </form>

                <div class="text-center mt-4">
                  <p class="mb-0">Don't have an account?
                    <a href="{{ locale_route('user.create') }}" class="text-decoration-none fw-bold">
                      Register here
                    </a>
                  </p>
                </div>
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
        var email = $('#username').val();
        if (!email || !isValidEmail(email)) {
          $('#username').addClass('is-invalid');
          $('#username').after('<div class="invalid-feedback">Please enter a valid email address.</div>');
          isValid = false;
        }

        // Validate password
        var password = $('#password').val();
        if (!password || password.length < 6) {
          $('#password').addClass('is-invalid');
          $('#password').after('<div class="invalid-feedback">Password must be at least 6 characters long.</div>');
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
      $('#username').focus();
    });
  </script>
@endsection
