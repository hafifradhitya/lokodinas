@extends('administrator.dashboard')

@section('content')

<div class="card">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Template Website</h3>
    </div>
    <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama Template</th>
                    <th>Pembuat</th>
                    <th>Directory</th>
                    <th>Aktif</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no=1;
                @endphp
                @foreach ($templates as $template )
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $template->judul }}</td>
                    <td>{{ $template->pembuat }}</td>
                    <td>{{ $template->folder }}</td>
                    <td>{{ $template->aktif }}</td>
                    <td>
                        <a href="{{ url('data/'.$template->id.'/edit') }}" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span>
                            Edit
                        </a>
                        <a href="{{ url('data/'.$template->id.'/hapus') }}" onclick="return confirm('yakin hapus {{ $template-> username }}?')" class="btn btn-danger btn-sm"><span class='glyphicon glyphicon-remove'></span>
                            Hapus
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
        {{ $templates->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>

@endsection