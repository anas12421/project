@extends('website.master')
@section('title')
    Order
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
                    <div class="table-responsive m-t-40 ">
                        <table id="myTable" class="table table-striped border ">
                            <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Order No</th>
                                    <th>Order Date</th>
                                    <th>Order Total</th>
                                    <th>Order Status</th>
                                    <th>Delivery Status</th>
                                    <th>Delivery Address</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($order_all as $item)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>#{{ $item->id }}</td>
                                        <td>{{ $item->order_date }}</td>
                                        <td>৳{{ $item->order_total }}</td>
                                        <td>{{ $item->order_status }}</td>
                                        <td>{{ $item->delivery_status }}</td>
                                        <td>{{ $item->delivery_address }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <form action="{{ route('customer.details') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="text" hidden name="id"
                                                        value="{{ $item->id }}">
                                                    <button class=" btn btn-success">Details</button>
                                                </form>
                                                @if ($item->order_status == 'Complete')
                                                    <form action="{{ route('customer.review') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="text" hidden name="id"
                                                            value="{{ $item->id }}">
                                                        <button class=" btn btn-success">Review</button>
                                                    </form>
                                                @endif

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
