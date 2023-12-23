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
        <h1 class="fw-medium">Tambah Materi</h1>
        <form>
          <div class="mb-3">
            <label for="materialTitle" class="form-label">Judul Materi</label>
            <input type="text" name="title" class="form-control" id="materialTitle" placeholder="Masukkan judul materi baru...">
          </div>
          <div class="mb-3">
            <label for="materialDesc" class="form-label">Deskripsi Materi</label>
            <input type="text" name="description" class="form-control" id="materialDesc" placeholder="Masukkan deskripsi baru...">
          </div>
          <div class="mb-3">
            <label for="materialLink" class="form-label">Link Embed Materi</label>
            <input type="text" name="link" class="form-control" id="materialLink" placeholder="Masukkan link embed materi...">
          </div>
          <div class="d-flex gap-2 flex-column">
            <button type="submit" class="btn subtle-btn-dark text-white fw-bold w-100">TAMBAHKAN</button>
            <a href="{{ route('material') }}" class="btn btn-ashes text-dark fw-bold w-100">KEMBALI</a>
          </div>
        </form>
      </div>

      @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @yield('scripts')
  </body>

</html>
