@extends('administrator.dashboard')

@section('content')

<div class="card">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Banner Slider</h3>
        {{-- <p class="text-sm mb-0">
            This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started fast.
        </p> --}}
    </div>
    <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
            <thead class="thead-light">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Judul</th>
                    <th class="text-center">Deskripsi</th>
                    <th class="text-center">Tgl Posting</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <? $no++; ?>
                <? $no = 1; ?>
                @foreach ($banes as $bane)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $bane->judul }}</td>
                    <td>{{ $bane->deskripsi }}</td>
                    <td>{{ \Carbon\Carbon::parse($bane->tgl_posting)->format('d M Y') }}</td>
                    <td>--</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection