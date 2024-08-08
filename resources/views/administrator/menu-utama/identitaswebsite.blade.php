@extends('administrator.layout')

@section('content')
<!-- <div class="header">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 d-inline-block mb-0">Alternative</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Alternative</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div> -->
<div class="card">
  <!-- Card header -->
  <div class="card-header">
    <h3 class="mb-0">Identitas Website</h3>
  </div>
  <div class="table-responsive py-4">
    <table class="table table-bordered" id="datatable-buttons">
      <tbody>
        <? $no++; ?>
        <? $no = 0; ?>
        @foreach($records as $record)
        <tr>
          <th>Nama Website</th>
          <td>{{ $record->nama_website }} </td>
        </tr>
        <tr>
          <th>Email</th>
          <td>{{ $record->email }}</td>
        </tr>
        <tr>
          <th>Domain</th>
          <td><a href="{{ $record->domain }}">http://localhost/lokodinas</a></td>
        </tr>
        <tr>
          <th>Sosial Media</th>
          <td><a href="https://www.facebook.com/dppkbkarawang/">https://www.facebook.com/dppkbkarawang/</a></td>
        </tr>
        <tr>
          <th>No Rekening</th>
          <td>{{ $record->rekening}}</td>
        </tr>
        <tr>
          <th>No Telpon</th>
          <td>{{ $record->no_telp}}</td>
        </tr>
        <tr>
          <th>Meta Deskripsi</th>
          <td>{{ $record->meta_deskripsi}}</td>
        </tr>
        <tr>
          <th>Meta Keyword</th>
          <td>{{ $record->meta_keyword}}</td>
        </tr>
        <tr>
          <th>Google Maps</th>
          <td><a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15863.072845158182!2d107.2976159!3d-6.2941631!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb8980521223b1f90!2sKantor+DPPKB+Karawang!5e0!3m2!1sid!2sid!4v1546678236217">{{ $record->maps }}</a></td>
        </tr>
        <tr>
          <th>Favicon</th>
          <td><input type='file' class='form-control' name='j' value='$record[favicon]'>
            <hr style='margin:5px'>
            Favicon Aktif Saat ini :
            <?php
            if ($record->favicon != NULL) {
              $favicon = $record->favicon;
            }
            ?>
            <img style='width:32px; height:32px' src="{{ url('images/'.$record->favicon )}}">
          </td>
        </tr>
        </tr>
        @endforeach
      </tbody>
    </table>
    <br>
    <div class='box-footer'>
      <button type='submit' name='submit' class='btn btn-info'>Update</button>
      <a href="{{ url('administrator/dashboard')}}"><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
    </div>
  </div>
</div>

@endsection