@extends('administrator.dashboard')

@section('content')
<style>
    .table td {
        word-wrap: break-word;
        white-space: normal;
    }
</style>
<div class="card">
    <!-- Card header -->
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="mb-0">Sekilas Info</h3>
        <a href="{{ url('administrator/modul-interaksi/tambahsekilasinfo')}}" class="btn btn-primary btn-sm">Tambah Data</a>
    </div>
    <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Info</th>
                    <th>Aktif</th>
                    <th>Tanggal Posting</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no=1;
                @endphp
                @foreach ($infos as $info)
                <tr>
                    <td>{{ $no }}</td>
                    <td>
                        <?php
                        if ($info->gambar != NULL) {
                            $gambar = $info->gambar;
                        }
                        ?>
                        <img style='width: 75px; height:75px' src="{{ url('foto_info/'.$info->gambar )}}">
                    </td>
                    <td>{{ $info->info }}</td>
                    <td>{{ $info->aktif }}</td>
                    <td>{{ \Carbon\Carbon::parse($info->tanggal)->format('d M Y') }}</td>
                    <td>
                        <a href="{{ url('data/'.$info->id.'/edit') }}" class="btn btn-success btn-sm my-1"><i class="fa fa-edit"></i>
                        </a>
                        <a href="{{ url('data/'.$info->id.'/hapus') }}" onclick="return confirm('yakin hapus {{ $info->info }}?')" class="btn btn-danger btn-sm my-1"><i class="fa fa-trash"></i>

                        </a>
                    </td>
                </tr>
            </tbody>
            @php
            $no++;
            @endphp
            @endforeach
        </table>
        <br>
        {{ $infos->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>

@endsection