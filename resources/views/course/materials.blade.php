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
    <div class="align-items-center justify-content-center d-flex py-4 px-4 " style="height: 100vh;">
      
      <div class="w-75 subtle-bg-secondary text-white p-4 rounded-4">
        <div class="d-flex align-items-center">
          <h1 class="fw-medium">{{ $course->title }}</h1>
          <span class="fs-5 mx-3">{{ $course->duration }} jam</span>
        </div>
        @foreach ($materials as $material)
          <div class="">
            <a href="{{ $material->link_embed }}" class="fw-bold text-white">{{ $material->title }}</a>
            <p>{{ $material->description }}</p>
          </div>
        @endforeach
        <div class="d-flex gap-2 flex-column">
          <a href="{{ route('home') }}" class="btn btn-ashes text-dark fw-bold w-100">KEMBALI</a>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @yield('scripts')
  </body>

</html>
