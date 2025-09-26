@extends('layouts.app')

@section('title', __('registration.success.title'))

@section('content')
  <div class="container" style="min-height: calc(100vh - 200px)">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="success-container">
          <div class="success-icon">
            <i class="fas fa-check-circle"></i>
          </div>

          <h1 class="success-title">{{ __('registration.success.title') }}</h1>

          <div class="success-message">
            <p class="lead">{{ __('registration.success.message') }}</p>

            @if (session('registration_code'))
              <div class="registration-code">
                <h3>{{ __('registration.success.registration_code') }}</h3>
                <div class="code-display">
                  <span class="code">{{ session('registration_code') }}</span>
                </div>
              </div>
            @endif
          </div>

          <div class="success-actions">
            <a href="{{ locale_route('home') }}" class="btn btn-primary btn-lg">
              <i class="fas fa-home me-2"></i>
              {{ __('registration.success.back_home') }}
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <style>
    .success-container {
      text-align: center;
      padding: 3rem 2rem;
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      margin: 2rem 0;
    }

    .success-icon {
      margin-bottom: 2rem;
    }

    .success-icon i {
      font-size: 5rem;
      color: var(--brand-color-3);
      animation: bounceIn 0.8s ease-out;
    }

    @keyframes bounceIn {
      0% {
        transform: scale(0.3);
        opacity: 0;
      }

      50% {
        transform: scale(1.05);
      }

      70% {
        transform: scale(0.9);
      }

      100% {
        transform: scale(1);
        opacity: 1;
      }
    }

    .success-title {
      color: var(--brand-color-1);
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
    }

    .success-message {
      margin-bottom: 2rem;
    }

    .success-message .lead {
      font-size: 1.2rem;
      color: #666;
      margin-bottom: 2rem;
    }

    .registration-code {
      background: linear-gradient(135deg, var(--brand-color-3), var(--brand-color-2));
      color: white;
      padding: 2rem;
      border-radius: 15px;
      margin: 2rem 0;
    }

    .registration-code h3 {
      margin-bottom: 1rem;
      font-size: 1.5rem;
    }

    .code-display {
      background: rgba(255, 255, 255, 0.2);
      padding: 1rem;
      border-radius: 10px;
      display: inline-block;
    }

    .code {
      font-size: 2rem;
      font-weight: 900;
      letter-spacing: 2px;
      font-family: 'Courier New', monospace;
    }

    .success-details {
      text-align: left;
      background: #f8f9fa;
      padding: 2rem;
      border-radius: 15px;
      margin: 2rem 0;
    }

    .success-details h4 {
      color: var(--brand-color-1);
      margin-bottom: 1rem;
      text-align: center;
    }

    .success-details ul {
      list-style: none;
      padding: 0;
    }

    .success-details li {
      padding: 0.5rem 0;
      display: flex;
      align-items: center;
    }

    .success-details li i {
      color: var(--brand-color-3);
      margin-right: 1rem;
      width: 20px;
    }

    .success-actions {
      margin: 2rem 0;
      display: flex;
      gap: 1rem;
      justify-content: center;
      flex-wrap: wrap;
    }

    .success-actions .btn {
      min-width: 200px;
      padding: 0.75rem 1.5rem;
      border-radius: 10px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .success-actions .btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .contact-info {
      background: var(--brand-color-1);
      color: white;
      padding: 2rem;
      border-radius: 15px;
      margin-top: 2rem;
    }

    .contact-info h5 {
      margin-bottom: 1rem;
      font-size: 1.3rem;
    }

    .contact-details {
      display: flex;
      justify-content: center;
      gap: 2rem;
      flex-wrap: wrap;
      margin-top: 1rem;
    }

    .contact-item {
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .contact-item i {
      font-size: 1.2rem;
    }

    @media (max-width: 768px) {
      .success-container {
        padding: 2rem 1rem;
        margin: 1rem 0;
      }

      .success-title {
        font-size: 2rem;
      }

      .success-actions {
        flex-direction: column;
        align-items: center;
      }

      .success-actions .btn {
        width: 100%;
        max-width: 300px;
      }

      .contact-details {
        flex-direction: column;
        gap: 1rem;
      }

      .code {
        font-size: 1.5rem;
      }
    }
  </style>
@endsection
