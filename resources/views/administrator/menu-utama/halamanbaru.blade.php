@extends('administrator.dashboard')

@section('content')

<div class="container-fluid mt--6">
    <!-- Table -->
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <h3 class="mb-0">Tabel Data</h3>
            <p class="text-sm mb-0">
              Ini adalah contoh tabel data menggunakan plugin datatables.net yang terkenal. Ini adalah pengaturan minimal untuk memulai dengan cepat.
            </p>
          </div>
          <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-basic">
              <thead class="thead-light">
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Link</th>
                  <th>Tgl Posting</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($pages as $page)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $page->judul }}</td>
                        <td>-- LINK --</td>
                        <td>{{ \Carbon\Carbon::parse($page->tgl_posting)->format('d M Y') }}</td>
                        </td>
                    </tr>
                @php
                    $no++;
                @endphp
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>


@endsection
