@extends('administrator.dashboard')

@section('content')

<div class="card">
    <!-- Card header -->
    <div class="card-header">
      <h3 class="mb-0">Menu Website</h3>
      {{-- <p class="text-sm mb-0">
        This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started fast.
      </p> --}}
    </div>
    <div class="table-responsive py-4">
      <table class="table table-flush" id="datatable-basic">
        <thead class="thead-light">
          <tr>
            <th>No</th>
            <th>Menu</th>
            <th>Level Menu</th>
            <th>Link</th>
            <th>Aktif</th>
            <th>Position</th>
            <th>Urutan</th>
            <th>#</th>
          </tr>
        </thead>
        <tbody>
        @php
            $no = 1;
        @endphp
        @foreach ($menuwebs as $menuweb)
          <tr>
            <td>{{ $no }}</td>
            <td>{{ $menuweb->nama_menu }}</td>
            <td>{{ $menuweb->link }}</td>
            <td>{{ $menuweb->aktif }}</td>
            <td>{{ $menuweb->position }}</td>
            <td>{{ $menuweb->urutan }}</td>
            <td>--</td>
          </tr>
        @php
          $no++;
        @endphp
        @endforeach
        </tbody>
      </table>
      {{ $menuwebs->links('vendor.pagination.bootstrap-4') }}
    </div>
  </div>
@endsection
