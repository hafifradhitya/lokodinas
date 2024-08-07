@extends('administrator.dashboard')

@section('content')

<div class="card">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Banner Home</h3>
        {{-- <p class="text-sm mb-0">
            This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started fast.
        </p> --}}
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
                @foreach ($banehomes as $banehome)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $banehome->judul }}</td>
                    <td><a href="{{ $banehome->url }}">{{ $banehome->url }}</a></td>
                    <td>{{ \Carbon\Carbon::parse($banehome->tgl_posting)->format('d M Y') }}</td>
                    <td>
                        <a href="{{ url('data/'.$banehome->id.'/edit') }}" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span>
                          Edit
                        </a>
                        <a href="{{ url('data/'.$banehome->id.'/hapus') }}" onclick="return confirm('yakin hapus {{ $banehome-> name }}?')" class="btn btn-danger btn-sm"><span class='glyphicon glyphicon-remove'></span>
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
        {{ $banehomes->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>

@endsection
