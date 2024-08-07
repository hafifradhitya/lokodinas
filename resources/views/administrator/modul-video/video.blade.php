@extends('administrator.dashboard')

@section('content')

<div class="card">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Semua Video</h3>
        {{-- <p class="text-sm mb-0">
            This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started fast.
        </p> --}}
    </div>
    <div class="table-responsive py-4">
        <table class="table table-bordered" id="datatable-basic">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Judul Video</th>
                    <th>Tanggal Video</th>
                    <th>Playlist</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($video as $video)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $video->jdl_video }}</td>
                    <td>{{ $video->tanggal }}</td>
                    <td>{{ $video->playlist }}</td>
                    <td>--</td>
                </tr>
                @php
                    $no++;
                @endphp
                @endforeach
            </tbody>
            {{ $playlist->links('vendor.pagination.bootstrap-4') }}
        </table>
    </div>
</div>

@endsection
