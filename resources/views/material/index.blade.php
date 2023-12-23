@extends('layouts.app')

@section('content')
  <div class="container">
    <table class="table-dark table-secondary table-striped table-hover table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Judul</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Link Embed</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="row">1</td>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>
            <a href="#" title="Ubah"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"
                class="icon icon-update">
                <path
                  d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
              </svg></a>
            <a href="#" title="Hapus">
              <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"
                class="icon icon-delete">
                <path
                  d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
              </svg>
            </a>
          </td>
        </tr>
        <tr>
          <td scope="row">2</td>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td>
            <a href="#" title="Ubah"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                width="24" class="icon icon-update">
                <path
                  d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
              </svg></a>
            <a href="#" title="Hapus">
              <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"
                class="icon icon-delete">
                <path
                  d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
              </svg>
            </a>
          </td>
        </tr>
        <tr>
          <td scope="row">2</td>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td>
            <a href="#" title="Ubah"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                width="24" class="icon icon-update">
                <path
                  d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
              </svg></a>
            <a href="#" title="Hapus">
              <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"
                class="icon icon-delete">
                <path
                  d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
              </svg>
            </a>
          </td>
        </tr>
        <tr>
          <td scope="row">3</td>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
          <td>
            <a href="#" title="Ubah"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                width="24" class="icon icon-update">
                <path
                  d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
              </svg></a>
            <a href="#" title="Hapus">
              <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"
                class="icon icon-delete">
                <path
                  d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
              </svg>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="5">
            <a href="{{ route('materialCreate') }}" class="text-white nav-link fw-bold">
              <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"
                fill="#fff">
                <path
                  d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h360v80H200v560h560v-360h80v360q0 33-23.5 56.5T760-120H200Zm120-160v-80h320v80H320Zm0-120v-80h320v80H320Zm0-120v-80h320v80H320Zm360-80v-80h-80v-80h80v-80h80v80h80v80h-80v80h-80Z" />
              </svg>
              Tambahkan Materi baru
            </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection

@section('scripts')
@endsection
