@extends('layouts.app')

@section('content')
  <div class="">
    <div class="d-flex justify-content-center flex-wrap gap-3">

      @foreach ($courses as $course)
        <div class="card w-card">
          <div class="card-body justify-content-between d-flex flex-column gap-2">
            <span>
              <div class="d-flex justify-content-between ">
                <h5 class="card-title fw-bold">{{ $course->title }}</h5>
                <p class="subtle-text-primary fw-medium">{{ $course->duration }} jam</p>
              </div>
              <p class="card-text d-none d-sm-block d-lg-none">
                {{ Str::limit($course->description, 60) }}
              </p>
              <p class="card-text d-block d-sm-none d-lg-block">
                {{ Str::limit($course->description, 95) }}
              </p>
            </span>
            <button type="button" class="btn subtle-btn-secondary fw-medium text-uppercase text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{ $course->id }}">
              Detail Kursus
            </button>
            @include('layouts.partial.modal', [
              'id' => $course->id,
              'title' => $course->title,
              'description' => $course->description,
              'duration' => $course->duration
            ])
          </div>
        </div>
      @endforeach

    </div>
  </div>
@endsection

@section('scripts')
@endsection
