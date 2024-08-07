@extends('administrator.layout')

@section('content')

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-gradient-primary border-0">
            <!-- Card body -->
            <div class="card-body">

            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-gradient-info border-0">
            <!-- Card body -->
            <div class="card-body">

            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-gradient-danger border-0">
            <!-- Card body -->
            <div class="card-body">

            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-gradient-default border-0">
            <!-- Card body -->
            <div class="card-body">

            </div>
        </div>
    </div>
</div>
<div class="card-deck flex-column flex-xl-row">

    {{-- <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Application Buttons</h3>
            </div>
            <div class="card-body">
                <p>Silahkan klik menu pilihan yang berada di sebelah kiri untuk mengelola konten website anda atau pilih ikon-ikon pada Control Panel di bawah ini:</p>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-th"></i> Identitas</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-th-large"></i> Menu</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-file-text"></i> Halaman</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-television"></i> Berita</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-bars"></i> Kategori</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-tag"></i> Tag Berita</a>
                <a href="#" class="btn btn-primary btn-app"><span class="badge bg-success"></span><i class="fa fa-comments"></i> Komen. Berita</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-bell-slash"></i> Sensor</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-camera-retro"></i> Album</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-camera"></i> Gallery</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-caret-square-o-right"></i> Playlist</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-play"></i> Video</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-tags"></i> Tag Video</a>
                <a href="#" class="btn btn-primary btn-app"><span class="badge bg-info"></span><i class="fa fa-comments-o"></i> Komen. Video</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-file-image-o"></i> Ads Atas</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-file-image-o"></i> Ads Sidebar</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-file-image-o"></i> Ads Tengah</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-circle-thin"></i> Logo</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-file"></i> Template</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-circle"></i> Background</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-calendar-minus-o"></i> Agenda</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-calendar-minus-o"></i> Sekilas Info</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-bar-chart-o"></i> Polling</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-yahoo"></i> YM</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-download"></i> Download</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-bed"></i> Alamat</a>
                <a href="#" class="btn btn-primary btn-app"><span class="badge bg-warning"></span><i class="fa fa-envelope"></i> Pesan</a>
                <a href="#" class="btn btn-primary btn-app"><i class="fa fa-users"></i> Users</a>
            </div>
        </div>
    </div> --}}

    <div class="container mt-5">
        <h3 class="card-title">Panel Kontrol</h3>
        <p>Silakan pilih menu di bawah ini untuk mengelola konten website:</p>
        <div class="row">
            <div class="col-2 mb-3">
                <div class="card h-100">
                    <a href="#" class="btn btn-app d-flex flex-column align-items-center justify-content-center h-100 p-2">
                        <i class="fa fa-th fa-2x mb-1"></i>
                        <span class="small">Identitas</span>
                    </a>
                </div>
            </div>
            <div class="col-2 mb-3">
                <div class="card h-100">
                    <a href="#" class="btn btn-app d-flex flex-column align-items-center justify-content-center h-100 p-2">
                        <i class="fa fa-th-large fa-2x mb-1"></i>
                        <span class="small">Menu</span>
                    </a>
                </div>
            </div>
            <div class="col-2 mb-3">
                <div class="card h-100">
                    <a href="#" class="btn btn-app d-flex flex-column align-items-center justify-content-center h-100 p-2">
                        <i class="fa fa-file fa-2x mb-1"></i>
                        <span class="small">Halaman</span>
                    </a>
                </div>
            </div>
            <div class="col-2 mb-3">
                <div class="card h-100">
                    <a href="#" class="btn btn-app d-flex flex-column align-items-center justify-content-center h-100 p-2">
                        <i class="fa fa-desktop fa-2x mb-1"></i>
                        <span class="small">Berita</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-2 mb-3">
                <div class="card h-100">
                    <a href="#" class="btn btn-app d-flex flex-column align-items-center justify-content-center h-100 p-2">
                        <i class="fa fa-bars fa-2x mb-1"></i>
                        <span class="small">Kategori</span>
                    </a>
                </div>
            </div>
            <div class="col-2 mb-3">
                <div class="card h-100">
                    <a href="#" class="btn btn-app d-flex flex-column align-items-center justify-content-center h-100 p-2">
                        <i class="fa fa-tag fa-2x mb-1"></i>
                        <span class="small">Tag Berita</span>
                    </a>
                </div>
            </div>
            <div class="col-2 mb-3">
                <div class="card h-100">
                    <a href="#" class="btn btn-app d-flex flex-column align-items-center justify-content-center h-100 p-2">
                        <i class="fa fa-comments fa-2x mb-1"></i>
                        <span class="small">Komentar</span>
                    </a>
                </div>
            </div>
            <div class="col-2 mb-3">
                <div class="card h-100">
                    <a href="#" class="btn btn-app d-flex flex-column align-items-center justify-content-center h-100 p-2">
                        <i class="fa fa-bell-slash fa-2x mb-1"></i>
                        <span class="small">Sensor</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h6 class="surtitle">5/23 projects</h6>
                    <h5 class="h3 mb-0">Progress track</h5>
                </div>
                <div class="col-4 text-right">
                    <a href="#!" class="btn btn-sm btn-neutral">Action</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush list my--3">
                <li class="list-group-item px-0">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <a href="#" class="avatar rounded-circle">
                                <img alt="Image placeholder" src="../../assets/img/theme/bootstrap.jpg">
                            </a>
                        </div>
                        <div class="col">
                            <h5>Argon Design System</h5>
                            <div class="progress progress-xs mb-0">
                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="60"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item px-0">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <a href="#" class="avatar rounded-circle">
                                <img alt="Image placeholder" src="../../assets/img/theme/angular.jpg">
                            </a>
                        </div>
                        <div class="col">
                            <h5>Angular Now UI Kit PRO</h5>
                            <div class="progress progress-xs mb-0">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item px-0">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <a href="#" class="avatar rounded-circle">
                                <img alt="Image placeholder" src="../../assets/img/theme/sketch.jpg">
                            </a>
                        </div>
                        <div class="col">
                            <h5>Black Dashboard</h5>
                            <div class="progress progress-xs mb-0">
                                <div class="progress-bar bg-red" role="progressbar" aria-valuenow="72" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 72%;"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item px-0">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <a href="#" class="avatar rounded-circle">
                                <img alt="Image placeholder" src="../../assets/img/theme/react.jpg">
                            </a>
                        </div>
                        <div class="col">
                            <h5>React Material Dashboard</h5>
                            <div class="progress progress-xs mb-0">
                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="90"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item px-0">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <a href="#" class="avatar rounded-circle">
                                <img alt="Image placeholder" src="../../assets/img/theme/vue.jpg">
                            </a>
                        </div>
                        <div class="col">
                            <h5>Vue Paper UI Kit PRO</h5>
                            <div class="progress progress-xs mb-0">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-8">

    </div>
    <div class="col-xl-4">

        @endsection
