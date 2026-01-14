<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Oz Connect Consultancy | Study Abroad & Visa Experts</title>

<meta name="description" content="Oz Connect Consultancy helps students study abroad in Australia with expert visa guidance, admissions support, and test preparation.">

<!-- Bootstrap (deferred load) -->
<link rel="preload"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      as="style"
      onload="this.rel='stylesheet'">

<noscript>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</noscript>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" loading="lazy">

<!-- GLOBAL CSS -->
<link rel="stylesheet" href="{{ asset('css/main.css') }}">

@stack('styles')
</head>

<body>
    @include('partials.nav')

    @if(Route::currentRouteName() === 'home')
        @include('partials.carousal')
    @endif

    <main id="main-content">
        <div class="container-fluid">
            @yield('content')
        </div>
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>
</body>
</html>
