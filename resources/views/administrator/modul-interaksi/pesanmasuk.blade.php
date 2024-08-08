@extends('administrator.dashboard')

@section('content')

<div class="card">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Pesan Masuk</h3>
    </div>
    <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Subjek</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no=1;
                @endphp
                @foreach ( $messages as $message )
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $message->nama }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->subjek }}</td>
                    <td>{{ \Carbon\Carbon::parse($message->tgl_selesai)->format('d M Y') }}</td>
                    <td>
                        <a href="{{ url('data/'.$message->id.'/edit') }}" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span>
                            Edit
                        </a>
                        <a href="{{ url('data/'.$message->id.'/hapus') }}" onclick="return confirm('yakin hapus {{ $message-> tema }}?')" class="btn btn-danger btn-sm"><span class='glyphicon glyphicon-remove'></span>
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
        {{ $messages->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>

@endsection