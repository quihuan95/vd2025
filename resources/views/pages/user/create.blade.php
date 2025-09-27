@extends('layouts.app')
@php use Illuminate\Support\Facades\Storage; @endphp

@section('title', __('user.register.title'))
@section('description', __('user.register.description'))
@section('keywords', __('user.register.keywords'))

@section('og_title', __('user.register.title'))
@section('og_description', __('user.register.description'))
@section('og_image', Storage::url('images/og/wces2025-registration-og.jpg'))

@section('body_class', 'com-user view-create alias- path-user-create- cva-user-create no-user not-home')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ __('user.register.page_title') }}</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section id="fMatter" class="col-12">
        <div id="f-messages"></div>

        <!-- Registration Form -->
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm">
              <div class="card-body p-4">
                <h3 class="card-title text-center mb-4">Create Account</h3>

                <form method="POST" id="frm" class="fForm" action="{{ locale_route('user.create') }}">
                  @csrf

                  <!-- Personal Information -->
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <div class='form-item form-item-type-text'>
                        <label for="first_name" class="form-label">First Name <span class="text-danger">*</span></label>
                        <input type="text" name="first_name" id="first_name" class="form-control @error('first_name') is-invalid @enderror" maxlength="255"
                          value="{{ old('first_name') }}" required />
                        @error('first_name')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class='form-item form-item-type-text'>
                        <label for="last_name" class="form-label">Last Name <span class="text-danger">*</span></label>
                        <input type="text" name="last_name" id="last_name" class="form-control @error('last_name') is-invalid @enderror" maxlength="255"
                          value="{{ old('last_name') }}" required />
                        @error('last_name')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>

                  <div class='form-item form-item-type-email mb-3'>
                    <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" maxlength="255" value="{{ old('email') }}"
                      required />
                    @error('email')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class='form-item form-item-type-tel mb-3'>
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" maxlength="20" value="{{ old('phone') }}" />
                    @error('phone')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class='form-item form-item-type-text mb-3'>
                    <label for="organization" class="form-label">Organization/Institution</label>
                    <input type="text" name="organization" id="organization" class="form-control @error('organization') is-invalid @enderror" maxlength="255"
                      value="{{ old('organization') }}" />
                    @error('organization')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class='form-item form-item-type-text mb-3'>
                    <label for="country" class="form-label">Country <span class="text-danger">*</span></label>
                    <select name="country" id="country" class="form-control @error('country') is-invalid @enderror" required>
                      <option value="">Select Country</option>
                      <option value="SG" {{ old('country') == 'SG' ? 'selected' : '' }}>Singapore</option>
                      <option value="MY" {{ old('country') == 'MY' ? 'selected' : '' }}>Malaysia</option>
                      <option value="TH" {{ old('country') == 'TH' ? 'selected' : '' }}>Thailand</option>
                      <option value="ID" {{ old('country') == 'ID' ? 'selected' : '' }}>Indonesia</option>
                      <option value="PH" {{ old('country') == 'PH' ? 'selected' : '' }}>Philippines</option>
                      <option value="VN" {{ old('country') == 'VN' ? 'selected' : '' }}>Vietnam</option>
                      <option value="US" {{ old('country') == 'US' ? 'selected' : '' }}>United States</option>
                      <option value="GB" {{ old('country') == 'GB' ? 'selected' : '' }}>United Kingdom</option>
                      <option value="AU" {{ old('country') == 'AU' ? 'selected' : '' }}>Australia</option>
                      <option value="JP" {{ old('country') == 'JP' ? 'selected' : '' }}>Japan</option>
                      <option value="KR" {{ old('country') == 'KR' ? 'selected' : '' }}>South Korea</option>
                      <option value="CN" {{ old('country') == 'CN' ? 'selected' : '' }}>China</option>
                      <option value="IN" {{ old('country') == 'IN' ? 'selected' : '' }}>India</option>
                      <option value="OTHER" {{ old('country') == 'OTHER' ? 'selected' : '' }}>Other</option>
                    </select>
                    @error('country')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <!-- Password Fields -->
                  <div class='form-item form-item-type-password mb-3'>
                    <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" maxlength="255" required />
                    @error('password')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class='hint mt-1'>
                      <small class="text-muted">Password must be at least 8 characters long</small>
                    </div>
                  </div>

                  <div class='form-item form-item-type-password mb-3'>
                    <label for="password_confirmation" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"
                      maxlength="255" required />
                    @error('password_confirmation')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <!-- Registration Type -->
                  <div class='form-item form-item-type-select mb-3'>
                    <label for="registration_type" class="form-label">Registration Type <span class="text-danger">*</span></label>
                    <select name="registration_type" id="registration_type" class="form-control @error('registration_type') is-invalid @enderror" required>
                      <option value="">Select Registration Type</option>
                      <option value="delegate" {{ old('registration_type') == 'delegate' ? 'selected' : '' }}>Delegate</option>
                      <option value="student" {{ old('registration_type') == 'student' ? 'selected' : '' }}>Student</option>
                      <option value="exhibitor" {{ old('registration_type') == 'exhibitor' ? 'selected' : '' }}>Exhibitor</option>
                      <option value="speaker" {{ old('registration_type') == 'speaker' ? 'selected' : '' }}>Invited Speaker</option>
                    </select>
                    @error('registration_type')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <!-- Terms and Conditions -->
                  <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="terms" id="terms" {{ old('terms') ? 'checked' : '' }} required>
                    <label class="form-check-label" for="terms">
                      I agree to the <a href="#" class="text-decoration-none">Terms and Conditions</a> and <a href="#" class="text-decoration-none">Privacy Policy</a>
                      <span class="text-danger">*</span>
                    </label>
                  </div>

                  <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="newsletter" id="newsletter" {{ old('newsletter') ? 'checked' : '' }}>
                    <label class="form-check-label" for="newsletter">
                      Subscribe to our newsletter for updates about WCES 2025
                    </label>
                  </div>

                  <div class="d-grid">
                    <button name="submit" type="submit" class="btn btn-primary btn-lg">
                      Create Account
                    </button>
                  </div>
                </form>

                <div class="text-center mt-4">
                  <p class="mb-0">Already have an account?
                    <a href="{{ locale_route('user.login') }}" class="text-decoration-none fw-bold">
                      Login here
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

        // Validate required fields
        var requiredFields = ['first_name', 'last_name', 'email', 'country', 'password', 'password_confirmation', 'registration_type'];

        requiredFields.forEach(function(field) {
          var value = $('#' + field).val();
          if (!value || value.trim() === '') {
            $('#' + field).addClass('is-invalid');
            $('#' + field).after('<div class="invalid-feedback">This field is required.</div>');
            isValid = false;
          }
        });

        // Validate email
        var email = $('#email').val();
        if (email && !isValidEmail(email)) {
          $('#email').addClass('is-invalid');
          $('#email').after('<div class="invalid-feedback">Please enter a valid email address.</div>');
          isValid = false;
        }

        // Validate password
        var password = $('#password').val();
        if (password && password.length < 8) {
          $('#password').addClass('is-invalid');
          $('#password').after('<div class="invalid-feedback">Password must be at least 8 characters long.</div>');
          isValid = false;
        }

        // Validate password confirmation
        var passwordConfirmation = $('#password_confirmation').val();
        if (passwordConfirmation && password !== passwordConfirmation) {
          $('#password_confirmation').addClass('is-invalid');
          $('#password_confirmation').after('<div class="invalid-feedback">Passwords do not match.</div>');
          isValid = false;
        }

        // Validate terms checkbox
        if (!$('#terms').is(':checked')) {
          $('#terms').addClass('is-invalid');
          $('#terms').after('<div class="invalid-feedback">You must agree to the terms and conditions.</div>');
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

      // Real-time password confirmation validation
      $('#password_confirmation').on('blur', function() {
        var password = $('#password').val();
        var passwordConfirmation = $(this).val();

        if (passwordConfirmation && password !== passwordConfirmation) {
          $(this).addClass('is-invalid');
          if (!$(this).next('.invalid-feedback').length) {
            $(this).after('<div class="invalid-feedback">Passwords do not match.</div>');
          }
        } else {
          $(this).removeClass('is-invalid');
          $(this).next('.invalid-feedback').remove();
        }
      });

      // Auto-focus on first name field
      $('#first_name').focus();
    });
  </script>
@endsection
