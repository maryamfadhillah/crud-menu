<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <!-- SEO Meta Tags-->
  <meta name="description" content="Orderin - Layanan Menu Digital">
  <meta name="keywords"
    content="Layanan menu digital untuk restaurant, mudah diaplikasikan diberbagai jenis restaurant">
  <meta name="Orderin" content="Orderin Indonesia">
  <!-- Viewport-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon and Touch Icons-->
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="manifest" href="site.webmanifest">
  <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
  <link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/dist/simplebar.min.css') }}" />
  <link rel="stylesheet" media="screen" href="{{ asset('vendor/tiny-slider/dist/tiny-slider.css') }}" />
  <link rel="stylesheet" media="screen" href="{{ asset('vendor/prismjs/themes/prism.css') }}" />
  <link rel="stylesheet" media="screen" href="{{ asset('vendor/prismjs/plugins/toolbar/prism-toolbar.css') }}" />
  <link rel="stylesheet" media="screen" href="{{ asset('vendor/prismjs/plugins/line-numbers/prism-line-numbers.css') }}" />
  <!-- Main Theme Styles + Bootstrap-->
  <link rel="stylesheet" media="screen" href="{{ asset('css/theme.min.css') }}">
  <!-- Costum CSS -->
  <link rel="stylesheet" media="screen" href="{{ asset('css/costum/main.css') }}">
</head>

<body class="handheld-toolbar-enabled">
    {{-- MODALS --}}
    @stack('modals')

<main>
    @yield('content')
</main>

      <!-- Footer-->
  <footer class="footer bg-darker pt-5">
    <div class="container pt-2">
      <hr class="hr-light mt-md-2 mb-3">
      <div class="d-md-flex justify-content-between pt-4 pb-1">
        <div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">© All rights reserved. Made by
          <a class="text-light" href="#" target="_blank" rel="noopener">Orderin - 2021</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span
      class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">
    </i></a>
  <!-- Vendor scrits: js libraries and plugins-->
  <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
  <script src="{{ asset('vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
  <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
  <!-- Main theme script-->
  <script src="{{ asset('js/theme.min.js') }}"></script>
</body>

</html>