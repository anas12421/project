@extends('admin.master')
@section('body')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Order Basic Information</h4>
                {{-- <h6 class="card-subtitle">Data table example</h6> --}}
                <div class="table-responsive m-t-40 " >
                    <table class="table table-striped border"  >
                        <tr style="text-align: left">
                            <th >Order Id:</th>
                            <td >{{ $ordersDetails->id }}</td>
                        </tr>
                        <tr style="text-align: left">
                            <th>Order Date:</th>
                            <td>{{ $ordersDetails->order_date }}</td>
                        </tr>
                        <tr style="text-align: left">
                            <th>Order Total:</th>
                            <td>৳ {{ $ordersDetails->order_total }}</td>
                        </tr>
                        <tr style="text-align: left">
                            <th>Tax Total:</th>
                            <td>৳ {{ $ordersDetails->tax_total }}</td>
                        </tr>
                        <tr style="text-align: left">
                            <th> Shipping Total</th>
                            <td>৳ {{ $ordersDetails->shipping_total }}</td>
                        </tr>
                        <tr style="text-align: left">
                            <th> Order status</th>
                            <td>{{ $ordersDetails->order_status }}</td>
                        </tr>
                        <tr style="text-align: left">
                            <th>Delivery Address:</th>
                            <td>{{ $ordersDetails->delivery_address }}</td>
                        </tr>
                        <tr style="text-align: left">
                            <th>Delivery status:</th>
                            <td>{{ $ordersDetails->delivery_status }}</td>
                        </tr>
                        <tr style="text-align: left">
                            <th>Payment Type:</th>
                            <td>{{ $ordersDetails->payment_type }}</td>
                        </tr>
                        <tr style="text-align: left">
                            <th>Payment status:</th>
                            <td>{{ $ordersDetails->payment_status }}</td>
                        </tr>
                        <tr style="text-align: left">
                            <th>Currency:</th>
                            <td>{{ $ordersDetails->currency }}</td>
                        </tr>
                        @if ($ordersDetails->transaction_id != null)
                            <tr style="text-align: left">
                                <th>Transaction ID:</th>
                                <td>{{ $ordersDetails->transaction_id }}</td>
                            </tr>
                        @endif


                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">OCustomer Information</h4>
                <div class="table-responsive m-t-40 ">
                    <table id="myTable" class="table table-striped border ">
                        <thead>
                            <tr class="text-center">
                                <th>Customer Name</th>
                                <th>Mobile Number</th>
                                <th>Email Address</th>
                                <th>Delivery Address</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <th>{{ $ordersDetails->customer->name }}</th>
                                <th>{{ $ordersDetails->customer->mobile }}</th>
                                <th>{{ $ordersDetails->customer->email }}</th>
                                <th>{{ $ordersDetails->delivery_address }}</th>
                                <th>৳ {{$ordersDetails->order_total}}</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Order Product Information</h4>
                <div class="table-responsive m-t-40 ">
                    <table id="myTable" class="table table-striped border ">
                        <thead>
                            <tr class="text-center">
                                <th>SL NO</th>
                                <th>Proudct Name</th>
                                <th>Proudct price</th>
                                <th>Order Ammount</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ordersDetails->allProductDetails as $detail)
                                <tr class="text-center">
                                    <th>{{$loop->iteration}}</th>
                                    <th>{{$detail->product_name}}</th>
                                    <th>৳ {{$detail->product_price}}</th>
                                    <th>{{$detail->product_qty}}</th>
                                    <th>৳ {{$detail->product_price*$detail->product_qty}}</th>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
