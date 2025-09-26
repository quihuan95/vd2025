@extends('layouts.app')

@section('title', __('speakers.title'))
@section('description', __('speakers.description'))
@section('keywords', __('speakers.keywords'))

@section('og_title', __('speakers.title'))
@section('og_description', __('speakers.description'))
@section('og_image', asset('images/wces2025-speakers-og.jpg'))

@section('body_class', 'com-pages view-module alias- path-invited-speakers- cva-pages-module no-user not-home')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ __('speakers.page_title') }}</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section id="fMatter" class="col-12">
        <div id="f-messages"></div>

        <!-- Speakers Introduction -->
        <div class='fModule f-speakers-intro pb-0 f-module f-module-pages-custom'>
          <div class="f-module-content fModuleContent">
            <div class="text-center mb-5">
              <h3>Distinguished Speakers</h3>
              <p class="lead">We are honored to present our distinguished lineup of invited speakers who will share their expertise and insights at WCES 2025.</p>
            </div>
          </div>
        </div>

        <!-- Keynote Speakers -->
        <div class='fModule f-keynote-speakers pb-0 f-module f-module-pages-custom'>
          <div class="f-module-title fModuleTitle">
            <h3>Keynote Speakers</h3>
          </div>
          <div class="f-module-content fModuleContent">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card speaker-card h-100">
                  <div class="card-body text-center">
                    <div class="speaker-image mb-3">
                      <img src="https://storage.unitedwebnetwork.com/files/1212/4a5bc10cab08dcabaed0c07688b91c1b.png" alt="Prof Davide Lomanto" class="img-fluid rounded-circle"
                        loading="lazy" />
                    </div>
                    <h5 class="card-title">Prof Davide Lomanto</h5>
                    <p class="card-text text-muted">Congress President</p>
                    <p class="card-text small">Director, Minimally Invasive Surgery Centre<br>
                      National University Hospital, Singapore</p>
                    <div class="speaker-topics">
                      <span class="badge bg-primary me-1">Minimally Invasive Surgery</span>
                      <span class="badge bg-primary me-1">Robotic Surgery</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card speaker-card h-100">
                  <div class="card-body text-center">
                    <div class="speaker-image mb-3">
                      <img src="https://storage.unitedwebnetwork.com/files/1212/0c709c774f6b95b516a9d6fe3ae67fbc.png" alt="Assoc Prof Asim Shabbir" class="img-fluid rounded-circle"
                        loading="lazy" />
                    </div>
                    <h5 class="card-title">Assoc Prof Asim Shabbir</h5>
                    <p class="card-text text-muted">Congress Chair</p>
                    <p class="card-text small">Senior Consultant<br>
                      National University Hospital, Singapore</p>
                    <div class="speaker-topics">
                      <span class="badge bg-primary me-1">Bariatric Surgery</span>
                      <span class="badge bg-primary me-1">Metabolic Surgery</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card speaker-card h-100">
                  <div class="card-body text-center">
                    <div class="speaker-image mb-3">
                      <img src="https://storage.unitedwebnetwork.com/files/1212/819a31714cd0f35e2972b6ab7178f1bf.png" alt="Asst Prof Aung Myint Oo" class="img-fluid rounded-circle"
                        loading="lazy" />
                    </div>
                    <h5 class="card-title">Asst Prof Aung Myint Oo</h5>
                    <p class="card-text text-muted">Scientific Chair</p>
                    <p class="card-text small">Consultant Surgeon<br>
                      National University Hospital, Singapore</p>
                    <div class="speaker-topics">
                      <span class="badge bg-primary me-1">Hepatobiliary Surgery</span>
                      <span class="badge bg-primary me-1">Laparoscopic Surgery</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- International Speakers -->
        <div class='fModule f-international-speakers pb-0 f-module f-module-pages-custom'>
          <div class="f-module-title fModuleTitle">
            <h3>International Speakers</h3>
          </div>
          <div class="f-module-content fModuleContent">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card speaker-card h-100">
                  <div class="card-body text-center">
                    <div class="speaker-image mb-3">
                      <div class="speaker-placeholder">
                        <i class="fas fa-user-md fa-3x text-muted"></i>
                      </div>
                    </div>
                    <h6 class="card-title">Dr. John Smith</h6>
                    <p class="card-text text-muted small">Professor of Surgery</p>
                    <p class="card-text small">Harvard Medical School, USA</p>
                    <div class="speaker-topics">
                      <span class="badge bg-secondary me-1">AI in Surgery</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card speaker-card h-100">
                  <div class="card-body text-center">
                    <div class="speaker-image mb-3">
                      <div class="speaker-placeholder">
                        <i class="fas fa-user-md fa-3x text-muted"></i>
                      </div>
                    </div>
                    <h6 class="card-title">Prof. Maria Garcia</h6>
                    <p class="card-text text-muted small">Director of MIS</p>
                    <p class="card-text small">Hospital Clinic, Spain</p>
                    <div class="speaker-topics">
                      <span class="badge bg-secondary me-1">Colorectal Surgery</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card speaker-card h-100">
                  <div class="card-body text-center">
                    <div class="speaker-image mb-3">
                      <div class="speaker-placeholder">
                        <i class="fas fa-user-md fa-3x text-muted"></i>
                      </div>
                    </div>
                    <h6 class="card-title">Dr. Kenji Tanaka</h6>
                    <p class="card-text text-muted small">Chief of Surgery</p>
                    <p class="card-text small">Tokyo University, Japan</p>
                    <div class="speaker-topics">
                      <span class="badge bg-secondary me-1">Robotic Surgery</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card speaker-card h-100">
                  <div class="card-body text-center">
                    <div class="speaker-image mb-3">
                      <div class="speaker-placeholder">
                        <i class="fas fa-user-md fa-3x text-muted"></i>
                      </div>
                    </div>
                    <h6 class="card-title">Prof. Sarah Johnson</h6>
                    <p class="card-text text-muted small">Professor of Surgery</p>
                    <p class="card-text small">University of Melbourne, Australia</p>
                    <div class="speaker-topics">
                      <span class="badge bg-secondary me-1">Women in Surgery</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Speaker Categories -->
        <div class='fModule f-speaker-categories pb-0 f-module f-module-pages-custom'>
          <div class="f-module-title fModuleTitle">
            <h3>Speaker Categories</h3>
          </div>
          <div class="f-module-content fModuleContent">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card category-card">
                  <div class="card-body">
                    <h5 class="card-title">
                      <i class="fas fa-robot text-primary me-2"></i>
                      Robotic Surgery
                    </h5>
                    <p class="card-text">Leading experts in robotic-assisted minimally invasive surgery techniques and innovations.</p>
                    <ul class="list-unstyled">
                      <li><i class="fas fa-check text-success me-2"></i>Da Vinci Systems</li>
                      <li><i class="fas fa-check text-success me-2"></i>Single Port Surgery</li>
                      <li><i class="fas fa-check text-success me-2"></i>Future Technologies</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card category-card">
                  <div class="card-body">
                    <h5 class="card-title">
                      <i class="fas fa-brain text-primary me-2"></i>
                      Artificial Intelligence
                    </h5>
                    <p class="card-text">Pioneers in AI applications for surgical planning, navigation, and decision support.</p>
                    <ul class="list-unstyled">
                      <li><i class="fas fa-check text-success me-2"></i>Machine Learning</li>
                      <li><i class="fas fa-check text-success me-2"></i>Computer Vision</li>
                      <li><i class="fas fa-check text-success me-2"></i>Predictive Analytics</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card category-card">
                  <div class="card-body">
                    <h5 class="card-title">
                      <i class="fas fa-heartbeat text-primary me-2"></i>
                      Patient Safety
                    </h5>
                    <p class="card-text">Specialists focused on improving patient outcomes and safety in minimally invasive procedures.</p>
                    <ul class="list-unstyled">
                      <li><i class="fas fa-check text-success me-2"></i>Quality Metrics</li>
                      <li><i class="fas fa-check text-success me-2"></i>Risk Management</li>
                      <li><i class="fas fa-check text-success me-2"></i>Outcome Research</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Call for Speakers -->
        <div class='fModule f-call-for-speakers pb-0 f-module f-module-pages-custom'>
          <div class="f-module-content fModuleContent">
            <div class="card bg-light">
              <div class="card-body text-center">
                <h4 class="card-title">Interested in Speaking?</h4>
                <p class="card-text">We welcome submissions from qualified professionals who wish to share their expertise at WCES 2025.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                  <a href="#" class="btn btn-primary">Submit Abstract</a>
                  <a href="#" class="btn btn-outline-primary">Speaker Guidelines</a>
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
    .speaker-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: none;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .speaker-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
    }

    .speaker-image img {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border: 3px solid #f8f9fa;
    }

    .speaker-placeholder {
      width: 120px;
      height: 120px;
      background: #f8f9fa;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto;
      border: 3px solid #e9ecef;
    }

    .speaker-topics .badge {
      font-size: 0.75rem;
    }

    .category-card {
      border: none;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .category-card:hover {
      transform: translateY(-3px);
    }

    .category-card .card-title {
      color: var(--brand-color-1, #007bff);
      font-weight: 600;
    }

    @media (max-width: 768px) {

      .speaker-image img,
      .speaker-placeholder {
        width: 100px;
        height: 100px;
      }

      .speaker-topics .badge {
        font-size: 0.7rem;
        margin-bottom: 2px;
      }
    }
  </style>
@endsection
