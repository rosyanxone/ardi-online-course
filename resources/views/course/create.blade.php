@extends('layouts.form')

@section('content')
  <div class="w-75 subtle-bg-secondary rounded-4 p-4 text-white">
    <h1 class="fw-medium">Tambah Kursus</h1>
    <form>
      <div class="mb-3">
        <label class="form-label" for="courseTitle">Judul Kursus</label>
        <input class="form-control" id="courseTitle" name="title" type="text" placeholder="Masukkan judul materi baru..."
          required>
      </div>
      <div class="mb-3">
        <label class="form-label" for="courseDesc">Deskripsi Kursus</label>
        <input class="form-control" id="courseDesc" name="description" type="text"
          placeholder="Masukkan deskripsi baru..." required>
      </div>
      <div class="mb-3">
        <label class="form-label" for="courseDuration">Durasi Kursus</label>
        <input class="form-control" id="courseDuration" name="durasi" type="number"
          placeholder="Masukkan durasi kursus..." min="1" max="99" required>
      </div>
      <div class="d-flex flex-column gap-2">
        <button class="btn subtle-btn-dark fw-bold w-100 text-white" type="submit">TAMBAHKAN</button>
        <a class="btn btn-ashes text-dark fw-bold w-100" href="{{ route('course') }}">KEMBALI</a>
      </div>
    </form>
  </div>
@endsection
