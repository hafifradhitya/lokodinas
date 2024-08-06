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

    <div class="card">
        <div class="card-header bg-transparent">
            <div class="row align-items-center">
                <div class="col">
                    <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                    <h2 class="h3 mb-0">Total orders</h2>
                </div>
            </div>
        </div>
        <div class="card-body">
            <!-- Chart -->
            <div class="chart">
                <canvas id="chart-bars" class="chart-canvas"></canvas>
            </div>
        </div>
    </div>
    <!-- Progress track -->
    <div class="card">
        <!-- Card header -->
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <!-- Surtitle -->
                    <h6 class="surtitle">5/23 projects</h6>
                    <!-- Title -->
                    <h5 class="h3 mb-0">Progress track</h5>
                </div>
                <div class="col-4 text-right">
                    <a href="#!" class="btn btn-sm btn-neutral">Action</a>
                </div>
            </div>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <!-- List group -->
            <ul class="list-group list-group-flush list my--3">
                <li class="list-group-item px-0">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <!-- Avatar -->
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
                            <!-- Avatar -->
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
                            <!-- Avatar -->
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
                            <!-- Avatar -->
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
                            <!-- Avatar -->
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
