@extends('layouts.app')
@php use Illuminate\Support\Facades\Storage; @endphp

@section('title', __('programme.pages.6_nov.title'))
@section('description', __('programme.pages.6_nov.description'))
@section('keywords', __('programme.pages.6_nov.keywords'))

@section('og_title', __('programme.pages.6_nov.title'))
@section('og_description', __('programme.pages.6_nov.description'))
@section('og_image', Storage::url('images/og/wces2025-6nov-og.jpg'))

@section('body_class', 'com-pages view-module alias- path-programme-6-nov- cva-pages-module no-user not-home width-full')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ __('programme.pages.6_nov.page_title') }}</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section id="fMatter" class="col-12">
        <div id="f-messages"></div>

        <!-- Programme PDF Viewer -->
        <div class='fModule f-programme-pdf f-module f-module-pages-custom'>
          <div class="f-module-content fModuleContent">
            <div class="pdf-viewer-container">
              <div id="pdf-viewer">
                <div class="pdf-controls">
                  <button id="prev-page" class="btn btn-outline-primary btn-sm">← Trước</button>
                  <span id="page-info" class="page-info">Trang 1 / 1</span>
                  <button id="next-page" class="btn btn-outline-primary btn-sm">Tiếp →</button>
                  <button id="zoom-out" class="btn btn-outline-secondary btn-sm">-</button>
                  <span id="zoom-info" class="zoom-info">100%</span>
                  <button id="zoom-in" class="btn btn-outline-secondary btn-sm">+</button>
                  <a href="{{ asset('files/[VD2025] Tentative Program E-V 2025.09.25.pdf') }}" target="_blank" class="btn btn-outline-success btn-sm">Tải xuống</a>
                </div>
                <div class="pdf-canvas-container">
                  <canvas id="pdf-canvas"></canvas>
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
    .f-programme-pdf {
      margin: 2rem 0;
    }

    .pdf-viewer-container {
      background: white;
      border-radius: 0.5rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      padding: 1rem;
      max-width: 1200px;
      margin: 0 auto;
    }

    .pdf-controls {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 1rem;
      margin-bottom: 1.5rem;
      padding: 1rem 1.5rem;
      background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
      border: 1px solid #e9ecef;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      flex-wrap: wrap;
      position: relative;
    }

    .pdf-controls::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: linear-gradient(90deg, var(--brand-color-1) 0%, #ff6b6b 50%, var(--brand-color-1) 100%);
      border-radius: 12px 12px 0 0;
    }

    .pdf-controls .btn {
      border-radius: 8px;
      font-weight: 500;
      transition: all 0.3s ease;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border: none;
      position: relative;
      overflow: hidden;
    }

    .pdf-controls .btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .pdf-controls .btn:active {
      transform: translateY(0);
    }

    .pdf-controls .btn-outline-primary {
      background: linear-gradient(135deg, var(--brand-color-1) 0%, #e74c3c 100%);
      color: white;
      border: none;
    }

    .pdf-controls .btn-outline-primary:hover {
      background: linear-gradient(135deg, #e74c3c 0%, var(--brand-color-1) 100%);
      color: white;
    }

    .pdf-controls .btn-outline-secondary {
      background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
      color: white;
      border: none;
    }

    .pdf-controls .btn-outline-secondary:hover {
      background: linear-gradient(135deg, #495057 0%, #6c757d 100%);
      color: white;
    }

    .pdf-controls .btn-outline-success {
      background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
      color: white;
      border: none;
    }

    .pdf-controls .btn-outline-success:hover {
      background: linear-gradient(135deg, #20c997 0%, #28a745 100%);
      color: white;
    }

    .page-info,
    .zoom-info {
      font-weight: 600;
      color: var(--brand-color-1);
      min-width: 100px;
      text-align: center;
      background: rgba(255, 255, 255, 0.8);
      padding: 0.5rem 1rem;
      border-radius: 8px;
      border: 1px solid #e9ecef;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
      font-size: 0.9rem;
    }

    .pdf-controls .btn-sm {
      padding: 0.5rem 1rem;
      font-size: 0.875rem;
      min-width: 80px;
    }

    #pdf-canvas {
      display: block;
      margin: 0 auto;
      border: 1px solid #ddd;
      border-radius: 0.5rem;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      max-width: 100%;
      height: auto;
      /* A4 aspect ratio: 1:1.414 (210mm:297mm) */
      aspect-ratio: 1 / 1.414;
      object-fit: contain;
    }

    .pdf-canvas-container {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 600px;
      background: #f8f9fa;
      border-radius: 0.5rem;
      margin: 1rem 0;
      padding: 1rem;
    }

    @media (max-width: 768px) {
      .pdf-viewer-container {
        padding: 0.5rem;
      }

      .pdf-controls {
        padding: 0.75rem 1rem;
        gap: 0.5rem;
        margin-bottom: 1rem;
      }

      .pdf-controls .btn {
        font-size: 0.8rem;
        padding: 0.4rem 0.8rem;
        min-width: 70px;
      }

      .page-info,
      .zoom-info {
        min-width: 80px;
        padding: 0.4rem 0.8rem;
        font-size: 0.8rem;
      }
    }

    @media (max-width: 480px) {
      .pdf-controls {
        flex-direction: column;
        gap: 0.75rem;
        padding: 1rem;
      }

      .pdf-controls .btn {
        width: 100%;
        max-width: 200px;
        margin: 0 auto;
      }

      .page-info,
      .zoom-info {
        width: 100%;
        max-width: 200px;
        margin: 0 auto;
      }
    }
  </style>
@endsection

@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
  <script>
    // Set PDF.js worker
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

    let pdfDoc = null;
    let pageNum = 1;
    let pageRendering = false;
    let pageNumPending = null;
    let scale = 1.0;
    const canvas = document.getElementById('pdf-canvas');
    const ctx = canvas.getContext('2d');

    // PDF file URL - Update this path
    const pdfUrl = "{{ asset('files/[VD2025] Tentative Program E-V 2025.09.25.pdf') }}";

    // Render the page
    function renderPage(num) {
      pageRendering = true;

      pdfDoc.getPage(num).then(function(page) {
        // Get the container width to calculate appropriate scale
        const container = document.querySelector('.pdf-canvas-container');
        const containerWidth = container.clientWidth - 40; // Account for padding

        // Calculate scale to fit container width while maintaining A4 ratio
        const pageWidth = page.getViewport({
          scale: 1
        }).width;
        const pageHeight = page.getViewport({
          scale: 1
        }).height;

        // Calculate scale to fit width
        let calculatedScale = (containerWidth / pageWidth) * scale;

        // Ensure minimum and maximum scale limits
        calculatedScale = Math.max(0.5, Math.min(calculatedScale, 3.0));

        const viewport = page.getViewport({
          scale: calculatedScale
        });

        // Set canvas size to match viewport
        canvas.width = viewport.width;
        canvas.height = viewport.height;

        const renderContext = {
          canvasContext: ctx,
          viewport: viewport
        };

        const renderTask = page.render(renderContext);

        renderTask.promise.then(function() {
          pageRendering = false;
          if (pageNumPending !== null) {
            renderPage(pageNumPending);
            pageNumPending = null;
          }
        });
      });

      document.getElementById('page-info').textContent = `Trang ${num} / ${pdfDoc.numPages}`;
    }

    // Queue rendering of the next page
    function queueRenderPage(num) {
      if (pageRendering) {
        pageNumPending = num;
      } else {
        renderPage(num);
      }
    }

    // Previous page
    function onPrevPage() {
      if (pageNum <= 1) {
        return;
      }
      pageNum--;
      queueRenderPage(pageNum);
    }

    // Next page
    function onNextPage() {
      if (pageNum >= pdfDoc.numPages) {
        return;
      }
      pageNum++;
      queueRenderPage(pageNum);
    }

    // Zoom in
    function onZoomIn() {
      scale += 0.25;
      renderPage(pageNum);
      document.getElementById('zoom-info').textContent = Math.round(scale * 100) + '%';
    }

    // Zoom out
    function onZoomOut() {
      if (scale <= 0.5) {
        return;
      }
      scale -= 0.25;
      renderPage(pageNum);
      document.getElementById('zoom-info').textContent = Math.round(scale * 100) + '%';
    }

    // Load PDF
    pdfjsLib.getDocument(pdfUrl).promise.then(function(pdfDoc_) {
      pdfDoc = pdfDoc_;
      document.getElementById('page-info').textContent = `Trang 1 / ${pdfDoc.numPages}`;
      renderPage(pageNum);
    }).catch(function(error) {
      console.error('Error loading PDF:', error);
      document.getElementById('pdf-canvas').style.display = 'none';
      document.querySelector('.pdf-controls').innerHTML = '<p class="text-danger">Không thể tải PDF. <a href="' + pdfUrl + '" target="_blank">Nhấn vào đây để tải xuống</a></p>';
    });

    // Event listeners
    document.getElementById('prev-page').addEventListener('click', onPrevPage);
    document.getElementById('next-page').addEventListener('click', onNextPage);
    document.getElementById('zoom-in').addEventListener('click', onZoomIn);
    document.getElementById('zoom-out').addEventListener('click', onZoomOut);

    // Handle window resize
    window.addEventListener('resize', function() {
      if (pdfDoc) {
        renderPage(pageNum);
      }
    });
  </script>
@endsection
