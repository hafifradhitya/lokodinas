@extends('administrator.dashboard')

@section('content')

<div class="container-fluid mt--6">
    <!-- Table -->
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <h3 class="mb-0">Semua Berita</h3>
            {{-- <p class="text-sm mb-0">
              This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started fast.
              Percobaan
            </p> --}}
          </div>
          <div class="table-responsive py-4">
            <table class="table table-bordered" id="datatable-basic">
              <thead class="thead-light">
                <tr>
                  <th>Judul Berita</th>
                  <th>Tanggal</th>
                  <th>Status</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($news as $new)
                    <tr>
                        <td>{{ $new->judul }}</td>
                        <td>{{ $new->tanggal }}</td>
                        <td>{{ $new->status }}</td>
                        <td>-</td>
                    </tr>
                @php
                    $no++;
                @endphp
                @endforeach
              </tbody>
            </table>
            <br>
            {{ $news->links('vendor.pagination.bootstrap-4') }}
          </div>
        </div>
      </div>
    </div>
@endsection
