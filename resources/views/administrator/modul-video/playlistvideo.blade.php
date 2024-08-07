@extends('administrator.dashboard')

@section('content')

<div class="card">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Playlist Video</h3>
        {{-- <p class="text-sm mb-0">
            This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started fast.
        </p> --}}
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
                    <td>--</td>
                </tr>
                @php
                    $no++;
                @endphp
                @endforeach
            </tbody>
            {{ $playlists->links('vendor.pagination.bootstrap-4') }}
        </table>
    </div>
</div>

@endsection
