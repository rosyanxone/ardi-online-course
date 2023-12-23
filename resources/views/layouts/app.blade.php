<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  </head>

  <body class="subtle-bg-primary">
    <nav class="navbar navbar-expand-lg subtle-bg-secondary" data-bs-theme="dark">
      <div class="container">
        <a class="navbar-brand text-uppercase" href="/">Kursus Online</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" type="button"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse justify-content-end collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('kursus') || request()->is('kursus/*') ? 'active' : '' }}" href="/kursus">Kursus</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('materi') || request()->is('materi/*') ? 'active' : '' }}" href="/materi">Materi</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container py-4">
      @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @yield('scripts')
  </body>

</html>
