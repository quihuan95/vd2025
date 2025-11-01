@php use Illuminate\Support\Facades\Storage; @endphp
@php
  $menuItems = [
      [
          'title' => 'common.nav.home',
          'route' => 'home',
          'url' => 'home',
          'has_submenu' => false,
          'submenu' => [],
      ],
      [
          'title' => 'common.nav.programme',
          'route' => null,
          'url' => '#',
          'has_submenu' => true,
          'submenu' => [
              [
                  'title' => 'common.nav.agenda',
                  'route' => 'programme.agenda',
                  'url' => 'programme.agenda',
              ],
              [
                  'title' => 'common.nav.speakers',
                  'route' => 'invited.speakers',
                  'url' => 'invited.speakers',
              ],
              [
                  'title' => 'common.nav.posters',
                  'route' => 'programme.posters',
                  'url' => 'programme.posters',
              ],
          ],
      ],
      [
          'title' => 'common.nav.venue',
          'route' => 'singapore.venue',
          'url' => 'singapore.venue',
          'has_submenu' => false,
          'submenu' => [],
      ],
      [
          'title' => 'common.nav.sponsorship',
          'route' => 'sponsors',
          'url' => 'sponsors',
          'has_submenu' => false,
          'submenu' => [],
      ],
      [
          'title' => 'common.nav.information',
          'route' => 'contact.faq',
          'url' => 'contact.faq',
          'has_submenu' => false,
          'submenu' => [],
      ],
      [
          'title' => 'common.nav.registration',
          'route' => 'registration.form',
          'url' => 'registration.form',
          'has_submenu' => false,
          'submenu' => [],
          'is_registration' => true,
      ],
  ];
@endphp

<header class="fHeader">
  <div class="navbar-header">
    <div class="container">
      <div class="fRegion region-header" data-fphp-region="header">
        <!-- Logo -->
        <div class='fModule f-logo col-xs-4 col-4 col-sm-4 col-md-5 col-lg-1 col-xl-1 col-xxl-1 f-module f-module-gallery-view'>
          <div class="f-module-content fModuleContent">
            <ul class="fGalleryImages fGalleryList fGalleryView">
              <li class="fGalleryItem fGalleryItem-0">
                <a href='{{ locale_route('home') }}' class="fGalleryImage">
                  <img src="{{ Storage::url('images/Logo BV - No Text.png') }}" alt="VDUHSC 2025 Logo" />
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- Navigation Menu -->
        <div class='fModule menu-horizontal menu-hover-1 ms-auto col-xs-3 col-3 col-sm-3 col-md-1 col-lg-10 col-xl-9 col-xxl-9 f-module f-module-pages-menu gap-2'>
          <div class="f-module-content fModuleContent">
            <!-- Mobile Menu Toggle -->
            <div id="fMenu-toggle" class="d-block d-lg-none d-xl-none d-xxl-none visible-xs d-sm-block visible-sm d-md-block visible-md navbar-toggle-container">
              <a class="navbar-toggle collapsed" data-toggle="collapse" href="#fMenu" aria-expanded="false" data-bs-toggle="collapse" data-bs-target="#fMenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
            </div>

            <!-- Main Navigation -->
            <nav aria-label='Main menu' id='fMenu'
              class='d-lg-block d-xl-block d-xxl-block visible-sm-block visible-md-block visible-lg-block visible-xl-block visible-xsl-block d-none hidden-xs d-sm-none hidden-sm d-md-none hidden-md'
              x-data="{ openSubmenu: null }">
              <ul class='fMenu'>
                @foreach ($menuItems as $index => $item)
                  <li class='menu-item {{ $item['route'] && request()->routeIs($item['route']) ? 'selected' : '' }} {{ $item['has_submenu'] ? 'has-submenu' : '' }}'
                    {{ $item['has_submenu'] ? 'aria-haspopup="true"' : '' }}>

                    @if ($item['has_submenu'] && !empty($item['submenu']))
                      <!-- Menu item with submenu - click to toggle -->
                      <a href='javascript:void(0);' @click="openSubmenu = openSubmenu === {{ $index }} ? null : {{ $index }}" class='submenu-toggle'
                        title='{{ $item['title'] === 'Home' ? 'Home' : ($item['title'] === 'Programme' ? 'Programme' : ($item['title'] === 'Sponsorship' ? 'Sponsorship' : ($item['title'] === 'Singapore' ? 'Singapore' : __('' . $item['title'])))) }}'>
                        <span class='menu-item-icon'></span>
                        <span
                          class='menu-item-text'>{{ $item['title'] === 'Home' ? __('common.nav.home') : ($item['title'] === 'Programme' ? __('common.nav.programme') : ($item['title'] === 'Sponsorship' ? __('common.nav.sponsorship') : ($item['title'] === 'Singapore' ? __('common.nav.singapore') : ($item['title'] === 'Invited Speakers' ? 'Invited Speakers' : ($item['title'] === 'Official Sponsors' ? 'Official Sponsors' : __('' . $item['title'])))))) }}</span>
                        <span class='submenu-arrow' x-show="openSubmenu !== {{ $index }}">▼</span>
                        <span class='submenu-arrow' x-show="openSubmenu === {{ $index }}">▲</span>
                      </a>
                    @else
                      <!-- Regular menu item -->
                      <a href='{{ $item['url'] === 'javascript:void(0);' || $item['url'] === 'javascript:void(0)' ? 'javascript:void(0);' : ($item['url'] === '#' ? '#' : locale_route($item['url'])) }}'
                        title='{{ $item['title'] === 'Home' ? 'Home' : ($item['title'] === 'Programme' ? 'Programme' : ($item['title'] === 'Sponsorship' ? 'Sponsorship' : ($item['title'] === 'Singapore' ? 'Singapore' : __('' . $item['title'])))) }}'>
                        <span class='menu-item-icon'></span>
                        <span
                          class='menu-item-text'>{{ $item['title'] === 'Home' ? __('common.nav.home') : ($item['title'] === 'Programme' ? __('common.nav.programme') : ($item['title'] === 'Sponsorship' ? __('common.nav.sponsorship') : ($item['title'] === 'Singapore' ? __('common.nav.singapore') : ($item['title'] === 'Invited Speakers' ? 'Invited Speakers' : ($item['title'] === 'Official Sponsors' ? 'Official Sponsors' : __('' . $item['title'])))))) }}</span>
                      </a>
                    @endif

                    @if ($item['has_submenu'] && !empty($item['submenu']))
                      <ul x-show="openSubmenu === {{ $index }}" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95" class="submenu">
                        @foreach ($item['submenu'] as $subItem)
                          <li class='menu-item {{ request()->routeIs($subItem['route']) ? 'selected' : '' }}'>
                            <a href='{{ locale_route($subItem['url']) }}'
                              title='{{ $subItem['title'] === 'Invited Speakers' ? 'Invited Speakers' : ($subItem['title'] === 'Official Sponsors' ? 'Official Sponsors' : __('' . $subItem['title'])) }}'>
                              <span class='menu-item-icon'></span>
                              <span
                                class='menu-item-text'>{{ $subItem['title'] === 'Invited Speakers' ? 'Invited Speakers' : ($subItem['title'] === 'Official Sponsors' ? 'Official Sponsors' : __('' . $subItem['title'])) }}</span>
                            </a>
                          </li>
                        @endforeach
                      </ul>
                    @endif
                  </li>
                @endforeach

                <!-- Language Switcher as menu item -->
                <li class='menu-item language-switcher-item'>
                  <div class="language-switcher" x-data="{ open: false }" @click.away="open = false">
                    <button @click="open = !open" class="language-toggle-btn">
                      @if (app()->getLocale() === 'en')
                        English
                      @else
                        Tiếng Việt
                      @endif
                    </button>

                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95"
                      x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
                      x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="language-dropdown">
                      <a href="{{ route('lang.switch', ['locale' => 'en']) }}" class="language-option m-0 {{ app()->getLocale() === 'en' ? 'active' : '' }}">
                        🇺🇸 English
                      </a>
                      <a href="{{ route('lang.switch', ['locale' => 'vi']) }}" class="language-option m-0 {{ app()->getLocale() === 'vi' ? 'active' : '' }}">
                        🇻🇳 Tiếng Việt
                      </a>
                    </div>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
