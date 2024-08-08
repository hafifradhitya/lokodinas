@extends('administrator.dashboard')

@section('content')

<div class="card">
    <!-- Card header -->
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="mb-0">Playlist Video</h3>
        <a href="{{ url("administrator/modul-video/tambahplaylistvideo") }}" class="btn btn-primary btn-sm">Tambahkan Data</a>
    </div>
    <div class="table-responsive py-4">
        <table class="table table-bordered" id="datatable-basic">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Cover</th>
                    <th>Judul Playlist</th>
                    <th>Aktif</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1
                @endphp
                @foreach ($playlists as $playlist)
                <tr>
                    <td>{{ $no }}</td>
                    <td>
                        <?php
                            if ($playlist->gbr_playlist != NULL) {
                            $gbr_playlist = $playlist->gbr_playlist;
                            }
                        ?>
                        <img style='width:80px;' src="{{ url('img_playlist/'.$playlist->gbr_playlist )}}">
                    </td>
                    <td>{{ $playlist->jdl_playlist }}</td>
                    <td>{{ $playlist->aktif }}</td>
                    <td>
                        <a href="{{ url('administrator/modul-video/playlistvideo'.$playlist->id_playlist.'/edit') }}" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span>
                          Edit
                        </a>
                        <a href="{{ url('administrator/modul-video/playlistvideo/'.$playlist->id_playlist.'/hapus') }}" onclick="return confirm('yakin hapus {{ $playlist->jdl_playlist }}?')" class="btn btn-danger btn-sm"><span class='glyphicon glyphicon-remove'></span>
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
        {{ $playlists->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>
@endsection
