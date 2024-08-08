@extends('administrator.dashboard')

@section('content')

<div class="card">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Manajemen Users</h3>
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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no=1;
                @endphp
                @foreach ($users as $user)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->nama_lengkap }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <?php
                        if ($user->lokomedia != NULL) {
                            $lokomedia = $user->lokomedia;
                        }
                        ?>
                        <img style='width:32px; height:32px' src="{{ url('foto_user/'.$user->lokomedia )}}">
                    </td>
                    <td>{{ $user->blokir }}</td>
                    <td>{{ $user->level }}</td>
                    <td>
                        <a href="{{ url('data/'.$user->id.'/edit') }}" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span>
                            Edit
                        </a>
                        <a href="{{ url('data/'.$user->id.'/hapus') }}" onclick="return confirm('yakin hapus {{ $user-> username }}?')" class="btn btn-danger btn-sm"><span class='glyphicon glyphicon-remove'></span>
                            Hapus
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        {{ $users->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>

@endsection