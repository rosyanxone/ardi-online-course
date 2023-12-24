@extends('layouts.form')

@section('content')
  <div class="w-75 subtle-bg-secondary rounded-4 p-4 text-white">
    <h1 class="fw-medium">Tambah Kursus</h1>
    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Gagal!</strong> Ada kesalahan dalam input anda.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="{{ route('courseStore') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label" for="courseTitle">Judul Kursus</label>
        <input class="form-control" id="courseTitle" name="title" type="text"
          placeholder="Masukkan judul kursus baru..." required>
      </div>
      <div class="mb-3">
        <label class="form-label" for="courseDesc">Deskripsi Kursus</label>
        <div class="form-floating">
          <textarea class="form-control" id="floatingTextarea2" name="description" style="height: 100px"
            placeholder="Masukkan deskripsi baru..." required></textarea>
          <label class="subtle-text-secondary" for="floatingTextarea2">Masukkan deskripsi baru...</label>
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label" for="courseDuration">Durasi Kursus/jam</label>
        <input class="form-control" id="courseDuration" name="duration" type="number"
          placeholder="Masukkan durasi kursus..." min="1" max="99" required>
      </div>
      <div class="d-flex flex-column gap-2">
        <button class="btn subtle-btn-dark fw-bold w-100 text-white" type="submit">TAMBAHKAN</button>
        <a class="btn btn-ashes text-dark fw-bold w-100" href="{{ route('course') }}">KEMBALI</a>
      </div>
    </form>
  </div>
@endsection
