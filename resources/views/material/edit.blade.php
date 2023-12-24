@extends('layouts.form')

@section('content')
  <div class="w-75 subtle-bg-secondary rounded-4 p-4 text-white">
    <h1 class="fw-medium">Edit Materi</h1>
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
    <form action="{{ route('materialUpdate', $material->slug) }}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label" for="materialTitle">Judul Materi</label>
        <input class="form-control" id="materialTitle" name="title" type="text" value="{{ $material->title }}"
          placeholder="Masukkan judul materi..." required>
      </div>
      <div class="mb-3">
        <label class="form-label" for="materialDesc">Deskripsi Materi</label>
        <div class="form-floating">
          <textarea class="form-control" id="materialDesc" name="description" style="height: 100px"
            placeholder="Masukkan deskripsi baru..." required>{{ $material->description }}</textarea>
          <label class="subtle-text-secondary" for="materialDesc">Masukkan deskripsi materi baru...</label>
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label" for="materialLink">Link Embed Materi</label>
        <input class="form-control" id="materialLink" name="link_embed" type="text" value="{{ $material->link_embed }}"
          placeholder="Masukkan link embed materi..." required>
      </div>
      <div class="mb-3">
        <label class="form-label" for="materialCourseId">Kursus Materi</label>
        <select class="form-select" id="materialCourseId" name="course_id" aria-label="Default select example" required>
          <option disabled selected>Pilih kursus materi</option>
          @foreach ($courses as $course)
            <option value={{ $course->id }} {{ $material->course_id == $course->id ? 'selected' : '' }}>
              {{ $course->title }}
            </option>
          @endforeach
        </select>
      </div>
      <div class="d-flex flex-column gap-2">
        <button class="btn subtle-btn-dark fw-bold w-100 text-white" type="submit">PERBARUI</button>
        <a class="btn btn-ashes text-dark fw-bold w-100" href="{{ route('material') }}">KEMBALI</a>
      </div>
    </form>
  </div>
@endsection
