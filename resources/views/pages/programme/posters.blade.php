@extends('layouts.app')
@php use Illuminate\Support\Facades\Storage; @endphp

@section('title', app()->getLocale() === 'vi' ? 'Báo cáo poster' : 'Poster Reports')
@section('description', app()->getLocale() === 'vi' ? 'Danh mục poster theo từng nhóm.' : 'Poster gallery grouped by sections.')
@section('keywords', 'posters, reports, gallery')

@section('body_class', 'com-pages view-module alias- path-programme-posters- cva-pages-module no-user not-home width-full')

@section('content')
  <div class="fPageTitle">
    <div class="container">
      <h1 id='heading'>{{ app()->getLocale() === 'vi' ? 'Báo cáo poster' : 'Poster Reports' }}</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section id="fMatter" class="col-12">
        <div id="f-messages"></div>

        <div class='fModule f-programme-content f-module f-module-pages-custom'>
          <div class="f-module-content fModuleContent">
            <div class="programme-container">
              @if (!empty($images))
                @php
                  $vertical = is_array($images) && array_key_exists('vertical', $images) ? $images['vertical'] : (is_array($images) ? $images : []);
                  $horizontal = is_array($images) && array_key_exists('horizontal', $images) ? $images['horizontal'] : [];
                @endphp

                @if (!empty($vertical))
                  {{-- <h3 class="mb-3" style="color: var(--brand-color-1);">{{ app()->getLocale() === 'vi' ? 'Poster dọc' : 'Vertical posters' }}</h3> --}}
                  <div id="gridGalleryVertical" class="grid-gallery vertical" data-batch-size="20"></div>
                  <div class="d-flex justify-content-center mt-3 mb-4">
                    <button id="loadMoreBtnVertical" type="button" class="btn btn-outline-primary">{{ app()->getLocale() === 'vi' ? 'Tải thêm' : 'Load more' }}</button>
                  </div>
                @endif

                @if (!empty($horizontal))
                  {{-- <h3 class="mb-3" style="color: var(--brand-color-1);">{{ app()->getLocale() === 'vi' ? 'Poster ngang' : 'Horizontal posters' }}</h3> --}}
                  <div id="gridGalleryHorizontal" class="grid-gallery horizontal" data-batch-size="20"></div>
                  <div class="d-flex justify-content-center mt-3 mb-4">
                    <button id="loadMoreBtnHorizontal" type="button" class="btn btn-outline-primary">{{ app()->getLocale() === 'vi' ? 'Tải thêm' : 'Load more' }}</button>
                  </div>
                @endif

                <!-- Lightbox -->
                <div id="lightbox" class="lightbox" hidden aria-hidden="true">
                  <button type="button" class="lightbox-close" aria-label="Close">×</button>
                  <div class="lightbox-controls" aria-hidden="false">
                    <button type="button" id="zoomOutBtn" class="zoom-btn" aria-label="Zoom out">−</button>
                    <button type="button" id="zoomResetBtn" class="zoom-btn" aria-label="Reset zoom">100%</button>
                    <button type="button" id="zoomInBtn" class="zoom-btn" aria-label="Zoom in">＋</button>
                  </div>
                  <div class="lightbox-canvas" id="lightboxCanvas">
                    <img id="lightboxImage" src="" alt="Poster Preview">
                  </div>
                </div>
              @else
                <div class="alert alert-warning">
                  <h5>{{ app()->getLocale() === 'vi' ? 'Chưa có dữ liệu poster' : 'No Poster Data' }}</h5>
                  <p>{{ app()->getLocale() === 'vi' ? 'Vui lòng thêm ảnh vào thư mục' : 'Please add images to' }} <code>public/images/posters/</code>.</p>
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
    .programme-container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .grid-gallery {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 16px;
    }

    .grid-item {
      padding: 0;
      border: none;
      background: transparent;
      cursor: pointer;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0,0,0,.08);
      transition: transform .2s ease, box-shadow .2s ease;
    }
    .grid-item:focus { outline: 2px solid var(--brand-color-1); outline-offset: 2px; }
    .grid-item:hover { transform: translateY(-2px); box-shadow: 0 8px 20px rgba(0,0,0,.12); }
    .grid-item img { display: block; width: 100%; height: 220px; object-fit: contain; background: #fff; }

    .skeleton {
      background: linear-gradient(90deg, #f0f0f0 25%, #e6e6e6 37%, #f0f0f0 63%);
      background-size: 400% 100%;
      animation: shimmer 1.4s ease infinite;
      width: 100%;
      height: 220px;
    }
    @keyframes shimmer {
      0% { background-position: 100% 0; }
      100% { background-position: 0 0; }
    }

    /* Responsive columns: 3 -> 2 -> 1 */
    @media (max-width: 768px) {
      .grid-gallery { grid-template-columns: repeat(2, 1fr); }
      .grid-item img, .skeleton { height: 180px; }
    }
    @media (max-width: 480px) {
      .grid-gallery { grid-template-columns: 1fr; }
      .grid-item img, .skeleton { height: 160px; }
    }

    /* Taller items for vertical posters */
    .grid-gallery.vertical .grid-item img,
    .grid-gallery.vertical .skeleton { height: 360px; }
    @media (max-width: 768px) {
      .grid-gallery.vertical .grid-item img,
      .grid-gallery.vertical .skeleton { height: 240px; }
    }
    @media (max-width: 480px) {
      .grid-gallery.vertical .grid-item img,
      .grid-gallery.vertical .skeleton { height: 200px; }
    }

    .lightbox {
      position: fixed;
      inset: 0;
      background: rgba(0,0,0,.85);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 2147483647; /* ensure on top of all layers */
      padding: 24px;
    }
    .lightbox-canvas {
      width: 90vw;
      height: 80vh;
      overflow: hidden;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #000;
      border-radius: 6px;
      box-shadow: 0 10px 30px rgba(0,0,0,.5);
    }
    .lightbox-canvas img {
      max-width: 100%;
      max-height: 100%;
      object-fit: contain;
      transform-origin: center center;
      cursor: default;
      user-select: none;
      -webkit-user-drag: none;
    }
    .lightbox.dragging .lightbox-canvas img {
      cursor: grabbing;
    }
    .lightbox[hidden] { display: none; }
    .lightbox-close {
      position: absolute;
      top: 16px;
      right: 16px;
      font-size: 28px;
      line-height: 1;
      width: 40px;
      height: 40px;
      border-radius: 20px;
      border: none;
      background: rgba(255,255,255,.9);
      color: #333;
      cursor: pointer;
      box-shadow: 0 2px 8px rgba(0,0,0,.25);
      z-index: 2147483647;
    }

    .lightbox-controls {
      position: absolute;
      bottom: 18px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      gap: 8px;
      z-index: 2147483647;
      background: rgba(0,0,0,.5);
      padding: 6px 10px;
      border-radius: 30px;
      backdrop-filter: blur(2px);
    }
    .zoom-btn {
      border: 1px solid rgba(255,255,255,.3);
      background: rgba(255,255,255,.85);
      color: #111;
      border-radius: 16px;
      padding: 6px 10px;
      font-weight: 600;
      min-width: 48px;
      cursor: pointer;
    }
  </style>
@endsection

@section('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const lightbox = document.getElementById('lightbox');
      const lightboxImage = document.getElementById('lightboxImage');
      const closeBtn = document.querySelector('.lightbox-close');

      function createItem(url) {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'grid-item';
        btn.setAttribute('data-url', url);
        btn.setAttribute('aria-label', 'Open poster');

        const placeholder = document.createElement('div');
        placeholder.className = 'skeleton';
        btn.appendChild(placeholder);

        const img = document.createElement('img');
        img.loading = 'lazy';
        img.decoding = 'async';
        img.fetchPriority = 'low';
        img.alt = 'Poster';
        img.dataset.src = url; // set later via IO

        img.addEventListener('load', () => {
          if (placeholder.parentNode) placeholder.remove();
        });

        btn.appendChild(img);
        return btn;
      }

      function mountBatch(state) {
        const end = Math.min(state.cursor + state.batch, state.images.length);
        const frag = document.createDocumentFragment();
        for (let i = state.cursor; i < end; i++) {
          frag.appendChild(createItem(state.images[i]));
        }
        state.gallery.appendChild(frag);
        state.cursor = end;
        if (state.cursor >= state.images.length && state.loadMoreBtn) state.loadMoreBtn.style.display = 'none';
        observeNewImages(state.gallery);
        wireClicks(state.gallery);
      }

      let io;
      function observeNewImages(scope) {
        if (!('IntersectionObserver' in window)) {
          scope.querySelectorAll('img[data-src]').forEach(img => {
            img.src = img.dataset.src;
            img.removeAttribute('data-src');
          });
          return;
        }
        if (!io) {
          io = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
              if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                io.unobserve(img);
              }
            });
          }, { rootMargin: '200px 0px' });
        }
        scope.querySelectorAll('img[data-src]').forEach(img => io.observe(img));
      }

      function wireClicks(scope) {
        scope.querySelectorAll('.grid-item').forEach(item => {
          if (item.dataset.wired === '1') return;
          item.dataset.wired = '1';
          item.addEventListener('click', () => {
            const url = item.getAttribute('data-url');
            lightboxImage.src = url;
            lightbox.removeAttribute('hidden');
            lightbox.setAttribute('aria-hidden', 'false');
            resetZoom();
          });
        });
      }

      // Setup two galleries if provided
      const data = @json(['vertical' => $vertical ?? [], 'horizontal' => $horizontal ?? []]);

      function initGallery(galleryId, loadBtnId, imagesArr) {
        const gallery = document.getElementById(galleryId);
        const loadMoreBtn = document.getElementById(loadBtnId);
        if (!gallery || !Array.isArray(imagesArr)) return;

        const state = { gallery, loadMoreBtn, images: imagesArr, batch: parseInt(gallery.dataset.batchSize || '20', 10), cursor: 0 };

        if (loadMoreBtn) {
          loadMoreBtn.addEventListener('click', () => mountBatch(state));
        }

        // Auto-load next batch near bottom (per page, not per gallery)
        if ('IntersectionObserver' in window) {
          const sentinel = document.createElement('div');
          sentinel.style.height = '1px';
          gallery.after(sentinel);
          const autoIo = new IntersectionObserver((entries) => {
            entries.forEach(e => {
              if (e.isIntersecting && state.cursor < state.images.length) {
                mountBatch(state);
              }
            });
          }, { rootMargin: '400px 0px' });
          autoIo.observe(sentinel);
        }

        // Initial render
        mountBatch(state);
      }

      initGallery('gridGalleryVertical', 'loadMoreBtnVertical', data.vertical);
      initGallery('gridGalleryHorizontal', 'loadMoreBtnHorizontal', data.horizontal);

      // Zoom & Pan
      let scale = 1;
      let translateX = 0;
      let translateY = 0;
      const MIN = 0.5;
      const MAX = 5;
      const STEP = 0.25;

      function applyTransform() {
        lightboxImage.style.transform = `translate(${translateX}px, ${translateY}px) scale(${scale})`;
      }
      function resetZoom() {
        scale = 1; translateX = 0; translateY = 0; applyTransform();
      }

      const zoomInBtn = document.getElementById('zoomInBtn');
      const zoomOutBtn = document.getElementById('zoomOutBtn');
      const zoomResetBtn = document.getElementById('zoomResetBtn');
      const canvas = document.getElementById('lightboxCanvas');

      function zoom(delta, centerX, centerY) {
        const prevScale = scale;
        scale = Math.min(MAX, Math.max(MIN, scale + delta));
        // Zoom towards cursor
        if (centerX !== undefined && centerY !== undefined && scale !== prevScale) {
          const rect = lightboxImage.getBoundingClientRect();
          const imgX = centerX - rect.left;
          const imgY = centerY - rect.top;
          const ratio = scale / prevScale;
          translateX -= (imgX - translateX) * (ratio - 1);
          translateY -= (imgY - translateY) * (ratio - 1);
        }
        applyTransform();
      }

      zoomInBtn?.addEventListener('click', () => zoom(STEP));
      zoomOutBtn?.addEventListener('click', () => zoom(-STEP));
      zoomResetBtn?.addEventListener('click', resetZoom);
      canvas?.addEventListener('wheel', (e) => {
        e.preventDefault();
        zoom(e.deltaY < 0 ? STEP : -STEP, e.clientX, e.clientY);
      }, { passive: false });

      // Drag to pan when zoomed
      let dragging = false;
      let lastX = 0, lastY = 0;
      canvas?.addEventListener('mousedown', (e) => {
        if (scale <= 1) return;
        dragging = true; lastX = e.clientX; lastY = e.clientY; lightbox.classList.add('dragging');
      });
      window.addEventListener('mousemove', (e) => {
        if (!dragging) return;
        translateX += (e.clientX - lastX);
        translateY += (e.clientY - lastY);
        lastX = e.clientX; lastY = e.clientY; applyTransform();
      });
      window.addEventListener('mouseup', () => { dragging = false; lightbox.classList.remove('dragging'); });

      function closeLightbox() {
        lightboxImage.src = '';
        lightbox.setAttribute('hidden', 'true');
        lightbox.setAttribute('aria-hidden', 'true');
      }

      closeBtn.addEventListener('click', closeLightbox);
      lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) closeLightbox();
      });
      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !lightbox.hasAttribute('hidden')) {
          closeLightbox();
        }
      });
    });
  </script>
@endsection