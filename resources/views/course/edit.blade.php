@extends('layouts.form')

@section('content')
  <div class="w-75 subtle-bg-secondary rounded-4 p-4 text-white">
    <h1 class="fw-medium">Edit Kursus</h1>
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
    <form action="{{ route('courseUpdate', $course->slug) }}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label" for="courseTitle">Judul Kursus</label>
        <input class="form-control" id="courseTitle" name="title" type="text" placeholder="Masukkan judul kursus..."
          required value="{{ $course->title }}">
      </div>
      <div class="mb-3">
        <label class="form-label" for="courseDesc">Deskripsi Kursus</label>
        <div class="form-floating">
          <textarea class="form-control" placeholder="Masukkan deskripsi baru..." name="description" required id="floatingTextarea2" style="height: 100px">{{ $course->description }}</textarea>
          <label for="floatingTextarea2" class="subtle-text-secondary">Masukkan deskripsi baru...</label>
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label" for="courseDuration">Durasi Kursus</label>
        <input class="form-control" id="courseDuration" name="duration" type="number"
          placeholder="Masukkan durasi kursus..." min="1" max="99" required value="{{ $course->duration }}">
      </div>
      <div class="d-flex flex-column gap-2">
        <button class="btn subtle-btn-dark fw-bold w-100 text-white" type="submit">PERBARUI</button>
        <a class="btn btn-ashes text-dark fw-bold w-100" href="{{ route('course') }}">KEMBALI</a>
      </div>
    </form>
  </div>
@endsection
