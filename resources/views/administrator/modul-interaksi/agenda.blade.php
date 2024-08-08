@extends('administrator.dashboard')

@section('content')

<div class="card">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Semua Agenda</h3>
        {{-- <p class="text-sm mb-0">
            This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started fast.
        </p> --}}
    </div>
    <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Tema</th>
                    <th>Tgl Mulai</th>
                    <th>Tgl Selesai</th>
                    <th>Jam</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no=1;
                @endphp
                @foreach ($agendas as $agenda)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $agenda->tema }}</td>
                    <td>{{ $agenda->tgl_mulai }}</td>
                    <td>{{ $agenda->tgl_selesai }}</td>
                    <td>{{ $agenda->jam }}</td>
                    <td>--</td>
                </tr>
                @php
                $no++;
                @endphp
                @endforeach
            </tbody>
        </table>
        <br>
        {{ $agendas->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>

@endsection