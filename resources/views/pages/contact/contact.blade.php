@extends('layouts.app')
@php use Illuminate\Support\Facades\Storage; @endphp

@section('title', __('contact.title'))
@section('description', __('contact.description'))
@section('keywords', __('contact.keywords'))

@section('og_title', __('contact.title'))
@section('og_description', __('contact.description'))
@section('og_image', Storage::url('images/og/vduhsc2025-contact-og.jpg'))

@section('body_class', 'com-pages view-module alias- path-contact- cva-pages-module no-user not-home')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ __('contact.page_title') }}</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section id="fMatter" class="col-12">
        <div id="f-messages"></div>

        <!-- Contact Information -->
        <div class='fModule f-contact f-module f-module-pages-custom mt-5'>
          <div class="f-module-content fModuleContent">
            <div class="container bg-light p-4">
              @if (app()->getLocale() === 'vi')
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="contact-card">
                      <h5>Ban chuyên môn Hội nghị | Scientific Committee</h5>
                      <div class="contact-details">
                        <p><strong>TS. Bùi Trung Nghĩa</strong><br>
                          Tel: <a href="tel:+84948996688">+84 948 996 688</a><br>
                          Email: <a href="mailto:nghiabt@vduh.org">nghiabt@vduh.org</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="contact-card">
                      <h5>Ban Thư ký Hội nghị | Secretariat</h5>
                      <div class="contact-details">
                        <p><strong>Bà Nguyễn Thị Kim Thoa</strong><br>
                          Tel: <a href="tel:+84983926268">+84 983 926 268</a></p>
                        <p><strong>Bà Phạm Bích Vân</strong><br>
                          Tel: <a href="tel:+84917738321">+84 917 738 321</a><br>
                          Email: <a href="mailto:phambichvan@vduh.org">phambichvan@vduh.org</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              @else
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="contact-card">
                      <h5>Scientific Committee</h5>
                      <div class="contact-details">
                        <p><strong>Dr. Bui Trung Nghia</strong><br>
                          Tel: <a href="tel:+84948996688">+84 948 996 688</a><br>
                          Email: <a href="mailto:nghiabt@vduh.org">nghiabt@vduh.org</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="contact-card">
                      <h5>Congress Secretariat</h5>
                      <div class="contact-details">
                        <p><strong>Ms. Nguyen Thi Kim Thoa</strong><br>
                          Tel: <a href="tel:+84983926268">+84 983 926 268</a></p>
                        <p><strong>Ms. Pham Bich Van</strong><br>
                          Tel: <a href="tel:+84917738321">+84 917 738 321</a><br>
                          Email: <a href="mailto:phambichvan@vduh.org">phambichvan@vduh.org</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              @endif
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection

@section('head')
  <style>
    .f-contact h3 {
      color: var(--brand-color-1);
      margin-bottom: 2rem;
      font-weight: 600;
    }

    .f-contact h5 {
      color: var(--brand-color-1);
      margin-bottom: 1rem;
      font-weight: 500;
      font-size: 1.1rem;
    }

    .f-contact .contact-card {
      background-color: #ffffff;
      padding: 1.5rem;
      border-radius: 0.5rem;
      border-left: 4px solid var(--brand-color-1);
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      height: 100%;
    }

    .f-contact .contact-details p {
      margin-bottom: 1rem;
      line-height: 1.6;
    }

    .f-contact .contact-details strong {
      color: var(--brand-color-1);
    }

    .f-contact a {
      color: var(--brand-color-1);
      text-decoration: none;
    }

    .f-contact a:hover {
      text-decoration: underline;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .f-contact .contact-card {
        margin-bottom: 1rem;
      }
    }
  </style>
@endsection
