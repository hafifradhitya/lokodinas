@extends('administrator.dashboard')

@section('content')
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3 class="mb-0">Tambah Halaman Baru</h3>
        </div>
        <div class="card-body">
          <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="form-group">
              <label for="isi_halaman">Isi Halaman</label>
              <textarea class="form-control" id="isi_halaman" name="isi_halaman" rows="10"></textarea>
            </div>
            <div class="form-group">
              <label for="gambar">Gambar</label>
              <input type="file" class="form-control-file" id="gambar" name="gambar">
            </div>
            <button type="submit" class="btn btn-primary">Tambahkan</button>
            <a href="{{ url('administrator.menu-utama.halamanbaru')}}" class="btn btn-danger">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
  CKEDITOR.replace('isi_halaman');
</script>
@endpush