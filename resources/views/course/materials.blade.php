@extends('layouts.form')

@section('content')
  <div class="w-75 subtle-bg-secondary rounded-4 p-4 text-white">
    <div class="d-flex align-items-center">
      <h1 class="fw-medium">{{ $course->title }}</h1>
      <span class="fs-5 mx-3">{{ $course->duration }} jam</span>
    </div>
    @foreach ($materials as $material)
      <div class="">
        <a class="fw-bold text-white" href="{{ $material->link_embed }}">{{ $material->title }}</a>
        <p>{{ $material->description }}</p>
      </div>
    @endforeach
    <div class="d-flex flex-column gap-2">
      <a class="btn btn-ashes text-dark fw-bold w-100" href="{{ route('home') }}">KEMBALI</a>
    </div>
  </div>
@endsection
