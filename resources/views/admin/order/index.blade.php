@extends('admin.master')
@section('body')


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
@endsection
