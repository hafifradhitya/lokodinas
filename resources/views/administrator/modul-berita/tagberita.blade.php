@extends('administrator.dashboard')

@section('content')

<div class="card">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Tag Berita</h3>
    </div>
    <div class="table-responsive py-4">
        <table class="table table-bordered" id="datatable-basic">
            <thead class="thead-light">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Tag Berita</th>
                    <th class="text-center">Link</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no=1;
                @endphp
                @foreach ($rows as $row)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $row->nama_tag }}</td>
                    <td><a href="{{ $row->tag_seo}}">{{ $row->tag_seo }}</a></td>
                    <td class="text-center">
                        <a href="{{ url('data/'.$row->id.'/edit') }}" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span>
                            Edit
                        </a>
                        <a href="{{ url('data/'.$row->id.'/hapus') }}" onclick="return confirm('yakin hapus {{ $row-> name }}?')" class="btn btn-danger btn-sm"><span class='glyphicon glyphicon-remove'></span>
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
        {{ $rows->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>

@endsection