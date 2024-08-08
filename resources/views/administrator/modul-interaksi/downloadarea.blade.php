@extends('administrator.dashboard')

@section('content')

<div class="card">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Download File</h3>
    </div>
    <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Link</th>
                    <th>Hits</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php 
                $no=1;
                @endphp 
                @foreach ($downloads as $download)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $download->judul }}</td>
                    <td><a href="{{ $download->nama_file }}">Download</a></td>
                    <td>{{ $download->hits }}</td>
                    <td>{{ \Carbon\Carbon::parse($download->tgl_posting)->format('d M Y') }}</td>
                    <td>
                        <a href="{{ url('data/'.$download->id.'/edit') }}" class="btn btn-success btn-sm my-1"><i class="fa fa-edit"></i>
                        </a>
                        <a href="{{ url('data/'.$download->id.'/hapus') }}" onclick="return confirm('yakin hapus {{ $download->judul }}?')" class="btn btn-danger btn-sm my-1"><i class="fa fa-trash"></i>

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
        {{ $downloads->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>

@endsection