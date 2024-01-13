@extends('website.master')
@section('title')
    Profile
@endsection
@section('body')
    <div class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="{{ route('customer.dashboard') }}" type="button"
                            class="list-group-item list-group-item-action active">Dashboard</a>
                        <a href="{{ route('customer.profile') }}" type="button"
                            class="list-group-item list-group-item-action">Profile</a>
                        <a href="{{ route('customer.order') }}" type="button"
                            class="list-group-item list-group-item-action">My Order</a>
                        <a href="{{ route('customer.changePassword') }}" type="button"
                            class="list-group-item list-group-item-action">Change Password</a>
                        <a href="{{ route('customer.logout') }}" type="button"
                            class="list-group-item list-group-item-action">Log Out</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-body">
                        <h1 class=" text-center">Details</h1>
                        <div class="card">
                            <div class="card-body">
                                {{-- <h6 class="card-subtitle">Data table example</h6> --}}
                                <div class="table-responsive m-t-40 ">
                                    <table class="table table-striped border">
                                        <tr style="text-align: left">
                                            <th>Order Id:</th>
                                            <td>#{{ $orders->id }}</td>
                                        </tr>
                                        <tr style="text-align: left">
                                            <th>Order Date:</th>
                                            <td>{{ $orders->order_date }}</td>
                                        </tr>

                                        <tr style="text-align: left">
                                            <th>Delivery Address:</th>
                                            <td>{{ $orders->delivery_address }}</td>
                                        </tr>
                                        <tr style="text-align: left">
                                            <th>Delivery status:</th>
                                            <td>{{ $orders->delivery_status }}</td>
                                        </tr>
                                        <tr style="text-align: left">
                                            <th>Payment Status:</th>
                                            <td>{{ $orders->payment_status }}</td>
                                        </tr>
                                        <tr style="text-align: left">
                                            <th>Currency:</th>
                                            <td>{{ $orders->currency }}</td>
                                        </tr>
                                        @if ($orders->transaction_id != null)
                                            <tr style="text-align: left">
                                                <th>Transaction ID:</th>
                                                <td>{{ $orders->transaction_id }}</td>
                                            </tr>
                                        @endif
                                        <tr style="text-align: left">
                                            <th>Order Total:</th>
                                            <td>$ {{ $orders->order_total }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Product Information</h4>
                                <div class="table-responsive m-t-40 ">
                                    <table id="myTable" class="table table-striped border ">
                                        <thead>
                                            <tr class="text-center">
                                                <th>SL NO</th>
                                                <th>Proudct Name</th>
                                                <th>Proudct price</th>
                                                <th>Order Ammount</th>
                                                <th>Color</th>
                                                <th>Size</th>
                                                <th>Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders->allProductDetails as $detail)
                                                <tr class="text-center">
                                                    <th>{{ $loop->iteration }}</th>
                                                    <th>{{ $detail->product_name }}</th>
                                                    <th>৳ {{ $detail->product_price }}</th>
                                                    <th>{{ $detail->product_qty }}</th>
                                                    <th>{{ $detail->product_color }}</th>
                                                    <th>{{ $detail->product_size }}</th>
                                                    <th><img style="width: 100px" src="{{ asset($detail->product_image) }}"
                                                            alt="Error Image"></th>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
