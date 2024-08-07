@extends('administrator.dashboard')

@section('content')

<div class="card">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Kategori Berita</h3>
        {{-- <p class="text-sm mb-0">
            This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started fast.
        </p> --}}
    </div>
    <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Link</th>
                    <th>Posisi</th>
                    <th>Aktif</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $category->nama_kategori }}</td>
                    <td>-- LINK --</td>
                    <td>{{ $category->sidebar }}</td>
                    <td>{{ $category->aktif }}</td>
                    <td>
                        <a href="{{ url('data/'.$category->id.'/edit') }}" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span>
                          Edit
                        </a>
                        <a href="{{ url('data/'.$category->id.'/hapus') }}" onclick="return confirm('yakin hapus {{ $category-> name }}?')" class="btn btn-danger btn-sm"><span class='glyphicon glyphicon-remove'></span>
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
        {{ $categories->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>
@endsection
