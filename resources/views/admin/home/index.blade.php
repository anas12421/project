@extends('admin.master')

@section('body')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    @include('sweetalert::alert')
    {{-- <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Dashboard 1</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard 1</li>
                </ol>
                <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i
                        class="fa fa-plus-circle"></i> Create New</button>
            </div>
        </div>
    </div> --}}
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Info box -->
    <!-- ============================================================== -->
    @php
    $orderCountPending = 0;
    $orderCountProcessing = 0;
    $orderCountCencel = 0;
    $orderCountComplete = 0;
    $orderCountAll = 0;
@endphp

@foreach ($orders as $order)
    @if ($order->order_status == 'Pending')
        @php
            $orderCountPending++;
        @endphp
    @endif
    @if ($order->order_status == 'Processing')
        @php
            $orderCountProcessing++;
        @endphp
    @endif
    @if ($order->order_status == 'Cencel')
        @php
            $orderCountCencel++;
        @endphp
    @endif
    @if ($order->order_status == 'Complete')
        @php
            $orderCountComplete++;
        @endphp
    @endif
    @php
        $orderCountAll++;
    @endphp
@endforeach


<div class="row g-0 mt-4">
    <div class="col-lg-4 col-md-6">
        <div class="card border">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <a href="{{ route('admin.new-order') }}">
                                    <h3><i class="icon-note"></i></h3>
                                    <p class="text-muted">NEW ORDER</p>
                                </a>

                            </div>


                            <div class="ms-auto">
                                <h2 class="counter text-info">{{ $orderCountPending }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 100%; height: 6px;"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card border">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex no-block align-items-center">
                            <div>

                                <a href="{{ route('admin.processing-order') }}">
                                    <h3><i class="icon-screen-desktop"></i></h3>
                                    <p class="text-muted">PROSECCING ORDER</p>
                                </a>

                            </div>
                            <div class="ms-auto">

                                <h2 class="counter text-primary">{{ $orderCountProcessing }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 100%; height: 6px;"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card border">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <a href="{{ route('admin.cencel-order') }}">
                                    <h3><i class="icon-doc"></i></h3>
                                    <p class="text-muted">CENCEL ORDER</p>
                                </a>

                            </div>
                            <div class="ms-auto">
                                <h2 class="counter text-danger">{{ $orderCountCencel }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%; height: 6px;"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card border">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex no-block align-items-center">
                            <div>

                                <a href="{{ route('admin.complete-order') }}">
                                    <h3><i class="icon-screen-desktop"></i></h3>
                                    <p class="text-muted">COMPLETE ORDER</p>
                                </a>

                            </div>
                            <div class="ms-auto">

                                <h2 class="counter text-success">{{ $orderCountComplete }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%; height: 6px;"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card border">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <a href="{{ route('admin.all-order') }}">
                                    <h3><i class="icon-bag"></i></h3>
                                    <p class="text-muted">All ORDER</p>
                                </a>

                            </div>
                            <div class="ms-auto">
                                <h2 class="counter text-success">{{ $orderCountAll }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%; height: 6px;"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
    <!-- ============================================================== -->
    <!-- End Info box -->

    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    {{-- <div class="right-sidebar">
        <div class="slimscrollright">
            <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
            <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">
                    <li><b>With Light sidebar</b></li>
                    <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                    <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                    <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                    <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme working">4</a></li>
                    <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                    <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                    <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                    <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                    <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                    <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                    <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                    <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                    <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                </ul>
                <ul class="m-t-20 chatonline">
                    <li><b>Chat option</b></li>
                    <li>
                        <a href="javascript:void(0)"><img src="{{ asset('admin') }}/assets/images/users/1.jpg"
                                alt="user-img" class="img-circle"> <span>Varun Dhavan <small
                                    class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="{{ asset('admin') }}/assets/images/users/2.jpg"
                                alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small
                                    class="text-warning">Away</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="{{ asset('admin') }}/assets/images/users/3.jpg"
                                alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small
                                    class="text-danger">Busy</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="{{ asset('admin') }}/assets/images/users/4.jpg"
                                alt="user-img" class="img-circle"> <span>Arijit Sinh <small
                                    class="text-muted">Offline</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="{{ asset('admin') }}/assets/images/users/5.jpg"
                                alt="user-img" class="img-circle"> <span>Govinda Star <small
                                    class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="{{ asset('admin') }}/assets/images/users/6.jpg"
                                alt="user-img" class="img-circle"> <span>John Abraham<small
                                    class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="{{ asset('admin') }}/assets/images/users/7.jpg"
                                alt="user-img" class="img-circle"> <span>Hritik Roshan<small
                                    class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="{{ asset('admin') }}/assets/images/users/8.jpg"
                                alt="user-img" class="img-circle"> <span>Pwandeep rajan <small
                                    class="text-success">online</small></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
@endsection
