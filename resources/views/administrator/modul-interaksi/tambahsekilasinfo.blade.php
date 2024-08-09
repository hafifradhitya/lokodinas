@extends('administrator.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah Info</h3>
    </div>
    <div class="card-body">
        <form action="{{ url('proses-tambah-info') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="info">Tulis Info</label>
                <textarea class="form-control" id="info" name="info" rows="6"></textarea>
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="foto" name="foto">
                        <label class="custom-file-label" for="foto">Telusuri...</label>
                    </div>
                </div>
                <small class="form-text text-muted">Tidak ada berkas dipilih.</small>
            </div>
            <button type="submit" class="btn btn-primary">Tambahkan</button>
            <a href="{{ url('administrator/modul-interaksi/sekilasinfo') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection

<!-- @push('scripts')
<script>
    $(document).ready(function() {
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    });
</script>
@endpush -->