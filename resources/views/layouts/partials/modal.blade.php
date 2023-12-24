<div class="modal fade mt-5" id="staticBackdrop__{{ $slug }}" data-bs-keyboard="false"
  aria-labelledby="staticBackdropLabel" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content subtle-bg-primary">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $title }}</h1>
        <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          {{ $description }}
        </p>
        <p class="m-0">
          <span class="fw-bold">Durasi:</span>
          {{ $duration }} jam
        </p>
      </div>
      <div class="modal-footer">
        <a class="btn subtle-btn-secondary w-100 text-white" href="{{ route('materials', $slug) }}">Lihat Daftar
          Materi</a>
      </div>
    </div>
  </div>
</div>
