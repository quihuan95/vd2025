@extends('layouts.app')

@section('title', __('contact.title'))
@section('description', __('contact.description'))
@section('keywords', __('contact.keywords'))

@section('og_title', __('contact.title'))
@section('og_description', __('contact.description'))
@section('og_image', asset('images/wces2025-faq-og.jpg'))

@section('body_class', 'com-pages view-module alias- path-faq- cva-pages-module no-user not-home')

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

        <!-- FAQ Content -->
        <div class='fModule f-accordion-item-new f-module f-module-pages-custom'>
          <div class="f-module-content fModuleContent">
            <div class="accordion" id="accordionExample">
              <h3>{{ __('contact.sections.general.title') }}</h3>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    What is the 21<sup>st</sup> World Congress of Endoscopic Surgery in conjunction with the 17<sup>th</sup> Asia-Pacific Congress of ELSA (WCES 2025)?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>It is an international congress focused on the latest updates in Endo-Laparoscopic and Robotic Surgery.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Does WCES 2025 take place in person?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>WCES 2025 is a full-fledged in person (i.e. physical) congress.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                    aria-controls="collapseThree">
                    When and where is the congress being held?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>The congress will be held from 4<sup>th</sup> to 8<sup>th</sup> November 2025.</p>
                    <ul>
                      <li>4<sup>th</sup> and 5<sup>th</sup>: Pre-congress Workshops in several hospitals.</li>
                      <li>6<sup>th</sup>, 7<sup>th</sup> and 8<sup>th</sup>: Main Congress at Suntec Singapore Convention & Exhibition Center.</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                    aria-controls="collapseFour">
                    Will I receive a certificate of attendance?
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>We provide certificates for all present delegates. Certificates of active participation will only be sent out <u><strong>via email</strong></u> after actually
                      attending at the WCES 2025.</p>
                  </div>
                </div>
              </div>

              <h3>Registration</h3>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                    aria-controls="collapseFive">
                    How can I register for the congress?
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>You may register online <a href="{{ locale_route('user.create') }}" target="_blank">www.wces2025.com/user/create</a> or on-site at the venue during the
                      congress.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    What is the registration fee?
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>The registration fee varies based on early bird, regular, and late registration as well as category. You may check the details at <a
                        href="{{ locale_route('user.create') }}" target="_blank">https://www.wces2025.com/registration</a>.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                    aria-controls="collapseSeven">
                    Will you be careful with my personal information?
                  </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>WCES 2025 will use any personal data only to the extent necessary for the performance of its services. For our full privacy policy, visit <a href="#"
                        target="_blank">https://www.wces2025.com/privacy-policy</a>.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"
                    aria-controls="collapseEight">
                    I had already registered for WCES 2025 in Singapore but I cannot attend the congress – what happens to my registration fees?
                  </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>To cancel your registration, please email <a href="mailto:contact@wces2025.com">contact@wces2025.com</a>. The applicable cancellation policy can be reviewed
                      <a href="{{ locale_route('user.create') }}" target="_blank">HERE</a>.
                    </p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false"
                    aria-controls="collapseNine">
                    What is the cancellation policy?
                  </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>You can check the cancellation policy at <a href="{{ locale_route('user.create') }}" target="_blank">https://www.wces2025.com/registration</a>.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false"
                    aria-controls="collapseTen">
                    When is the registration deadline?
                  </button>
                </h2>
                <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>The Early Bird Registration is open until <strong>31<sup>st</sup> July 2025</strong> and Regular Registration is open from <strong>1<sup>st</sup> August
                        2025</strong>. Onsite Registration is also available from <strong>6<sup>th</sup> to 8<sup>th</sup> November 2025</strong>. All individuals are required to
                      register online unless opting for walk-in registration during the congress days.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false"
                    aria-controls="collapseEleven">
                    Who can I contact for registration-related matters?
                  </button>
                </h2>
                <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>For any inquiries, please reach out to us at <a href="mailto:contact@wces2025.com">contact@wces2025.com</a>. You may include the relevant subject in your
                      email, such as "Abstract," "Speaker," "Sponsor Queries," etc.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false"
                    aria-controls="collapseTwelve">
                    Forgot or Change your password.
                  </button>
                </h2>
                <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>To reset your password please click on "Forgot your Password?" at the login page (<a href="{{ locale_route('user.login') }}"
                        target="_blank">www.wces2025.com/user/login</a>), and put in your username or email used for registration. An automatic e-mail will be sent to your
                      registered email to reset the password.</p>
                  </div>
                </div>
              </div>

              <h3>Programme / Speakers</h3>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false"
                    aria-controls="collapseThirteen">
                    Who are the keynote speakers?
                  </button>
                </h2>
                <div id="collapseThirteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Coming Soon.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false"
                    aria-controls="collapseFourteen">
                    Can I get a copy of the presentation materials?
                  </button>
                </h2>
                <div id="collapseFourteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>No, presentation materials will not be provided or shared.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false"
                    aria-controls="collapseFifteen">
                    Where can I find the Pre-Congress Workshop details?
                  </button>
                </h2>
                <div id="collapseFifteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Coming Soon at <a href="{{ locale_route('programme.precongressworkshops') }}" target="_blank">https://www.wces2025.com/programme/precongressworkshops</a>.
                    </p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="false"
                    aria-controls="collapseSixteen">
                    Where can I find the schedule of the congress?
                  </button>
                </h2>
                <div id="collapseSixteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Coming Soon at <a href="{{ locale_route('programme.day-1') }}" target="_blank">https://www.wces2025.com/programme</a>.</p>
                  </div>
                </div>
              </div>

              <h3>Accommodation and Travel</h3>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="false"
                    aria-controls="collapseSeventeen">
                    How do I get to the venue?
                  </button>
                </h2>
                <div id="collapseSeventeen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Directions to the venue, including public transportation options, can be found on the website at <a href="#"
                        target="_blank">https://www.wces2025.com/venue</a>.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEighteen" aria-expanded="false"
                    aria-controls="collapseEighteen">
                    Is there parking available at the venue?
                  </button>
                </h2>
                <div id="collapseEighteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Yes, parking is available at the venue. Details on parking fees and locations are on the website at <a href="#"
                        target="_blank">https://www.wces2025.com/venue</a>.</p>
                  </div>
                </div>
              </div>

              <h3>Technical Support</h3>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNineteen" aria-expanded="false"
                    aria-controls="collapseNineteen">
                    Who do I contact for technical support during the congress?
                  </button>
                </h2>
                <div id="collapseNineteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Support will be available on-site and can be reached via the help desk. Should you need any assistance before the congress, please contact us via email at <a
                        href="mailto:contact@wces2025.com">contact@wces2025.com</a>.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Information -->
        <div class='fModule f-contact f-module f-module-pages-custom mt-5'>
          <div class="f-module-content fModuleContent">
            <h4 class="text-center mb-4">For any queries related to the conference contact us at:</h4>

            <div class="row justify-content-center">
              <div class="col-12 col-sm-10 col-md-5 col-lg-4 mb-4">
                <div class="text text-center">
                  <div class="icon mb-3">
                    <img alt="email" src="https://storage.unitedwebnetwork.com/files/1212/email_270909.png" class="img-fluid" style="width: 64px;" />
                  </div>
                  <h5>Email</h5>
                  <p><a href="mailto:contact@wces2025.com">contact@wces2025.com</a></p>
                </div>
              </div>

              <div class="col-12 col-sm-10 col-md-5 col-lg-4 mb-4">
                <div class="text text-center">
                  <div class="icon mb-3">
                    <img alt="address" src="https://storage.unitedwebnetwork.com/files/1212/map-and-location_270908.png" class="img-fluid" style="width: 64px;" />
                  </div>
                  <h5>Address</h5>
                  <p>c/o Anderes Fourdy Events Pte Ltd, 140 Paya Lebar Road, #07-11 AZ Building, Singapore 409015</p>
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
    .f-accordion-item-new .accordion h3 {
      font-size: 2rem;
      color: var(--brand-color-1);
      font-weight: 600;
      letter-spacing: 0px;
      text-align: center;
      margin: 2rem 0 1rem 0;
    }

    .f-accordion-item-new .accordion-item {
      border: 0;
      border-radius: 0;
      margin-bottom: 0.5rem;
    }

    .f-accordion-item-new .accordion-button {
      box-shadow: none !important;
      border: 1px solid #dedede;
      border-radius: 0px !important;
      background-color: #ddd;
      color: #000;
      font-weight: 500;
      padding: 1rem 1.25rem;
    }

    .f-accordion-item-new .accordion-button:not(.collapsed) {
      background-color: var(--brand-color-1) !important;
      color: white !important;
    }

    .f-accordion-item-new .accordion-button:focus {
      box-shadow: 0 0 0 0.25rem rgba(186, 21, 49, 0.25);
    }

    .f-accordion-item-new .accordion-body {
      border: 1px solid #dedede;
      border-top: 0;
      background-color: #f8f9fa;
    }

    .f-accordion-item-new .accordion-body p {
      margin-bottom: 1rem;
    }

    .f-accordion-item-new .accordion-body ul {
      margin-bottom: 1rem;
    }

    .f-accordion-item-new .accordion-body a {
      color: var(--brand-color-1);
      text-decoration: none;
    }

    .f-accordion-item-new .accordion-body a:hover {
      text-decoration: underline;
    }

    .f-contact .text h5 {
      color: var(--brand-color-1);
      font-weight: 600;
      margin-bottom: 1rem;
    }

    .f-contact .text p {
      margin-bottom: 0;
    }

    .f-contact .text a {
      color: var(--brand-color-1);
      text-decoration: none;
    }

    .f-contact .text a:hover {
      text-decoration: underline;
    }

    .f-contact .icon img {
      transition: transform 0.3s ease;
    }

    .f-contact .text:hover .icon img {
      transform: scale(1.1);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .f-accordion-item-new .accordion h3 {
        font-size: 1.5rem;
      }

      .f-accordion-item-new .accordion-button {
        font-size: 0.9rem;
        padding: 0.75rem 1rem;
      }
    }
  </style>
@endsection
