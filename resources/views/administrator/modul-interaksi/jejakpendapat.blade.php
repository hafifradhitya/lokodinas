@extends('administrator.dashboard')

@section('content')

<div class="card">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Polling / Jajak Pendapat</h3>
    </div>
    <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Pilihan</th>
                    <th>Status</th>
                    <th>Rating</th>
                    <th>Aktif</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no=1;
                @endphp
                @foreach ( $polings as $poling )
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $poling->pilihan }}</td>
                    <td>{{ $poling->status }}</td>
                    <td>{{ $poling->rating }}</td>
                    <td>{{ $poling->aktif }}</td>
                    <td>
                        <a href="{{ url('data/'.$poling->id.'/edit') }}" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span>
                            Edit
                        </a>
                        <a href="{{ url('data/'.$poling->id.'/hapus') }}" onclick="return confirm('yakin hapus {{ $poling-> pilihan }}?')" class="btn btn-danger btn-sm"><span class='glyphicon glyphicon-remove'></span>
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
        {{ $polings->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>

@endsection
