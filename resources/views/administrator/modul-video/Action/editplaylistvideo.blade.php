@extends('administrator.layout')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ url('proses-edit-playlist', $playlist->id_playlist) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- @METHOD('PUT') --}}
                <div class="form-group">
                    <label class="form-control-label" for="cover">Cover</label>
                    <input type="file" class="form-control" id="cover" name="cover" accept="image/*">
                    <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengubah cover.</small>
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="jdl_playlist">Judul Playlist</label>
                    <input type="text" class="form-control" id="jdl_playlist" name="jdl_playlist" value="{{ $playlist->jdl_playlist }}" required>
                </div>
                <div class="form-group">
                    <label class="form-control-label">Aktif</label>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="aktif" id="aktif" value="Y" {{ $playlist->aktif == 'Y' ? 'checked' : '' }}>
                            <label class="form-check-label" for="aktif">
                                Aktif
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="aktif" id="tidak_aktif" value="N" {{ $playlist->aktif == 'N' ? 'checked' : '' }}>
                            <label class="form-check-label" for="tidak_aktif">
                                Tidak Aktif
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
@endsection
