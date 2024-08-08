@extends('administrator.dashboard')

@section('content')

<div class="container-fluid mt--6">
  <!-- Table -->
  <div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">Halaman baru</h3>
        </div>
        <div class="table-responsive  py-4">
          <table class="table table-bordered" id="datatable-basic">
            <thead class="thead-light">
              <tr>
                <th class="text-center">No</th>
                <th class="text-center">Judul</th>
                <th class="text-center">Link</th>
                <th class="text-center">Tgl Posting</th>
                <th class="text-center">Action</th>
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
                <td><a href="{{ $page->isi_halaman }}">{{ $page->judul }}</a></td>
                <td>{{ \Carbon\Carbon::parse($page->tgl_posting)->format('d M Y') }}</td>
                <td>
                  <a href="{{ url('data/'.$page->id.'/edit') }}" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span>
                    Edit
                  </a>
                  <a href="{{ url('data/'.$page->id.'/hapus') }}" onclick="return confirm('yakin hapus {{ $page-> name }}?')" class="btn btn-danger btn-sm"><span class='glyphicon glyphicon-remove'></span>
                    Hapus
                  </a>
                </td>
              </tr>
              @php
              $no++;
              @endphp
              @endforeach
            </tbody>
          </table>
          <br>
          {{ $pages->links('vendor.pagination.bootstrap-4') }}
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
