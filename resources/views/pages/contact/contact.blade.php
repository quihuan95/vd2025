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
                <div class="mb-4"><strong>Mọi thắc mắc xin liên với Ban Tổ Chức qua email: <a href="mailto:eventvietduc@vduh.org">eventvietduc@vduh.org</a></strong></div>
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
                <div class="mb-4"><strong>For any queries related to the conference contact us at: <a href="mailto:eventvietduc@vduh.org">eventvietduc@vduh.org</a></strong></div>
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

        <!-- FAQ Section -->
        <div class='fModule f-faq f-module f-module-pages-custom mt-5'>
          <div class="f-module-content fModuleContent">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h3 class="text-center mb-5">{{ __('contact.faq_title') }}</h3>
                  
                  <div class="faq-container">
                    <!-- FAQ 1 -->
                    <div class="faq-item">
                      <div class="faq-question" onclick="toggleFAQ(1)">
                        <h5>{{ __('contact.faq1_question') }}</h5>
                        <span class="faq-icon">+</span>
                      </div>
                      <div class="faq-answer" id="faq-answer-1">
                        <p>{{ __('contact.faq1_answer') }}</p>
                      </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="faq-item">
                      <div class="faq-question" onclick="toggleFAQ(2)">
                        <h5>{{ __('contact.faq2_question') }}</h5>
                        <span class="faq-icon">+</span>
                      </div>
                      <div class="faq-answer" id="faq-answer-2">
                        <p>{{ __('contact.faq2_answer') }}</p>
                      </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="faq-item">
                      <div class="faq-question" onclick="toggleFAQ(3)">
                        <h5>{{ __('contact.faq3_question') }}</h5>
                        <span class="faq-icon">+</span>
                      </div>
                      <div class="faq-answer" id="faq-answer-3">
                        <p>{{ __('contact.faq3_answer') }}</p>
                      </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="faq-item">
                      <div class="faq-question" onclick="toggleFAQ(4)">
                        <h5>{{ __('contact.faq4_question') }}</h5>
                        <span class="faq-icon">+</span>
                      </div>
                      <div class="faq-answer" id="faq-answer-4">
                        <p>{{ __('contact.faq4_answer') }}</p>
                      </div>
                    </div>
                  </div>
                </div>
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

    /* FAQ Styles */
    .f-faq h3 {
      color: var(--brand-color-1);
      margin-bottom: 2rem;
      font-weight: 600;
    }

    .faq-container {
      max-width: 800px;
      margin: 0 auto;
    }

    .faq-item {
      background-color: #ffffff;
      border-radius: 0.5rem;
      margin-bottom: 1rem;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .faq-question {
      background-color: var(--brand-color-1);
      color: white;
      padding: 1.5rem;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: background-color 0.3s ease;
    }

    .faq-question:hover {
      background-color: #1a4a5c;
    }

    .faq-question h5 {
      margin: 0;
      font-size: 1.1rem;
      font-weight: 500;
      flex: 1;
      padding-right: 1rem;
    }

    .faq-icon {
      font-size: 1.5rem;
      font-weight: bold;
      transition: transform 0.3s ease;
    }

    .faq-item.active .faq-icon {
      transform: rotate(45deg);
    }

    .faq-answer {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease;
    }

    .faq-item.active .faq-answer {
      max-height: 200px;
    }

    .faq-answer p {
      padding: 1.5rem;
      margin: 0;
      line-height: 1.6;
      color: #333;
    }

    /* Responsive FAQ */
    @media (max-width: 768px) {
      .faq-question {
        padding: 1rem;
      }
      
      .faq-question h5 {
        font-size: 1rem;
      }
      
      .faq-answer p {
        padding: 1rem;
      }
    }
  </style>

  <script>
    function toggleFAQ(faqNumber) {
      const faqItem = document.querySelector(`.faq-item:nth-child(${faqNumber})`);
      const answer = document.getElementById(`faq-answer-${faqNumber}`);
      
      // Toggle active class
      faqItem.classList.toggle('active');
      
      // Close other FAQ items
      document.querySelectorAll('.faq-item').forEach((item, index) => {
        if (index + 1 !== faqNumber) {
          item.classList.remove('active');
        }
      });
    }

    // Initialize FAQ functionality
    document.addEventListener('DOMContentLoaded', function() {
      // Optional: Add keyboard support
      document.querySelectorAll('.faq-question').forEach((question, index) => {
        question.addEventListener('keydown', function(e) {
          if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            toggleFAQ(index + 1);
          }
        });
        
        // Make it focusable for accessibility
        question.setAttribute('tabindex', '0');
        question.setAttribute('role', 'button');
        question.setAttribute('aria-expanded', 'false');
      });
    });
  </script>
@endsection
