@extends('administrator.dashboard')

@section('content')

<div class="card">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Manajemen Users</h3>
        {{-- <p class="text-sm mb-0">
            This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started fast.
        </p> --}}
    </div>
    <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Foto</th>
                    <th>Blokir</th>
                    <th>Level</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>Tiger Nixon</td>
                    <td>Tiger Nixon</td>
                    <td>Edinburgh</td>
                    <td>Edinburgh</td>
                    <td>--</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection