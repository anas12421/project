@extends('admin.master')
@section('body')
    @include('sweetalert::alert')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">All Order Information</h4>
            <div class="table-responsive m-t-40 ">
                <table id="myTable" class="table table-striped border ">
                    <thead>
                        <tr class="text-center">
                            <th>SL NO</th>
                            <th>order No</th>
                            <th>order Date</th>
                            <th>Customer Info</th>
                            <th>Order Total</th>
                            <th>order Status</th>
                            <th>Payment Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @php
                        $count = 1;
                    @endphp
                    <tbody>
                        @foreach ($orders as $order)
                            @if ($order->order_status == 'Processing')
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>#{{ $order->id }}</td>
                                    <td>{{ $order->order_date }}</td>
                                    <td>{{ $order->customer->name . '(' . $order->customer->mobile . ')' }}</td>
                                    <td>${{ $order->order_total }}</td>
                                    <td>{{ $order->order_status }}</td>
                                    <td>{{ $order->payment_type }}</td>
                                    <td>
                                        <div class="btn-group mt-3">
                                            <form action="{{ route('admin.order-details') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $order->id }}">
                                                <button type="submit" class="btn btn-success btn-sm m-1"
                                                    title="Order Details">
                                                    <i class="fa-solid fa-circle-info"></i>
                                                </button>
                                            </form>
                                            <form action="{{ route('admin.order-edit') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $order->id }}">
                                                <button type="submit" class="btn btn-warning btn-sm m-1"
                                                    title="Order Edit">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </form>

                                            <form action="{{ route('admin.invoice') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $order->id }}">
                                                <button type="submit" class="btn btn-dark btn-sm m-1"
                                                    title="Order invoice">
                                                    <i class="bi bi-receipt-cutoff"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
