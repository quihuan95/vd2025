@extends('layouts.app')
@php use Illuminate\Support\Facades\Storage; @endphp

@section('title', __('registration.title'))
@section('description', __('registration.description'))
@section('keywords', __('registration.keywords'))

@section('og_title', __('registration.title'))
@section('og_description', __('registration.description'))
@section('og_image', Storage::url('images/og/wces2025-registration-og.jpg'))

@section('body_class', 'com-pages view-module alias- path-registration- cva-pages-module no-user not-home width-full')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ __('registration.page_title') }}</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section id="fMatter" class="col-12">
        <div id="f-messages"></div>

        <!-- Registration Form -->
        <div class='fModule f-registration f-module f-module-pages-custom'>
          <div class="f-module-content fModuleContent">
            <div class="container bg-light p-4">
              <div class="registration-form-container">
                <div class="form-header">
                  @if ($errors->any())
                    <div class="alert alert-danger">
                      <i class="fas fa-exclamation-triangle me-2"></i>
                      <strong>{{ session('error', 'Vui lòng kiểm tra lại thông tin.') }}</strong>
                      <ul class="mb-0 mt-2">
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                  @endif
                </div>

                <form id="registrationForm" class="registration-form" method="POST" action="{{ route('registration.store') }}">
                  @csrf

                  <div class="row">
                    <!-- Full Name -->
                    <div class="col-md-6 mb-3">
                      <label for="full_name" class="form-label">
                        {{ __('registration.form.fields.full_name.label') }}
                        @if (app()->getLocale() === 'vi')
                          <small class="text-muted">({{ __('registration.form.fields.full_name.label_en') }})</small>
                        @endif
                        <span class="text-danger">*</span>
                      </label>
                      <input type="text" class="form-control @error('full_name') is-invalid @enderror" id="full_name" name="full_name"
                        placeholder="{{ app()->getLocale() === 'vi' ? __('registration.form.fields.full_name.placeholder') : __('registration.form.fields.full_name.placeholder_en') }}"
                        value="{{ old('full_name') }}" required>
                      @error('full_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <!-- Gender -->
                    <div class="col-md-6 mb-3">
                      <label for="gender" class="form-label">
                        {{ __('registration.form.fields.gender.label') }}
                        @if (app()->getLocale() === 'vi')
                          <small class="text-muted">({{ __('registration.form.fields.gender.label_en') }})</small>
                        @endif
                        <span class="text-danger">*</span>
                      </label>
                      <select class="form-select @error('gender') is-invalid @enderror" style="margin: 10px 0" id="gender" name="gender" required>
                        <option value="">{{ app()->getLocale() === 'vi' ? 'Chọn giới tính' : 'Select gender' }}</option>
                        @foreach (__('registration.form.fields.gender.options') as $key => $value)
                          <option value="{{ $key }}" {{ old('gender') == $key ? 'selected' : '' }}>{{ $value }}</option>
                        @endforeach
                      </select>
                      @error('gender')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <!-- Date of Birth -->
                    <div class="col-md-6 mb-3">
                      <label for="date_of_birth" class="form-label">
                        {{ __('registration.form.fields.date_of_birth.label') }}
                        @if (app()->getLocale() === 'vi')
                          <small class="text-muted">({{ __('registration.form.fields.date_of_birth.label_en') }})</small>
                        @endif
                        <span class="text-danger">*</span>
                      </label>
                      <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" id="date_of_birth" name="date_of_birth"
                        value="{{ old('date_of_birth') }}" required>
                      @error('date_of_birth')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <!-- Organization -->
                    <div class="col-md-6 mb-3">
                      <label for="organization" class="form-label">
                        {{ __('registration.form.fields.organization.label') }}
                        @if (app()->getLocale() === 'vi')
                          <small class="text-muted">({{ __('registration.form.fields.organization.label_en') }})</small>
                        @endif
                        <span class="text-danger">*</span>
                      </label>
                      <input type="text" class="form-control @error('organization') is-invalid @enderror" id="organization" name="organization"
                        placeholder="{{ app()->getLocale() === 'vi' ? __('registration.form.fields.organization.placeholder') : __('registration.form.fields.organization.placeholder_en') }}"
                        value="{{ old('organization') }}" required>
                      @error('organization')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <!-- Department -->
                    <div class="col-md-6 mb-3">
                      <label for="department" class="form-label">
                        {{ __('registration.form.fields.department.label') }}
                        @if (app()->getLocale() === 'vi')
                          <small class="text-muted">({{ __('registration.form.fields.department.label_en') }})</small>
                        @endif
                        <span class="text-danger">*</span>
                      </label>
                      <input type="text" class="form-control @error('department') is-invalid @enderror" id="department" name="department"
                        placeholder="{{ app()->getLocale() === 'vi' ? __('registration.form.fields.department.placeholder') : __('registration.form.fields.department.placeholder_en') }}"
                        value="{{ old('department') }}" required>
                      @error('department')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <!-- Title -->
                    <div class="col-md-6 mb-3">
                      <label for="title" class="form-label">
                        {{ __('registration.form.fields.title.label') }}
                        @if (app()->getLocale() === 'vi')
                          <small class="text-muted">({{ __('registration.form.fields.title.label_en') }})</small>
                        @endif
                        <span class="text-danger">*</span>
                      </label>
                      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                        placeholder="{{ app()->getLocale() === 'vi' ? __('registration.form.fields.title.placeholder') : __('registration.form.fields.title.placeholder_en') }}"
                        value="{{ old('title') }}" required>
                      @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <!-- Email -->
                    <div class="col-md-6 mb-3">
                      <label for="email" class="form-label">
                        {{ __('registration.form.fields.email.label') }}
                        <span class="text-danger">*</span>
                      </label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                        placeholder="{{ app()->getLocale() === 'vi' ? __('registration.form.fields.email.placeholder') : __('registration.form.fields.email.placeholder_en') }}"
                        value="{{ old('email') }}" required>
                      @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <!-- Phone -->
                    <div class="col-md-6 mb-3">
                      <label for="phone" class="form-label">
                        {{ __('registration.form.fields.phone.label') }}
                        @if (app()->getLocale() === 'vi')
                          <small class="text-muted">({{ __('registration.form.fields.phone.label_en') }})</small>
                        @endif
                        <span class="text-danger">*</span>
                      </label>
                      <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
                        placeholder="{{ app()->getLocale() === 'vi' ? __('registration.form.fields.phone.placeholder') : __('registration.form.fields.phone.placeholder_en') }}"
                        value="{{ old('phone') }}" required>
                      @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <!-- Form Actions -->
                  <div class="form-actions mt-4">
                    <div class="d-flex justify-content-center gap-3">
                      <button type="submit" class="btn btn-primary btn-lg px-5">
                        <i class="fas fa-paper-plane me-2"></i>
                        {{ app()->getLocale() === 'vi' ? __('registration.form.buttons.submit') : __('registration.form.buttons.submit_en') }}
                      </button>
                      <button type="reset" class="btn btn-outline-secondary btn-lg px-5">
                        <i class="fas fa-undo me-2"></i>
                        {{ app()->getLocale() === 'vi' ? __('registration.form.buttons.reset') : __('registration.form.buttons.reset_en') }}
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection

@section('head')
  <style>
    .f-registration {
      margin: 2rem 0;
    }

    .f-registration h3 {
      color: var(--brand-color-1);
      margin-bottom: 0.5rem;
      font-weight: 600;
    }

    .f-registration .text-muted {
      font-size: 1rem;
      margin-bottom: 1.5rem;
    }

    .registration-form-container {
      max-width: 100%;
      margin: 0 auto;
    }

    .form-header {
      margin-bottom: 2rem;
    }

    .form-header .alert {
      border-left: 4px solid var(--brand-color-1);
      background: linear-gradient(135deg, #e7f3ff 0%, #f8f9fa 100%);
      border: 1px solid #b3d9ff;
    }

    .registration-form {
      background: white;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      border: 1px solid #e9ecef;
    }

    .form-label {
      font-weight: 600;
      color: #333;
      margin-bottom: 0.5rem;
    }

    .form-label small {
      font-weight: 400;
      font-size: 0.85rem;
    }

    /* Ensure form fields have proper spacing */
    .registration-form .col-md-6 {
      margin-bottom: 1rem !important;
    }

    .registration-form .col-12 {
      margin-bottom: 1rem !important;
    }

    .form-control,
    .form-select {
      border: 2px solid #e9ecef;
      border-radius: 8px;
      padding: 0.75rem 1rem;
      font-size: 1rem;
      transition: all 0.3s ease;
    }

    .form-control:focus,
    .form-select:focus {
      border-color: var(--brand-color-1);
      box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }

    .form-control.is-invalid,
    .form-select.is-invalid {
      border-color: #dc3545;
    }

    .form-control.is-valid,
    .form-select.is-valid {
      border-color: #28a745;
    }

    .form-actions {
      border-top: 1px solid #e9ecef;
      padding-top: 2rem;
    }

    .btn {
      border-radius: 8px;
      font-weight: 600;
      transition: all 0.3s ease;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .btn-primary {
      background: var(--brand-color-1);
      border: none;
    }

    .btn-primary:hover {
      background: var(--brand-color-2);
    }

    .btn-outline-secondary {
      border: 2px solid #6c757d;
      color: #6c757d;
    }

    .btn-outline-secondary:hover {
      background: #6c757d;
      border-color: #6c757d;
      color: white;
    }

    .text-danger {
      color: var(--brand-color-1) !important;
    }

    @media (max-width: 768px) {
      .registration-form {
        padding: 1.5rem;
      }

      .form-actions .d-flex {
        flex-direction: column;
        gap: 1rem !important;
      }

      .btn-lg {
        width: 100%;
      }
    }

    /* Loading state */
    .btn.loading {
      position: relative;
      color: transparent;
    }

    .btn.loading::after {
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
@endsection

@section('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.getElementById('registrationForm');
      const submitBtn = form.querySelector('button[type="submit"]');

      // Form validation
      form.addEventListener('submit', function(e) {
        // Basic validation
        const requiredFields = form.querySelectorAll('[required]');
        let isValid = true;

        requiredFields.forEach(field => {
          if (!field.value.trim()) {
            field.classList.add('is-invalid');
            isValid = false;
          } else {
            field.classList.remove('is-invalid');
            field.classList.add('is-valid');
          }
        });

        // Email validation
        const emailField = document.getElementById('email');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (emailField.value && !emailRegex.test(emailField.value)) {
          emailField.classList.add('is-invalid');
          isValid = false;
        }

        if (!isValid) {
          e.preventDefault();
          alert('{{ app()->getLocale() === 'vi' ? 'Vui lòng điền đầy đủ thông tin bắt buộc' : 'Please fill in all required fields' }}');
          return;
        }

        // If validation passes, show loading state and let form submit normally
        submitBtn.classList.add('loading');
        submitBtn.disabled = true;

        // Form will submit normally and redirect to success page
      });

      // Real-time validation
      form.querySelectorAll('input, select').forEach(field => {
        field.addEventListener('blur', function() {
          if (this.hasAttribute('required') && !this.value.trim()) {
            this.classList.add('is-invalid');
            this.classList.remove('is-valid');
          } else if (this.value.trim()) {
            this.classList.remove('is-invalid');
            this.classList.add('is-valid');
          }
        });

        field.addEventListener('input', function() {
          if (this.classList.contains('is-invalid') && this.value.trim()) {
            this.classList.remove('is-invalid');
            this.classList.add('is-valid');
          }
        });
      });
    });
  </script>
@endsection
